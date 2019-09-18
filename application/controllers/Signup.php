<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

    function __construct() {
       parent::__construct();
       $this->load->library('form_validation','encryption');
       $this->load->model('report_model');
       $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $this->load->view('signup');
    }
    public function process(){
      require("./sendgrid/vendor/autoload.php");
      $data = $this->input->post();
      $data = $this->security->xss_clean($data);
      $this->form_validation->set_rules('user_email','User Email','required|is_unique[login_users.user_email]');
      if($this->form_validation->run() == FALSE){
        $this->session->set_flashdata('msgreq', 'You have already registred');
        redirect('signup');
      }
      else{
      $this->form_validation->set_rules('password', 'Password', 'required');
      $this->form_validation->set_rules('passconf', 'Re-enter', 'required|matches[password]');
          if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('msgreq', 'Password doesnot match');
            redirect('signup');
          }
          else {
            $this->form_validation->set_rules('firstname','First Name','required');
            $this->form_validation->set_rules('lastname','Last Name','required');
            $this->form_validation->set_rules('phone','Phone Number','required');
            $this->form_validation->set_rules('passyear','Pass year','required');
                if($this->form_validation->run() == FALSE){
                     $this->session->set_flashdata('msgreq', 'Fill all fields! ');
                     redirect('signup');
                 }
                else {
                    //generate simple random code
                    $set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $code = substr(str_shuffle($set), 0, 12);
                    $message = 	"
                          <html>
                          <head>
                            <title>Verification Code</title>
                          </head>
                          <body>
                            <h2>Thank you for Registering.</h2>
                            <p>Your Account:</p>
                            <p>Email: ".$this->input->post('user_email')."</p>
                            <p>Password: ".$this->input->post('password')."</p>
                            <p>Please click the link below to activate your account.</p>
                            <h4><a href='".base_url()."signup/activate/".$code."/".$this->input->post('user_email')."'>Activate My Account</a></h4>
                          </body>
                          </html>
                          ";
                      $email = new \SendGrid\Mail\Mail();
                      $email->setFrom("no-reply@ecetkmce.live", "Support Center ECETKMCE");
                      $email->setSubject("Verify Your Email");
                      $email->addTo($this->input->post('user_email'), $this->input->post('firstname'));
                      $email->addContent(
                        "text/html", $message
                      );
                      $sendgrid = new \SendGrid('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');

                      try {
                          $response = $sendgrid->send($email);
                          $status = $response->statusCode();
                          // print $response->statusCode() . "\n";
                        //  print_r($response->headers());
                         // print $response->body() . "\n";
                      } catch (Exception $e) {
                          echo 'Caught exception: ',  $e->getMessage(), "\n";
                      }
                      if($status=='202'){
                        $data = array(
                          'first_name' => $this->input->post('firstname'),
                          'last_name' => $this->input->post('lastname'),
                          'user_company' => $this->input->post('company'),
                          'user_email' => $this->input->post('user_email'),
                          'phone' => $this->input->post('phone'),
                          'year_pass' => $this->input->post('passyear'),
                          'user_password' => password_hash($this->input->post('password'),PASSWORD_BCRYPT),
                          'code' => $code,
                        );
                        $this->report_model->userRegister($data);
                        $this->session->set_flashdata('msg', 'Check your email for Verification link!');
                        redirect('signup');
                      }
                      else{
                        $this->session->set_flashdata('msgreq', 'Some error has been occured. Contact Web admin!');
                        redirect('signup');
                      }

                  }
                }
    }
  }
  public function activateAccount(){
    $code = $this->uri->segment(3);
    $email = $this->uri->segment(4);
    //fetch user details
    $user = $this->report_model->userRegisterActive($email);
    //if code matches
    if($user['code'] == $code){
        //update user active status
        $data['active_status'] = true;
        $query = $this->report_model->activate($data, $email);
        if($query){
          $this->session->set_flashdata('msg', 'User activated successfully.Login to Continue');
          $this->load->view('login');
        }
        else{
          $this->session->set_flashdata('msgreq', 'Something went wrong in activating account');
          redirect('signup');
        }
    }
    else{
      $this->session->set_flashdata('msgreq', 'Cannot activate account. Code didnt match');
      redirect('signup');
    }
  }

}
