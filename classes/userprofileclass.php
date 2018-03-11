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


    function editprofile($user_id, $lname, $gender,$status, $major, $year_group, 
      $nationality, $poWork, $ppic){
     
            $misql= "UPDATE user
            SET
            lastname = '$lname', 
            gender = '$gender',
            status = '$status',
            major_id ='$major',
            year_group_id = '$year_group',
            nationality = '$nationality',
            placeofwork = '$poWork',
            profile_pic = '$ppic'
            WHERE user_id = '$user_id'";
        //}
        return $this->query($misql);

    }



}
