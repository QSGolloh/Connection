<?php

/**
 *@author Selassie Golloh
 *@version Version 1.0
 */

//include database connection class 

require_once("../database/dbconnectclass.php");

/**
*a class to for registration
*/

class Registration extends DatabaseConnection
{

    /**
    *a function to add new user into user table (registering a user)
    *@param $fname user first name
    *@param $lname user last name
    *@param $email user email
    *@param $pword user password
    *@return returns true if registration was successful 
    */
    function addNewUser($fname, $lname, $email, $pword){

        $fname = $this->sqlinjection($fname);
        $lname = $this->sqlinjection($lname);
        $email = $this->sqlinjection($email);
        // $userstatus = $this->sqlinjection($userstatus);
        $pword = trim($pword);

        //hash password for security purpose
        $hashedpword = md5($pword);//password_hash($pword, PASSWORD_DEFAULT);

        //write query statement
        $queryStatement = "INSERT INTO user (firstname,lastname, email, password, userstatus) 
        VALUES ('$fname', '$lname', '$email', '$hashedpword', 0)"; /// check this- should
        //probably add user (hash, userstatus) Values ($hash, 0);
        //ask constant 

        // execute query
        $useraccount = $this->query($queryStatement);

        //if query is successful
        if($useraccount){
            // Return Success - Valid Email
    // $msg = 'Your account has been made, <br /> 
    // please verify it by clicking the activation link that has been send to your email.'; //ask constant if this is right
             return true; 
        }
        // if query is not successful
        else {
            // $msg = 'Sorry an error occured, please try again.';
            return false;
        }
    }  



/**
    *a function to checks if email exists in database
    *@param $email user email
    *@return returns true if email exists in database
    */
    function emailexist($email){
        $success = false;
        
        $queryStatement = "SELECT * FROM user";
        $alluseraccount = $this->query($queryStatement);

        if($alluseraccount){
            while ($value = $this->fetch()) {
                if($value['email'] == $email){
                    $success = true;    
                }
            }
        }
        return $success;
    }  // end of function


    /**
    *a function to handle sql injection
    *@param $string string data
    *@return returns escaped data or null if error occurs
    */
    function sqlinjection($string){

        $data = mysqli_real_escape_string($this->getconnection(), $string);
        return $data;
    }  // end of function



}

?>