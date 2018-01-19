<?php

/**
 *@author Selassie Golloh
 */

//include login class

include("../classes/loginclass.php");


if (isset($_POST['login'])){
    validlogin();
}

function validlogin(){
    $success = false;
    $email = "";
    $password = "";

    if(isset($_POST['email']) && !empty($_POST['email'])){
        $email = $_POST['email'];
        $success= true;
    } else{
        global $emailError;
        $emailError = "Please enter your email";
    }

    if (isset($_POST['password']) && !empty($_POST['password'])){
        $password = $_POST['password'];
        $success= true;
    }else{
        global $pwdError;
        $pwdError = "Please enter your password";
    }

    if($success){
        verifyLogin($email, $password);
    }


}

/*
*function to verify user login and log a user into the system
*/
function verifyLogin($email, $password){

        global $status;

        $login = new Login;
        $dbquery = $login->verifylogin($email, $password);
        // if successful
        if($dbquery ==3){
            if ($_SESSION['email'] == 1){
                header("Location:../pages/profile.php");
            }
        }

        //if password doesnt match
        if($dbquery ==2) {
            $status = 2;
        }

        //if user account isnt active
        else{
            $status = 1;

        }
    }

/**a function to display error or success message upon login
 */
function loginstatus()
{
    if (!empty($GLOBALS['status']) && $GLOBALS['status'] == 1) {
        echo "<h4 style='color:red'>User Doesn't Exist or Signup Request is Awaiting Acceptance from Admin</h4><br>";

    }
    else if (!empty($GLOBALS['status']) && $GLOBALS['status'] == 2) {
        echo "<h4 style='color:red'> Wrong Login Credentials</h4><br>" ;
    }
    

}

?>