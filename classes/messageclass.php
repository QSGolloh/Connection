<?php
/**
 *@author Selassie Golloh
 *@version 1.0
 **/

//include the database class
require_once("../database/dbconnectclass.php");

class messageDetails extends DatabaseConnection
{
  	//function to connect users 
  	function messagefriend($sender_id, $recipient_id, $message){
	// $myQuery = "SELECT * FROM friendship WHERE major ='$major'"; 
	 $messagefriend= "INSERT INTO messages(sender_id, recipient_id, message) 
	 	VALUES($sender_id, $recipient_id, $message) ";
        //execution of query
        return $this->query($messagefriend);
    }

    
}
?>