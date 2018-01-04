<?php
/**
 *@author Selassie Golloh
 *@version 1.0
 **///

//task 2 is what i tried to start over here 

//include the database class
require_once("../database/dbconnectclass.php");

class profile extends DatabaseConnection
{
    //properties
// then i guess im done over here or ? over watch this
    //methods
function editprofile($user_id, $lname, $poWork, $ppic){
        $misql = ''; 

        if ($ppic == "none")
        {
        $misql= "UPDATE user
         SET 
         lastname = '$lname', 
         placeofwork = '$poWork', 
        WHERE user_id = '$user_id'";
        }

       else {
        $misql= "UPDATE user
         SET
         lastname = '$lname', 
         placeofwork = '$poWork',
         profile_picture = '$ppic'
        WHERE user_id = '$user_id'";
      }
          return $this->query($misql);
             
    }
   
