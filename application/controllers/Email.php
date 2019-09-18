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
          // $API_KEY = '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';

          $email = new \SendGrid\Mail\Mail();
          $email->setFrom("info@ecetkmce.live", "INFO ECETKMCE");
          $email->setSubject("Sending with SendGrid is Fun");
          $email->addTo("thameemk612@yahoo.com", "Web Admin");
          $email->addContent(
              "text/plain", "and easy to do anywhere, even with PHP"
          );
          $email->addContent(
              "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
          );
          $sendgrid = new \SendGrid('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');
          try {
              $response = $sendgrid->send($email);
             print $response->statusCode() . "\n";
            //  print_r($response->headers());
             // print $response->body() . "\n";
          } catch (Exception $e) {
              echo 'Caught exception: ',  $e->getMessage(), "\n";
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
