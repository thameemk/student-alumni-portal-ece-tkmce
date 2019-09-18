<?php
// using SendGrid's PHP Library
// https://github.com/sendgrid/sendgrid-php
// require 'vendor/autoload.php'; // If you're using Composer (recommended)
// Comment out the above line if not using Composer
require("./sendgrid-php/sendgrid-php.php");
// If not using Composer, uncomment the above line
$email = new \SendGrid\Mail\Mail();
$email->setFrom("info@ecetkmce.live", "INFO ECETKMCE");
$email->setSubject("Sending with SendGrid is Fun");
$email->addTo("thameemk612@yahoo.com", "Thameem K");
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
