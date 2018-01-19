<?php
/**
 *@author Selassie Golloh
 *@version 1.0
 **/


include_once('../classes/userprofileclass.php');

	//code to handle update button click
	if (isset($_POST['update'])){
        editprofile();
	}


	function getUserById($id)
	{
		//global $user_id;
		$user_id = $id;
		$searchClass = new profile();
		$searchClass->getUserById($user_id); 
		return $searchClass->fetchResultObject();

	}

	function editprofile()
	{
		$user_id = 3;  // get value from session
		$lname = $_POST['lastname'];
		$poWork= $_POST['poWork'];
		$ppic= $_POST['ppic']; 
		$profClass = new profile();
		$profClass->editprofile($user_id, $lname, $poWork, $ppic);
		return $profClass->fetchResultObject();
	}


?>