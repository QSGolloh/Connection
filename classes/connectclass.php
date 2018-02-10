<?php
/**
 *@author Selassie Golloh
 *@version 1.0
 **/

//include the database class
require_once("../database/dbconnectclass.php");

class connectDetails extends DatabaseConnection
{
  	//function to connect users 
  	function friendconnect($receiver_id, $sender_id){
	// $myQuery = "SELECT * FROM friendship WHERE major ='$major'"; 
	 $mfriends= "INSERT INTO friendship(receiver_id, sender_id,friend_status) 
	 	VALUES('$receiver_id','$sender_id','accepted') ";
        //execution of query
        return $this->query($mfriends);
    }

    //function to block users

  	function friendblock($receiver_id, $sender_id){
	// $myQuery = "SELECT * FROM friendship WHERE major ='$major'"; 
	 $mfriends= "UPDATE friendship
	 SET friend_status = 'blocked'
	 WHERE receiver_id =  '$receiver_id' AND sender_id = '$sender_id'";
        return $this->query($mfriends);
    }

}
