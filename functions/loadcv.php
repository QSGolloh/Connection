<?php
/**
 *@author Selassie Golloh
 *@version 1.0 
 **/

//include the database class
require_once("../database/dbconnectclass.php");

$fname;
$lname;
$address;
$phoneno;
$nationality ;
$email;
$linkedIn;

/**
* method to load all header details
*/
function loadheader(){
    $user_id =  $_SESSION['userid'];
    $load = new DatabaseConnection;
    $sql_query = "SELECT * FROM header WHERE user_id = '$user_id' ";
    $load_query = $load->query($sql_query);
    if ($load_query){
        while ($row = $load->fetch()) {
     global $fname ;
     $fname = $row['firstname'];
      global $lname;
      $lname = $row['lastname'];
      global $address;
      $address = $row['address'];
      global $phoneno;
      $phoneno = $row['phonenumber'];
      global $nationality ;
      $nationality = $row['nationality'];
      global $email;
      $email = $row['email'];
      global $linkedIn;
      $linkedIn = $row['linkedin'];
           
        }
    }
}

      // $sch;
      // $prog;
      // $loc ;
      // $edudate;
      // $gpa;


/**
* method to load all education details
*/
function loadedu(){
    $user_id =  $_SESSION['userid'];
    $load = new DatabaseConnection;
    $sql_query = "SELECT * FROM education WHERE user_id = '$user_id' ";
    $load_query = $load->query($sql_query);
    return $load->fetchResultObject();
 
           
    }

/**
* method to load all education details
*/
function loadawards(){
    $user_id =  $_SESSION['userid'];
    $load = new DatabaseConnection;
    $sql_query = "SELECT * FROM awards WHERE user_id = '$user_id' ";
    $load_query = $load->query($sql_query);
    return $load->fetchResultObject();
           
    }

/**
* method to load all work experience details
*/
function loadwork(){
    $user_id =  $_SESSION['userid'];
    $load = new DatabaseConnection;
    $sql_query = "SELECT * FROM workexperience WHERE user_id = '$user_id' ";
    $load_query = $load->query($sql_query);
    return $load->fetchResultObject();
           
    }


    /**
* method to load all project  details
*/
function loadproj(){
    $user_id =  $_SESSION['userid'];
    $load = new DatabaseConnection;
    $sql_query = "SELECT * FROM projects WHERE user_id = '$user_id' ";
    $load_query = $load->query($sql_query);
    return $load->fetchResultObject();
           
    }

   /**
* method to load all co - curricular activity details
*/
function loadcurri(){
    $user_id =  $_SESSION['userid'];
    $load = new DatabaseConnection;
    $sql_query = "SELECT * FROM curicular WHERE user_id = '$user_id' ";
    $load_query = $load->query($sql_query);
    return $load->fetchResultObject();
           
    }

       /**
* method to load all skills
*/
function loadskill(){
    $user_id =  $_SESSION['userid'];
    $load = new DatabaseConnection;
    $sql_query = "SELECT * FROM skills WHERE user_id = '$user_id' ";
    $load_query = $load->query($sql_query);
    return $load->fetchResultObject();
           
    }

       /**
* method to load all references
*/
function loadref(){
    $user_id =  $_SESSION['userid'];
    $load = new DatabaseConnection;
    $sql_query = "SELECT * FROM referen WHERE user_id = '$user_id' ";
    $load_query = $load->query($sql_query);
    return $load->fetchResultObject();
           
    }

?>