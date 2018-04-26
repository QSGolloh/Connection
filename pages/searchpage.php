<?php session_start();
/**
 *@author Selassie Golloh
 *@version 1.0
 **/
 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="img/favicon.png">
  <title>Connect</title>
  <!-- Bootstrap core CSS -->
  <link href="../bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/css/animate.min.css" rel="stylesheet">
  <link href="../font-awesome-4.4.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="../assets/css/timeline.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="../bootstrap-3.3.5/js/bootstrap.min.js"></script>
  <script src="../assets/js/custom.js"></script>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="animated fadeIn">
  <?php require_once('../classes/loadclass.php'); 
  include_once('../controller/userprofilecontroller.php');
  
  $array = getUserById($_SESSION['userid']);
  foreach($array as $item){
      $firstname = $item['firstname'];
      $lastname = $item['lastname'];
      // $gender = $item['gender'];
      // $status = $item['status'];
      // $year_group = $item['year_group'];
      // $nationality = $item['nationality'];
      // $placeofwork = $item['placeofwork'];
      $ppic = $item['profile_pic'];
     // $encoded_image = base64_encode($ppic);
  }
  ?>

  <!-- Fixed navbar -->
  <nav class="navbar navbar-default navbar-fixed-top navbar-principal">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
        aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">
        <b>Connect</b>
      </a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
     <div class="col-md-5 col-sm-4">
     
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li class="active">
          <a href="profile.php">
              <? echo $firstname." ".$lastname ?>
            <img src="<? echo $ppic ?>" class="img-nav">
          </a>
        </li>
        <li><a href="home.php"><i class="fa fa-bars"></i>&nbsp;Home</a></li>
        <li><a href="messages.php"><i class="fa fa-comments"></i></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
          aria-expanded="false"> Pages
          <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
         <li><a href="searchpage.php">Search</a></li>
              <li><a href="cvgenerator.php">CV</a></li>  
              <li><a href="recover_password.html">Recover password</a></li>
              <li><a href="photos.html">Photos</a></li>
              <li><a href="friends.html">Friends</a></li>
              <li><a href="profile.php">Profile</a></li>
              <li><a href="edit_profile.php">Edit profile</a></li>
              <li><a href="notifications.html">Notifications</a></li>
        </ul>
        </li>
        <li><a href="../logout.php" class="nav-controller"></i>Logout</a></li>    
      
    </ul>
  </div>
</div>
</nav>
<div class ="container" style="margin-top: 5%;">
<div class="row">

 <h2>Search here</h2>
   <select id= "year">
    <option value="0" name="searchTerm0" >Year</option>
    <?php loadyeargroups(); ?>
  </select>
  <select id = "major">
    <option value="0" name="searchTerm1" >Course</option>
     <?php loadAllMajor(); ?>
  </select>

  <input type="text" placeholder="Search Name" id="name" name="searchTerm">
  <button type="submit" onclick="checkSearchTerm()">Search</button>


 </div>
</div>

<br>
<!-- Timeline content -->
<div class="container matches">

  <!-- search content goes here -->
</div>


<footer class="welcome-footer">
  <div class="container">
    <p>
      <div class="footer-links">
        <a href="#">Terms of Use</a> |
        <a href="#">Privacy Policy</a> |
        <a href="#">Developers</a> |
        <a href="#">Contact</a> |
        <a href="#">About</a>
      </div>
      Copyright &copy; Company - All rights reserved
    </p>
  </div>
</footer>
<script type="text/javascript" src="../js/ajax.js"></script>
</body>
</html>