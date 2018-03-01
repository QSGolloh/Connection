<?php

//include the database class
require_once("database/dbconnectclass.php");

//code to insert header values into database when buttons are clicked 
if (isset($_POST['header']) || isset($_POST['header_next'])) {

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$postal = $_POST['address'];
	$phoneno = $_POST['number'];
	$email = $_POST['email'];
	$nationality = $_POST['nationality'];
	$url = $_POST['url'];

	$load = new DatabaseConnection;
	$sql_query = "INSERT INTO header (firstname, lastname, address, phonenumber, nationality, email, linkedin) 
	VALUES ('$fname', '$lname', '$postal', '$phoneno', '$nationality','$email', '$url ')";
	$process_query = $load->query($sql_query);
	if($process_query){
		//echo "process successful";
		if (isset($_POST['header_next'])){
			header("Location: pages/education.php");
		}
	}else{
		echo "error occured";
	}

}

//code to insert education values into database when buttons are clicked 
if (isset($_POST['edu_save']) || isset($_POST['edu_next'])) {

	$school= $_POST['sch1'];
	$programme= $_POST['location1'];
	$loc = $_POST['major1'];
	$date = $_POST['year1'];
	$gpa = $_POST['gpa'];

	$loadedu = new DatabaseConnection;
	$sql_query = "INSERT INTO education (School, programme, location, edu_date , GPA) 
	VALUES ('$school', '$programme','$loc','$date','$gpa')";
	$process_query = $loadedu->query($sql_query);
	if($process_query){
		//echo "process successful";
		if (isset($_POST['edu_next'])){
			header("Location: pages/awards.php");
		}else{
			echo "error occured";
		}
	}
}











?> 
