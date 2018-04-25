<?php

//include the database class
require_once("database/dbconnectclass.php");
$database = new DatabaseConnection();

if(isset($_GET['email']) && !empty($_GET['email'])){
    // Verify data
    $email = mysqli_escape_string($database->getconnection(),$_GET['email']); // Set email variable

$search = mysqli_query($database->getconnection(), "SELECT email, userstatus FROM user WHERE email='".$email."' AND userstatus='0'") 
or die(mysqli_error($database->getconnection())); 
$match  = mysqli_num_rows($search);

// echo $match; // Display how many matches have been found -> remove this when done with testing ;)


if($match > 0){
    // We have a match, activate the account
    // We have a match, activate the account
mysqli_query($database->getconnection(), "UPDATE user SET userstatus='1' WHERE email= '$email' AND userstatus='0'") 
or die(mysqli_error($database->getconnection()));
echo '<div>Your account has been activated, you can now <a href="pages/login.php">login</a></div>';
//figure out where to plass the statusmsg div on connect page.
// i think once link is activited user should be sent to login page with
//statusmsg div message 
}else{
    // No match -> invalid url or account has already been activated.
     echo '<div >Invalid approach, please use the link that has been send to your email.</div>';
}


}else{
    // Invalid approach
     echo '<div >Invalid approach, please use the link that has been send to your email.</div>';
}



?>