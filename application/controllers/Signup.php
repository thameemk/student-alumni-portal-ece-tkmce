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
        $data['title'] = 'Signup';
        $this->load->view('userhome/header-login',$data);
        $this->load->view('userhome/signup');
        $this->load->view('userhome/footer-login');
          // $this->load->view('user_home/server_migration');
    }
    public function process(){
      require("./sendgrid/vendor/autoload.php");
      $data = $this->input->post();
      $data = $this->security->xss_clean($data);
      $this->form_validation->set_rules('user_email','User Email','required|is_unique[login_users.user_email]');
      $this->form_validation->set_rules('phone','User Phone','required|is_unique[login_users.phone]');
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
            $this->form_validation->set_rules('passyear','Pass year','required');
            $this->form_validation->set_rules('agree','Agree','required');
                if($this->form_validation->run() == FALSE){
                     $this->session->set_flashdata('msgreq', 'Fill all fields! ');
                     redirect('signup');
                 }
                else {
                  $temp = $this->input->post('phone');
                  $phone = preg_replace('/\D+/', '', $temp);
                    // echo "flag1";exit;
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
                            <p>Please click the link below to activate your account.</p><br>
                            <p>https:".base_url()."signup/activateAccount/".$code."/".$phone."</p>
                          </body>
                          </html>
                          ";
                      // echo $message;exit;
                      $email = new \SendGrid\Mail\Mail();
                      $email->setFrom("no-reply@ecetkmce.live", "Support Center ECETKMCE");
                      $email->setSubject("Verify Your Email");
                      $email->addTo($this->input->post('user_email'), $this->input->post('firstname'));
                      $email->addContent(
                        "text/html", $message
                      );
                      $sendgrid = new \SendGrid('PUT_YOUR_API_KEY_HERE');

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
                          'phone' => $phone,
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
    // echo $code;
    $phone = $this->uri->segment(4);
    // echo $phone;
    //fetch user details
    $user = $this->report_model->getUser($phone);
    //if code matches
    if($user['code'] == $code){
        //update user active status
        $data['active_status'] = true;
        $query = $this->report_model->userActivateAccount($data, $phone);
        if($query){
          $this->session->set_flashdata('success', 'User activated successfully');
          redirect('login');
        }
        else{
          $this->session->set_flashdata('msgreq', 'Something went wrong');
          redirect('signup');
        }
    }
    else{
      $this->session->set_flashdata('msgreq', 'Cannot activate account. Code didnt match');
      redirect('signup');
    }
  }

}
