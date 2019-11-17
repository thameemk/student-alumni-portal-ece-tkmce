<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        if($this->session->userdata('user_email')) {
            redirect('User/home');
        }
        $data['title'] = 'Login';
        // $this->load->view('login');
        $this->load->view('userhome/header-login',$data);
        $this->load->view('userhome/login');
        $this->load->view('userhome/footer-login');
    }

    public function process() {
        // Load the model
        $this->load->model('report_model');
        $result = $this->report_model->login();

        if($result=='true'){
            $this->session->set_flashdata('msg', 'Login success');
            redirect('user/profile');
        }
        else {
          if($result == 'fail'){
            $this->session->set_flashdata('msg', 'Verify your email address');
            redirect('login');
          }
          else{
          $this->session->set_flashdata('msg', 'Email or password is incorrect');
          redirect('login');
          }

        }


    }
    public function logout() {
        $this->session->sess_destroy();
        $this->session->set_flashdata('msg', 'Logged out');
        $data['title'] = "Login";
        $this->load->view('userhome/header-login',$data);
        $this->load->view('userhome/login');
        $this->load->view('userhome/footer-login');
    }
}
