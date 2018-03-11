<?php
session_start();

//include the database class
require_once("database/dbconnectclass.php");
// include_once('controller/userprofilecontroller.php');

//code to insert header values into database when buttons are clicked 
if (isset($_POST['header']) || isset($_POST['header_next'])) {

    $userid = $_SESSION['userid'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$postal = $_POST['address'];
	$phoneno = $_POST['number'];
	$email = $_POST['email'];
	$nationality = $_POST['nationality'];
	$url = $_POST['url'];

	$load = new DatabaseConnection;
	$sql_query = "INSERT INTO header (user_id, firstname, lastname, address, phonenumber, nationality, email, linkedin) 
	VALUES ('$userid', '$fname', '$lname', '$postal', '$phoneno', '$nationality','$email', '$url ')";
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

	$userid = $_SESSION['userid'];
	$school= $_POST['sch1'];
	$loc = $_POST['location1'];
	$programme = $_POST['major1'];
	$date = $_POST['year1'];
	$gpa = $_POST['gpa'];

	$loadedu = new DatabaseConnection;
	$sql_query = "INSERT INTO education (user_id, School, programme, location, edu_date , GPA) 
	VALUES ('$userid', '$school', '$programme','$loc','$date','$gpa')";
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

//code to insert award values into database when buttons are clicked 
if (isset($_POST['awardsave']) || isset($_POST['awardnext'])) {

	$userid = $_SESSION['userid'];
	$award = $_POST['award'];
	$location = $_POST['location'];
	$date1 = $_POST['date'];

	$loadaward = new DatabaseConnection;
	$sql_query = "INSERT INTO awards (user_id, award,location, awarddate) 
	VALUES ('$userid','$award','$location','$date1')";
	$process_query = $loadaward->query($sql_query);
	if($process_query){
		//echo "process successful";
		if (isset($_POST['awardnext'])){
			header("Location: pages/workexperience.php");
		}else{
			echo "error occured";
		}
	}
}


//code to insert work details values into database when buttons are clicked 
if (isset($_POST['worksave']) || isset($_POST['worknext'])) {

	$userid = $_SESSION['userid'];
	$company = $_POST['company1'];
	$loc = $_POST['loc1'];
	$jobtitle = $_POST['jobtitle1'];
	$jobdescript = $_POST['description1'];
	$date1 = $_POST['date1'];


	$loadwork = new DatabaseConnection;
	$sql_query = "INSERT INTO workexperience (user_id, company_name, location, jobdescription, workdate, activities) 
	VALUES ('$userid','$company','$loc','$jobtitle','$date1','$jobdescript')";
	$process_query = $loadwork->query($sql_query);
	
	if($process_query){
		//echo "process successful";
		if (isset($_POST['worknext'])){
			header("Location: pages/projects.php");
		}
		else{
			echo "Changes Saved";
		}
	
	} else {
		echo "didnt work";
	}
}



//code to insert projects into database when buttons are clicked 
if (isset($_POST['project_save']) || isset($_POST['project_next'])) {

	$userid = $_SESSION['userid'];
	$project = $_POST['name'];
	$locate = $_POST['locate'];
	$title = $_POST['projtitle'];
	$descrip = $_POST['descrip'];
	$date2 = $_POST['date2'];


	$loadproj = new DatabaseConnection;
	$sql_query = "INSERT INTO projects (user_id, project_name, location, jobdescript, project_date, tasks) 
	VALUES ('$userid','$project', '$locate', '$title','$date2','$descrip')";
	$process_query = $loadproj->query($sql_query);

	if($process_query){
		//echo "process successful";
		if (isset($_POST['project_next'])){
			header("Location: pages/curricular.php");
		}
		else{
			echo "Changes Saved";
		}
	
	}else {
		echo "didnt work";
	}
}


//code to insert curricular activities into database when buttons are clicked 

if (isset($_POST['cosave']) || isset($_POST['conext'])) {

	$userid = $_SESSION['userid'];
	$act = $_POST['activity'];
	$loct = $_POST['loct'];
	$tit= $_POST['jobtit'];
	$descp = $_POST['descri1'];
	$date = $_POST['dateperiod'];

	$loadpro = new DatabaseConnection;
	$sql_query = "INSERT INTO curicular (user_id, activity_name, locate, job_title, tasks, time_period) 
	VALUES ('$userid','$act', '$loct', '$tit', '$descp','$date')";
	$process_query = $loadpro->query($sql_query);
	if($process_query){
		//echo "process successful";
		if (isset($_POST['conext'])){
			header("Location: pages/skills.php");
		}
		else{
			echo "Changes Saved";
		}
	
	}
}


//code to insert skills into database when buttons are clicked 

if (isset($_POST['skillsave']) || isset($_POST['skillnext'])) {


	$userid = $_SESSION['userid'];
	$skill = $_POST['skill'];
	

	$loadskill = new DatabaseConnection;
	$sql_query = "INSERT INTO skills (user_id, all_skills) 
	VALUES ('$userid','$skill')";
	$process_query = $loadskill->query($sql_query);
	if($process_query){
		//echo "process successful";
		if (isset($_POST['skillnext'])){
			header("Location: pages/reference.php");
		}
		else{
			echo "Changes Saved";
		}
	
	}
}

//code to insert references into database when buttons are clicked 

if (isset($_POST['refsave']) || isset($_POST['refdone'])) {

	$userid = $_SESSION['userid'];
	$ref = $_POST['ref1'];

	$loadref = new DatabaseConnection;
	$sql_query = "INSERT INTO referen (user_id, all_reference) 
	VALUES ('$userid','$ref')";
	$process_query = $loadref->query($sql_query);
	if($process_query){
		if (isset($_POST['refdone'])){
			header("Location: pages/pdf.php");
		}else{
				echo "Changes saved";
		}
	}else{
		echo "Error Occurred";
	}
}


?> 
