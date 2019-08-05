<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
        $this->load->model('report_model');
        if(!$this->session->userdata('user_email')) {
            redirect('login');
        }
    }
    // public function home()
    // {
    //     $data['title'] = 'Home';
    //     // $data['feed']=$this->report_model->userHome($showStatus="1");
    //     $data['feed']=$this->report_model->userHome();        
    //     $this->load->view('user_home/user_header',$data);
    //     $this->load->view('user_home/user_home',$data);
    //     $this->load->view('user_home/user_footer');
    // }
    public function submit()
    {
        $data['title'] = 'New post';
        $this->load->view('user_home/user_header',$data);
        $this->load->view('user_home/submit');
        $this->load->view('user_home/user_footer');
    }
    public function process()
    {
      $data=$this->security->xss_clean($data);
      $user_email=$_SESSION['user_email'];
      $this->db->where('user_email',$user_email);
      $query=$this->db->get('login_users');
      $row = $query->row();
      $temp = array(
          'lid' => $row->lid,
          'user_email' => $row->user_email,
          'user_company' => $row->user_company,
          'author_first_name' => $row->first_name,
          'author_last_name' => $row->last_name,
          'validated' => true
      );
      $this->session->set_userdata($temp);
      echo '<pre>'; print_r($this->session->all_userdata());
      $data = array(
        'title' => $this->input->post('title'),
        'place' => $this->input->post('company'),
        'reg_link' => $this->input->post('website'),
        'location' => $this->input->post('location'),
        'email' => $this->input->post('email'),
        'phone' => $this->input->post('phone'),
        'details' => $this->input->post('moreInfo'),
        'user_email' => $_SESSION['user_email'],
        'company' => $_SESSION["user_company"],
        'author_first_name' => $_SESSION['author_first_name'],
        'author_last_name' => $_SESSION['author_last_name'],
      );
      $this->report_model->form($data);
      $this->session->set_flashdata('msg', 'Information submitted successfully !');
      redirect('User/submit');
    }

    public function profile()
    {
        $user_email=$_SESSION['user_email'];
        $data['user']=$this->report_model->userUploads($user_email);
        $this->db->where('user_email',$user_email);
        $query=$this->db->get('login_users');
        $row = $query->row();
        $temp = array(
            'lid' => $row->lid,
            'user_email' => $row->user_email,
            'user_company' => $row->user_company,
            'author_first_name' => $row->first_name,
            'author_last_name' => $row->last_name,
            'phone'=>$row->phone,
            'img'=> $row->gravatar,
            'validated' => true
        );
        $this->session->set_userdata($temp);
        //count posts
        $this->db->where('user_email',$user_email);
        $temp2=$this->db->get('feedHome');
        $data['num_rows'] =  $temp2->num_rows();
        //session values
        $data['img'] = $_SESSION['img'];
        $data['user_company'] = $_SESSION['user_company'];
        $data['user_email'] = $_SESSION['user_email'];
        $data['phone'] = $_SESSION['phone'];

        $fullname =  $_SESSION['author_first_name']." ". $_SESSION['author_last_name'];  ;
        $data['title'] = $fullname;
        $this->load->view('user_home/user_header',$data);
        $this->load->view('user_home/profile',$data);
        $this->load->view('user_home/user_footer');
    }
    public function editprofile()
    {
        $data['title'] = 'Edit profile';
        $this->load->view('user_home/user_header',$data);
        $this->load->view('user_home/edit_profile');
        $this->load->view('user_home/user_footer');
    }
}
