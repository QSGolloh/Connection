<?php

//include the database class
require_once("../database/dbconnectclass.php");

// Return Success - Valid Email
$msg = 'Your account has been made, <br /> please verify it by clicking the activation link that has been send to your email.';

$hash = md5( rand(0,1000) ); // Generate random 32 character hash and assign it to a local variable.
// Example output: f4552671f8909587cf485ea990207f3b


mysql_query("INSERT INTO user (hash) VALUES(
'". mysql_escape_string($hash) ."') ") or die(mysql_error());



$to      = $email; // Send email to our user 
$subject = 'Signup | Verification'; // Give the email a subject 
$message = '
 
Thanks for signing up!
Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
 
------------------------
Username: '.$name.'
Password: '.$password.' --- i dont need this 
------------------------
 
Please click this link to activate your account:
http://www.yourwebsite.com/verify.php?email='.$email.'&hash='.$hash.'
 
'; // Our message above including the link
                     
$headers = 'From:noreply@ConnectAsh.com' . "\r\n"; // Set from headers
mail($to, $subject, $message, $headers); // Send our email


?>