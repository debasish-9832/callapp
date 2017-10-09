<?php
// Get the PHP helper library from twilio.com/docs/php/install
require __DIR__ . '/Twilio/autoload.php';
// Loads the library
use Twilio\Rest\Client;

// Your Account Sid and Auth Token from twilio.com/user/account
$sid = 'AC2c5784ef5801ed4218fed83c37731974';
$token = 'ebac762806530bce8b1993e8b8c04c02';
$client = new Client($sid, $token);

$call = $client->calls->create(
    "+919832749011", "+12053012256",
    array("url" => "http://demo.twilio.com/docs/voice.xml")
);

echo $call->sid;