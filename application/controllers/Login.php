<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        if($this->session->userdata('user_email')) {
            redirect('User/home');
        }

        $this->load->view('login');
    }

    public function process() {
        // Load the model
        $this->load->model('report_model');
        $result = $this->report_model->login();

        if(! $result){
            if($result == 'fail'){
              $this->session->set_flashdata('msg', 'Verify Your Email Address');
              redirect('login');
            }
            else{
            $this->session->set_flashdata('msg', 'Email or Password is incorrect');
            redirect('login');
          }
        }
        else {
          $this->session->set_flashdata('msg', 'Login success');
            redirect('myportal');

        }


    }
    public function logout() {
        $this->session->sess_destroy();
        $this->session->set_flashdata('msg', 'Logged out');
        $this->load->view('login');
    }
}
