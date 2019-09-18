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
	  //require("./sendgrid-php.php");
          require("./sendgrid/vendor/autoload.php");
        	// contains a variable called: $API_KEY that is the API Key.
        	// You need this API_KEY created on the Sendgrid website.
        	// include_once('./credentials.php');
          $API_KEY = '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';

        	$FROM_EMAIL = 'info@ecetkmce.live';
        	// they dont like when it comes from @gmail, prefers business emails
        	$TO_EMAIL = 'thameemk612@yahoo.com';
        	// Try to be nice. Take a look at the anti spam laws. In most cases, you must
        	// have an unsubscribe. You also cannot be misleading.
        	$subject = "ADMIN TEST";
        	$from = new SendGrid\Email(null, $FROM_EMAIL);
        	$to = new SendGrid\Email(null, $TO_EMAIL);
        	$htmlContent = 'Try to be nice. Take a look at the anti spam laws. In most cases, you must have an unsubscribe. You also cannot be misleading.';
        	// Create Sendgrid content
        	$content = new SendGrid\Content("text/html",$htmlContent);
        	// Create a mail object
        	$mail = new SendGrid\Mail($from, $subject, $to, $content);

        	$sg = new \SendGrid($API_KEY);
        	$response = $sg->client->mail()->send()->post($mail);

        	if ($response->statusCode() == 202) {
        		// Successfully sent
        		echo 'done';
        	} else {
        		echo 'false';
        	}
    }
    public function send1(){
      $this->load->library('email');
      $this->email->initialize(array(
        'protocol' => 'smtp',
        'smtp_host' => 'smtp.sendgrid.net',
        'smtp_user' => 'thameemk',
        'smtp_pass' => 'tAJAk23V6ar6A4b',
        'smtp_port' => 587,
        'crlf' => "\r\n",
        'newline' => "\r\n"
      ));

      $this->email->from('info@ecetkmce.live', 'No Reply');
      $this->email->to('thameemk612@yahoo.com');
      // $this->email->cc('another@another-example.com');
      // $this->email->bcc('them@their-example.com');
      $this->email->subject('Email Test');
      $this->email->message('Testing the email class.');
      $this->email->send();

      echo $this->email->print_debugger();
    }

}
