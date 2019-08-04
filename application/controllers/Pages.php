<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
   function __construct() {
      parent::__construct();
      $this->load->library('form_validation');
      $this->load->model('report_model');
      $this->load->helper(array('form', 'url'));
    }

	public function index()
	{
    $data['page_title'] = 'Home';
    $data['events']=$this->report_model->updates();
		$this->load->view('templates/header',$data);
		$this->load->view('static/home',$data);
		$this->load->view('templates/footer');
	}
  public function success(){
    $this->load->view('static/success');
  }

  function view($page){
      if ( ! file_exists(APPPATH.'views/static/'.$page.'.php')){
          show_404();
      }
      $temp = ucfirst($page);
      $data['page_title'] = $temp;
      $data['about'] =  $this->report_model->info($id='1000');
      $data['events']=$this->report_model->updates();      
      $this->load->view('templates/header',$data);
      $this->load->view('static/'.$page,$data);
      $this->load->view('templates/footer');
  }

  function updates($title=""){
      if($title==""){
      $data['page_title'] = 'Updates';
      $data['updates']=$this->report_model->updates();
      $this->load->view('templates/header',$data);
      $this->load->view('static/updates',$data);
      $this->load->view('templates/footer');
    }
    else{
      $title1=$this->security->xss_clean($title);
      $temp = str_replace("-"," ",$title);
      $temp1 = ucfirst($temp);
      $data['page_title'] = $temp1;
      $temp = $this->report_model->updates($title1);
      if(count($temp)==1){
      $data['update']=$temp[0];
      $this->load->view('templates/header',$data);
      $this->load->view('static/single_updates',$data);
      $this->load->view('templates/footer');
      }
      else {
          {show_404();}
        }
      }
  }

  function blogs($title=""){
      if($title==""){
      $data['page_title'] = 'Blog';
      $data['blogs']=$this->report_model->blogs();
      $this->load->view('templates/header',$data);
      $this->load->view('static/blog',$data);
      $this->load->view('templates/footer');
    }
    else{
      $this->load->model('report_model');
      $title1 = $this->security->xss_clean($title);
      $temp = str_replace("-"," ",$title);
      $temp1 = ucfirst($temp);
      $data['page_title'] = $temp1;
      $data['blogs']=$this->report_model->blogs();
      $temp2 = $this->report_model->blogs($title1);
      if(count($temp2)==1){
      $data['blog']=$temp2[0];
      $this->load->view('templates/header',$data);
      $this->load->view('static/single_blog',$data);
      $this->load->view('templates/footer');
      }
      else {
          {show_404();}
        }
      }
  }

  function news_letter(){
    $this->load->model('report_model');
    $data=$this->security->xss_clean($data);
      $data = array(
      'email' => $this->input->post('email'),
      );
      $this->session->set_flashdata('msg', 'Successfully subscribed');
      $data['temp']="Successfully Subscribed";
      redirect('blog');
  }

}
