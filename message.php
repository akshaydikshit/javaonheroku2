<?php 
 
// Get the PHP helper library from twilio.com/docs/php/install 
 require __DIR__ . '\twilio-php-master\twilio-php-master/Twilio/autoload.php'; // Loads the library 

use Twilio\Rest\Client; 
 
$account_sid = 'ACf008ac9a8d930086e0f663674f37597c'; 
$auth_token = '1d1204cad6b8a0c6184a87b5f1b02766'; 
$client = new Client($account_sid, $auth_token); 
 


$client->messages->create(
    // the number you'd like to send the message to
    '+19292402278',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+16464551741',
        // the body of the text message you'd like to send
        'body' => 'Hello From Akshay Dikshit CS 643 FALL 2017'
    )
);