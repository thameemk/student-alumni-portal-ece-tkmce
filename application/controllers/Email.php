<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {
   function __construct() {
      parent::__construct();
      $this->load->library('form_validation');
      $this->load->model('report_model');
      $this->load->helper(array('form', 'url'));
    }

    public function send(){
      // $api = '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';

      require("sendgrid-php/sendgrid-php.php");
      $sendgrid = new SendGrid("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");
      $email    = new SendGrid\Email();
      $email->addTo("thameemk612@yahoo.com")
            ->setFrom("admin@ecetkmce.live")
            ->setSubject("Email Verification")
            ->setHtml("This is to verify your email address");
      $sendgrid->send($email);
      echo $this->email->print_debugger();
    }
    public function send1(){
      $this->load->library('email');

      $this->email->initialize(array(
        'protocol' => 'smtp',
        'smtp_host' => 'smtp.sendgrid.net',
        'smtp_user' => 'sendgridusername',
        'smtp_pass' => 'sendgridpassword',
        'smtp_port' => 587,
        'crlf' => "\r\n",
        'newline' => "\r\n"
      ));

      $this->email->from('your@example.com', 'Your Name');
      $this->email->to('someoneexampexample@example.com');
      // $this->email->cc('another@another-example.com');
      // $this->email->bcc('them@their-example.com');
      $this->email->subject('Email Test');
      $this->email->message('Testing the email class.');
      $this->email->send();

      echo $this->email->print_debugger();
    }
}
