<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
   function __construct() {
      parent::__construct();
      $this->load->library('form_validation');
      $this->load->model('report_model');
      $this->load->helper(array('form', 'url'));
    }

    public function verifyPost(){
      $code = $this->uri->segment(3);
      // echo $code;
      $phone = $this->uri->segment(4);
      // echo $phone;
      //fetch user details
      $user = $this->report_model->postVerify($phone);
      //if code matches
      if($user['code'] == $code){
          //update user active status
          $data['showStatus'] = true;
          $query = $this->report_model->updatePostStatus($data,$phone);
          if($query){
            $this->session->set_flashdata('msg', 'Verified successfully');
            redirect('user/home');
          }
          else{
            $this->session->set_flashdata('msgreq', 'Something went wrong');
            redirect('user/home');
          }
      }
      else{
        $this->session->set_flashdata('msgreq', 'Cannot verify. Code didnt match');
        redirect('user/home');
      }
  }
}
