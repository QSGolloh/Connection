<?php
	session_start();
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
		$user_id = $_SESSION['userid'];  // get value from session
		$lname = $_POST['lastname'];
		$poWork= $_POST['poWork'];

		//getting the picture and saving it as a URL in the database 
		//$ppic= $_POST['ppic']; 
		$ppic = addslashes(file_get_contents($_FILES['images']['tmp_name']));
     	$image_name = addslashes($_FILES['images']['name']);
    	 $image_size = getimagesize($_FILES['images']['tmp_name']);
     	move_uploaded_file($_FILES["images"]["tmp_name"], "../images/" . $_FILES["images"]["name"]);
     	$ppic = "../images/" . $_FILES["images"]["name"];

		$profClass = new profile();
		$profClass->editprofile($user_id, $lname, $poWork, $ppic);
		return $profClass->fetchResultObject();
		if($profClass){
		echo "Update successful ";
	}else{
		echo "error occured";
	}
	}


?>