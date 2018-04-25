<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<link href="../bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/animate.min.css" rel="stylesheet">
    <link href="../font-awesome-4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/timeline.css" rel="stylesheet">
    <script src="../assets/js/jquery.1.11.1.min.js"></script>
    <script src="../bootstrap-3.3.5/js/bootstrap.min.js"></script>
    <script src="../assets/js/custom.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/cv.css">
</head>

<!-- code for cv generator  -->
<body style ="font-family: Verdana;">
	<?php
  require_once("../functions/loadcv.php"); ?>

<div class="container">

   <?php
   loadheader();
   loadedu();
   ?>
	<!-- code for header -->
	<div class="header-row">
		<div class="col-md-2"></div>
			<div class="col-md-8 bg-primary">
				<h1 id ="h"> <?php echo  $fname." " ?><?php echo  $lname ?> </h1>
				<p> <?php echo  $address  ?> </p>
				<p> <?php echo  $phoneno ." / " ?><?php echo $nationality  ?> </p>
				<p> <?php echo  $email ." / " ?><?php echo $linkedIn  ?> </p>
			</div>
		<div class="col-md-2"></div>
     </div>


     <!-- code for education  -->
     <div class="education row">
		<div class="col-md-12 ">
			<p>EDUCATION </p><hr>	

			<?php
				$edu_details = loadedu();
				foreach ($edu_details as $det) {
			      $sch = $det['School'];
			      $prog = $det['programme'];
			      $loc = $det['location'];
			      $edudate = $det['edu_date'];
			      $gpa = $det['GPA'];
			      echo "
				<div class=\"col-md-9 bg-success\">
			<p>$sch</p>
			<p> $prog </p>
			<p> $gpa </p>
			</div>

			<div class=\"col-md-3 bg-danger\">
			<p> $loc </p>
			<p> $edudate </p>

		   </div>";
				}
			?>
			
		</div>
     </div>  
     <!-- end of code for education  -->


     <div class="achievement row">
     	<div class="col-md-12">
				<p>ACHIEVEMENTS/AWARDS </p><hr>
			<?php
			

			$award_details = loadawards();
				foreach ($award_details as $get) 
				{
			      $award = $get['award'];
			      $location = $get['location'];
			      $date = $get['awarddate'];
			      echo"
				<div class=\"col-md-9 bg-danger\">
					<p> $award , $location </p>	
				</div>
				<div class=\"col-md-3 bg-primary\">
					<p>$date</p>
				
		   </div>";
				}
		   ?>
		</div>
     </div>


     <div class="work experience row">
			<div class="col-md-12">
			  <p>WORK EXPERIENCE </p><hr>
			<?php
			$work_details = loadwork();
				foreach ($work_details as $let) 
				{
			      $company= $let['company_name'];
			      $location = $let['location'];
			      $desc = $let['jobdescription'];
			      $date = $let['workdate'];
			      $activities = $let['activities'];
			      $act_split= explode('.', $activities);

			      echo"
			  
			<div class=\"col-md-9 bg-success\">
				<p>$company - $location</p>
				<p>$desc </p>
			</div>
			<div class=\"col-md-3 bg-danger\">
				<p> $date </p>
				
			</div>
			<div class=\"col-md-12 \">";
			foreach ($act_split as $activities) {
				echo "<p><li>  $activities</li><p>";
				"</div>";
			}
			
				}
		    ?>		
		</div>
     </div>

     <div class="project row">
		<div class="col-md-12">
			  <p>PROJECTS AND RESEARCH </p><hr>
				<?php
			$proj_details = loadproj();
				foreach ($proj_details as $let) 
				{
			      $project= $let['project_name'];
			      $locate = $let['location'];
			      $descpt = $let['jobdescript'];
			      $projdate = $let['project_date'];
			      $task = $let['tasks'];

			      $task_split= explode('.', $task); // code to split tasks by delimeter "."

			      echo "
			  
			<div class=\"col-md-9 bg-primary\">
				<p>$project</p>
				<p>$descpt </p>
			</div>
			<div class=\"col-md-3 bg-success\">
				<p> $projdate</p>
			</div>
			<div class=\"col-md-12 \">";
			foreach ($task_split as $task) {
				echo "<p><li> $task </li><p>";
				   "</div>";
			}
			
				}
		    ?>
		</div>
     </div>


     <div class="co curricular row">

     	<?php
			$curri_details = loadcurri();
				foreach ($curri_details as $co) 
				{
			      $activity = $co['activity_name'];
			      $locate = $co['locate'];
			      $descpt = $co['job_title'];
			      $task = $co['tasks'];
			      $time = $co['time_period'];

			      $task_split= explode('.', $task); // code to split tasks by delimeter "."


			      echo"
			  <div class=\"col-md-12 \">
			  <p>CO-CURRICULAR ACTIVITIES</p><hr>
			<div class=\"col-md-9 bg-primary\">
				<p> $locate , $activity</p>
				<p>$descpt </p>
			</div>
			<div class=\"col-md-3 bg-success\">
				<p>  $time</p>
			</div>
			<div class=\"col-md-12 \">";
			foreach ($task_split as $task) {
				echo "<p><li> $task </li><p>";
			}
			echo "</div>
		   </div>";
				}
		    ?>

     </div>
 

     <div class="skills row">
     	<?php
			$skill_details = loadskill();
				foreach ($skill_details as $co) 
				{
			      $skll = $co['all_skills'];
			      $skill_split= explode('.', $skll); // code to split skills by delimeter "."

			      echo"
			      <div class=\"col-md-12 bg-danger\">
			<p>SKILLS</p> <hr>";
			foreach ($skill_split as $skll) { 
			 echo" 
			 <ul>
				<p><li>$skll</li></p>
			</ul> ";
		      }
			echo "</div>";
				}
		    ?>
	
		</div>
     

     <div class="references row">
			<?php
			$ref_details = loadref();
				foreach ($ref_details as $co) 
				{
			      $ref = $co['all_reference'];
			     
			      $ref_split= explode('.', $ref);
			      echo"
			      <div class=\"col-md-12 bg-success\">
			      <p>REFERENCES</p> <hr> 
			<p>Available upon request</p>";
			 foreach ($ref_split as $ref ) { 
			 echo" 
			 <ul>
				<p><li>$ref </li></p>
			</ul> ";
		      }
			echo "</div>";
				}
		    ?>
	
		</div>
</div>
			
			<button name="pdf" type="submit" class="btn btn-info btn-lg">Save As PDF</button>



</body> 
</html>