<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

    function __construct() {
       parent::__construct();
       $this->load->library('form_validation');
       $this->load->model('report_model');
       $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $this->load->view('signup');
    }
    public function process(){
      $this->form_validation->set_rules('password', 'Password', 'required');
      $this->form_validation->set_rules('passconf', 'Re-enter', 'required|matches[password]');
      $this->form_validation->set_rules('firstname','First Name','required');
      $this->form_validation->set_rules('lastname','Last Name','required');
      $this->form_validation->set_rules('user_email','User Email','required');
      $this->form_validation->set_rules('phone','Phone Number','required');
      $this->form_validation->set_rules('passyear','Pass year','required');
      if($this->form_validation->run() == FALSE){
           $this->session->set_flashdata('msgreq', 'Fill all required fields!');
           redirect('signup');
       }
      else {
          $data = array(
            'first_name' => $this->input->post('firstname'),
            'last_name' => $this->input->post('lastname'),
            'user_company' => $this->input->post('company'),
            'user_email' => $this->input->post('user_email'),
            'phone' => $this->input->post('phone'),
            'year_pass' => $this->input->post('passyear'),
          );
          $data=$this->security->xss_clean($data);
          $this->report_model->userRegister($data);
          $this->session->set_flashdata('msg', 'Registration Success!');
          redirect('signup');
        }
    }

}
