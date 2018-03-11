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

      $select_query = "SELECT * FROM user WHERE email = '$email'";
      $login_query = $this->query($select_query);


      if ($login_query){
        while ($row = $this->fetch()) {
          if (md5(trim($password)) == $row['password']){
        // start a session for the user
            session_start();
            $_SESSION['userid'] = $row['user_id'];
            $_SESSION['email'] = $row['email'];
            header('Location:../pages/edit_profile.php');
          }else {
            echo "Login failed";
          }
        }
      }
    }
}
  