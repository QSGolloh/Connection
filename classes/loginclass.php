<?php

/**
 *@author Selassie Golloh
 *@version 1
 */

//include database connection class

require_once("../database/dbconnectclass.php");


class Login extends DatabaseConnection{

//login an existing user


    /*
    *function to verify user login
    */

    function verifylogin($email, $password){


        $mysql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $dbquery = $this->query($mysql);

        if($dbquery){
            while($r = $this->fetch()){
                if (password_verify($password,$r['password'])){
                    session_start();
                    $_SESSION['old_pass'] = $password;
                    $_SESSION['user_id']= $r['user_id'];
                    $_SESSION['email']=$r['email'];
                    $_SESSION['profile_pic']=$r['profile_pic'];
                    return 3;
                    //header("Location:index.php");
                }else{
                    return 2;
                }
            }
        } else{
            return 1;
        }
    }

}

?>