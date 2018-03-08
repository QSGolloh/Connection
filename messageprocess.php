<?php

//include the database class
require_once("database/dbconnectclass.php");

if (isset($_GET['send'])) 
{
	$message = $_GET['message'];
	$load = new DatabaseConnection();
	$sql_query = "INSERT INTO messages(message) VALUES ('$message')";
	$message_query = $load->query($sql_query);
	if($message_query){
		echo "Message input successful ";
	}else{
		echo "error occured";
	}
}
?>