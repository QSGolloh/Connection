<?php
/**
 *@author Selassie Golloh
 *@version 1.0
 **/

include_once('userprofilecontroller.php'); //including the userprofile controller 
include_once('searchcontroller.php'); //including the searchcontroller
include_once('postController.php');

$msg = $_REQUEST['msg']; 

switch($msg){
	// search by major
	case 0:	
	// make an instance of search controller class
	$search = new SearchController();
	$major = $_REQUEST['major']; // getting the major from the URL
	$searchResult = $search->getUserByMajor(trim($major));
	$resultsArray = array();
	if ($searchResult){
		//looping through the results and putting them in an array
		foreach ($searchResult as $res) {
			$resultsArray[] = array(
				'user_id' => $res['user_id'], 
				'firstname' => $res['firstname'],
				'lastname' => $res['lastname'],
				'email' => $res['email'],
				'gender' => $res['gender'],
				'dateOfBirth' => $res['dateOfBirth'],
				'major_id' =>  $res['major_id'],
				'year_group_id' =>   $res['year_group_id'],
				'status' => $res['status'], 
				'placeofwork' => $res['placeofwork'],
				'nationality' => $res['nationality'],
				'profile_pic' =>$res['profile_pic'],
			);
		}
		echo json_encode($resultsArray);
	} else {
		echo json_encode($resultsArray);
	}
	break;
 	
 	// search by year
	case 1:	
	// make an instance of search controller class
	$search = new SearchController();
	$yeargroup = $_REQUEST['year']; // getting the year from the URL
	$searchResult = $search->getUserByYear(trim($yeargroup));
	$resultsArray = array();
	if ($searchResult){
		//looping through the results and putting them in an array
		foreach ($searchResult as $res) {
			$resultsArray[] = array(
				'user_id' => $res['user_id'], 
				'firstname' => $res['firstname'],
				'lastname' => $res['lastname'],
				'email' => $res['email'],
				'gender' => $res['gender'],
				'dateOfBirth' => $res['dateOfBirth'],
				'major_id' =>  $res['major_id'],
				'year_group_id' =>   $res['year_group_id'],
				'status' => $res['status'], 
				'placeofwork' => $res['placeofwork'],
				'nationality' => $res['nationality'],
				'profile_pic' =>$res['profile_pic'],
			);
		}
		echo json_encode($resultsArray);
	} else {
		echo json_encode($resultsArray); 
	}
	break;
		// search by name
	case 2:	
	// make an instance of search controller class
	$search = new SearchController();
	$namegroup = $_REQUEST['name']; // getting the name from the URL
	$searchResult = $search->getUserByName(trim($namegroup));
	$resultsArray = array();
	if ($searchResult){
		//looping through the results and putting them in an array
		foreach ($searchResult as $res) {
			$resultsArray[] = array(
				'user_id' => $res['user_id'], 
				'firstname' => $res['firstname'],
				'lastname' => $res['lastname'],
				'email' => $res['email'],
				'gender' => $res['gender'],
				'dateOfBirth' => $res['dateOfBirth'],
				'major_id' =>  $res['major_id'],
				'year_group_id' =>   $res['year_group_id'],
				'status' => $res['status'], 
				'placeofwork' => $res['placeofwork'],
				'nationality' => $res['nationality'],
				'profile_pic' =>$res['profile_pic'],
			);
		}
		echo json_encode($resultsArray);
	} else {
		echo json_encode($resultsArray);
	}
	break;

	case 3:
	$post = new PostController();
	$allPosts = $post->getPosts();
	$resultsArray = array();
	if ($allPosts){
			foreach ($allPosts as $res) {
			$resultsArray[] = array(
				'post_id' => $res['post_id'], 
				'post_message' => $res['post_message'], 
				'datetime_added' => $res['datetime_added'],
				'user_firstname' => $res['firstname'],
				'user_lastname' => $res['lastname'],
				'user_ppic' => $res['profile_pic']
			);
		}
		echo json_encode($resultsArray);
	} else {
		echo json_encode($resultsArray);
	}
	break;
	
}
?>