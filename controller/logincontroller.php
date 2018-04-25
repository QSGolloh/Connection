<?php

/**
 *@author Selassie Golloh
 */

//include login class

include("../classes/loginclass.php");

$error_login;


if (isset($_POST['login'])){
    validlogin();
}

function validlogin(){
    $success = true;
    $email = "";
    $password = "";

    if(isset($_POST['email']) && !empty($_POST['email'])){
        $email = $_POST['email'];
    } else{
        $emailError = "Please enter your Ashesi email";
        $success= false;
    }

    if (isset($_POST['password']) && !empty($_POST['password'])){
        $password = $_POST['password'];
    }else{
        $pwdError = "Please enter your password";
        $success= false;
    }

    if($success){
       verifyLogin($email, $password);
       global $error_login;
       $error_login = false;
    } 


}

/*
*function to verify user login and log a user into the system
*/
function verifyLogin($email, $password){

        global $status;

        $login = new Login();
        $dbquery = $login->verifylogin($email, $password);
    }

/**a function to display error or success message upon login
 */
function loginstatus()
{
    global $error_login;
    if (!isset($error_login)) {
        echo "";
    } else {
        echo "<h4 style='color:red'>User Doesn't Exist or Wrong Credentials</h4><br>";
    }
    

}

?>