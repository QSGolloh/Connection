<?php
/**
 *@author Selassie Golloh
 *@version 1.0
 **///


//include the database class
require_once("../database/dbconnectclass.php");

class profile extends DatabaseConnection
{
    
     /**
     *function to display the user details
     *@return user details
     **/
     function getUserById($user_id)
     {
        //Query
        $myQuery = "SELECT * FROM user WHERE user_id = '$user_id' LIMIT 1";

        //execution of query
        return  $this->query($myQuery);

    } 


    function editprofile($user_id, $lname, $poWork, $ppic){
        $misql = ''; 

        if ($ppic == "none"){
            $misql= "UPDATE user
            SET 
            lastname = '$lname', 
            placeofwork = '$poWork'
            WHERE user_id = '$user_id'";
        }

        else {
            $misql= "UPDATE user
            SET
            lastname = '$lname', 
            placeofwork = '$poWork',
            profile_pic = '$ppic'
            WHERE user_id = '$user_id'";
        }
        return $this->query($misql);

    }



}
