<?php

include_once("../classes/registerclass.php");

//declare variables to store data from form elements
$email;
$fname;
$lname;
$pword;

/*
 if register button is clicked, call the signup function to register user
 */
if (isset($_POST['register'])) {
    register();
}

/**
 *a function to register user
 *it returns success or error message after trying to register user
 */

function register()
{
    global $status;  //error or success status

    $user = new Registration;  // create instance of Registration class

    // checks if validation was successful
    if (validregister()) {
        // call addnewuser function from Registration class

        if ($user->emailexist($GLOBALS['email']))
        {
            // echo to the user that the email is taken
        } else {
            // set status to 1 if adding was successful and 2 if there was an error
            if ($user->addNewUser($GLOBALS['fname'], $GLOBALS['lname'], $GLOBALS['email'], $GLOBALS['pword'])) {
                $status = 1;
                header("Location:../pages/login.php");
               // clearFormElements(); // clear content from form

                echo "success";
            } else {
                $status = 2;
            }
        }

    } else {
    }
}


/**
 *a function to display error or success message upon registration
 */
function signupstatus()
{
    if (!empty($GLOBALS['status']) && $GLOBALS['status'] == 1) {
        echo "<center><h2 style='color:green'>Registration Successful </h2></center> <br>
                <h4 style='color:green'>You will be redirected to login pages in a few seconds<h4>";
        header("Refresh:2; URL=../index.php");
    } else if (!empty($GLOBALS['status']) && $GLOBALS['status'] == 2) {
        echo "<center><h2 style='color:red'> Registration Unsuccessful </h2></center>";
    }
}

/**
 *a function to clear input fields
 */
function clearFormElements()
{
    $_POST["fname"] = "";
    $_POST["lname"] = "";
    $_POST["email"] = "";
    $_POST["password"] = "";
}

/**
 *a function to validate user inputs
 * @return true if form is validated
 */
function validregister()
{
    global $fname;
    global $lname;
    global $email;
    global $pword;

    $ok = true;

    //validate password
    if (isset($_POST['password']) && !empty($_POST["password"])) {
        if (!preg_match("/^(?=.*\d)(?=.*[A-Za-z]).{6,16}$/", $_POST['password'])) {
            $GLOBALS['pwordError'] = "Weak password: must contain at least a letter, a number and must be more than 6 characters";
            $ok = false;
        } else {
            $pword = $_POST['password'];
        }
    } else {
        $ok = false;
    }

    //validate first name
    if (isset($_POST['fname']) && !empty($_POST["fname"])) {
        if (0 === preg_match('/^[a-zA-Z _-]*$/', $_POST['fname'])) {
            $GLOBALS['fnameError'] = "Name must contain only letters and can be separated by a hyphen.";
            $ok = false;
        } else {
            $fname = $_POST['fname'];
        }
    } else {
        $ok = false;
    }

    //validate last name
    if (isset($_POST['lname']) && !empty($_POST["lname"])) {
        if (0 === preg_match('/^[a-zA-Z _-]*$/', $_POST['lname'])) {
            $GLOBALS['lnameError'] = "Name must contain only letters and can be separated by a hyphen.";
            $ok = false;
        } else {
            $lname = $_POST['lname'];
        }
    } else {
        $ok = false;
    }


    //validate email
    if (isset($_POST['email']) && !empty($_POST["email"])) {
        if (!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $_POST['email'])) {
            $GLOBALS['emailError'] = "invalid email";
            $ok = false;
        } else {
            $email = $_POST['email'];
        }
    } else {
        $ok = false;
    }

    return $ok;

}


?>