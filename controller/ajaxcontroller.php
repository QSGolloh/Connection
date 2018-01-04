<?php
// we are coming to implement the ajax controller
/*
Management Information Systems
Electrical EngineeringIT
Business Administration
Mechanical Engineering.   wait 
Computer Science
Chemical Engineering 
*/

include_once('searchcontroller.php'); //including the searchcontroller
$msg = $_REQUEST['msg']; 

switch($msg){
	// search by major
	case 0:	
	// make an instance of search controller class
	$search = new SearchController();
	$major = $_REQUEST['major']; // getting the major from the URL
	$searchResult = $search->getUserByMajor(trim($major));
	//this is the response we will be sending to ajax ok
	$resultsArray = array();
	//checking if we got something from the search ok
	if ($searchResult){
		//looping through the results and putting them in an array
		foreach ($searchResult as $res) {
			$resultsArray[] = array(
				'user_id' => $res['user_id'], 
				'firstname' => $res['firstname'],
				'lastname' => $res['lastname'],
				'gender' => $res['gender'],
				'dateOfBirth' => $res['dateOfBirth'],
				'major' =>  $res['major'],
				'year_group' =>   $res['year_group'],
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
				'gender' => $res['gender'],
				'dateOfBirth' => $res['dateOfBirth'],
				'major' =>  $res['major'],
				'year_group' =>   $res['year_group'],
				'status' => $res['status'], 
				'placeofwork' => $res['placeofwork'],
				'nationality' => $res['nationality'],
				'profile_pic' =>$res['profile_pic'],
			);
		}
		echo json_encode($resultsArray);
	} else {
		echo json_encode($resultsArray); //looks good to me.... wait
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
				'gender' => $res['gender'],
				'dateOfBirth' => $res['dateOfBirth'],
				'major' =>  $res['major'],
				'year_group' =>   $res['year_group'],
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
}
?>