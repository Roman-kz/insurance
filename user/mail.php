<?php
require '../static/sendgrid-php/vendor/autoload.php'; 
require '../static/sendgrid-php/sendgrid-php.php';

$M=$_POST['mail'];

$email = new \SendGrid\Mail\Mail();

$email->setFrom($M, "Example User");
$email->setSubject("Sending with SendGrid is Fun");
$email->addTo($M, "Example User");
$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
$email->addContent("text/html", "<strong>and easy to do anywhere, even with PHP</strong>");
$sendgrid = new \SendGrid('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');
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
?>