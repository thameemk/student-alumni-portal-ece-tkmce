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
      // using SendGrid's PHP Library
      // https://github.com/sendgrid/sendgrid-php
      // require 'vendor/autoload.php'; // If you're using Composer (recommended)
      // Comment out the above line if not using Composer
      require("sendgrid/sendgrid-php.php");
      // If not using Composer, uncomment the above line
      $email = new \SendGrid\Mail\Mail();
      $email->setFrom("test@example.com", "Example User");
      $email->setSubject("Sending with SendGrid is Fun");
      $email->addTo("thameemk612@yahoo.com", "Example User");
      $email->addContent(
          "text/plain", "and easy to do anywhere, even with PHP"
      );
      $email->addContent(
          "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
      );
      $sendgrid = new \SendGrid(getenv('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'));
      try {
          $response = $sendgrid->send($email);
          print $response->statusCode() . "\n";
          print_r($response->headers());
          print $response->body() . "\n";
      } catch (Exception $e) {
          echo 'Caught exception: ',  $e->getMessage(), "\n";
      }
    }

}
