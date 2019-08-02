<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('report_model');

        if(!$this->session->userdata('user_email')) {
            redirect('login');
        }
    }
    public function home()
    {
        $data['feed']=$this->report_model->userHome($showStatus='1');
        $this->load->view('user_home/user_header');
        $this->load->view('user_home/user_home',$data);
        $this->load->view('user_home/user_footer');
    }
    public function submit()
    {
        $this->load->view('user_home/user_header');
        $this->load->view('user_home/submit');
        $this->load->view('user_home/user_footer');
    }
    public function process()
    {
      $this->load->model('report_model');
      $data = array(
        'title' => $this->input->post('title'),
        'company' => $this->input->post('company'),
        'website' => $this->input->post('website'),
        'location' => $this->input->post('location'),
        'email' => $this->input->post('email'),
        'phone' => $this->input->post('phone'),
        'details' => $this->input->post('moreInfo'),
        'user_email' => $_SESSION['user_email'],
        'author_first_name' => $_SESSION['first_name'],
        'author_last_name' => $_SESSION['last_name'],
      );
      $this->report_model->form($data);
      $this->session->set_flashdata('msg', 'Information submitted successfully !');
      redirect('User/submit');

    }
}
