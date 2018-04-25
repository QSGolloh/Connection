<?php
/**
 * @author: Selassie Golloh
 * @version 1.0
 */


//include the database class
include_once("../controller/postController.php");
// include_once('controller/userprofilecontroller.php');

//code to insert header values into database when buttons are clicked 
if (isset($_POST['postbtn'])) {

	$postmessage = $_POST['postmessage'];
	$post= new PostController();
	$post->insertPosts($postmessage);
}
?>