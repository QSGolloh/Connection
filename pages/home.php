<?php session_start(); ?>
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
	<script src="../assets/js/jquery.1.11.1.min.js"></script>
	<script src="../bootstrap-3.3.5/js/bootstrap.min.js"></script>
	<script src="../assets/js/custom.js"></script>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>
  <body class="animated fadeIn">
<?php 
require_once('../functions/function.php');
include_once('../controller/userprofilecontroller.php');
$array = getUserById($_SESSION['userid']);
  foreach($array as $item){
      $firstname = $item['firstname'];
      $lastname = $item['lastname'];
      $email =$item['email'];
      $gender = $item['gender'];
      $status = $item['status'];
      $year_group = $item['year_group_id'];
      $nationality = $item['nationality'];
      $placeofwork = $item['placeofwork'];
      $ppic = $item['profile_pic'];
     // $encoded_image = base64_encode($ppic);
  }
  ?> 
  	<!-- Fixed navbar -->
  	<nav class="navbar navbar-default navbar-fixed-top navbar-principal">
  		<div class="container">
  			<div class="navbar-header">
  				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
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

  				<ul class="nav navbar-nav navbar-right">
  					<li>
  						<a href="profile.html">
  						<? echo $firstname." ".$lastname ?>
  							<img src="../images/<?php echo  $ppic ?> " class="img-nav">
  						</a>
  					</li>
  					<li class="active"><a href="home.php"><i class="fa fa-bars"></i>&nbsp;Home</a></li>
  					<li><a href="messages.php"><i class="fa fa-comments"></i></a></li>
  					<li class="dropdown">
  						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">  Pages 
  							<span class="caret"></span>
  						</a>
  						<ul class="dropdown-menu">
  							<li><a href="recover_password.html">Recover password</a></li>
  							<li><a href="list_users.html">List users</a></li>
  							<li><a href="photos.html">Photos</a></li>
  							<li><a href="friends.html">Friends</a></li>
  							<li><a href="people_directory.html">User directory</a></li>
  							<li><a href="about.html">About</a></li>
  							<li><a href="edit_profile.php">Edit profile</a></li>
  							<li><a href="notifications.html">Notifications</a></li>
  							<li><a href="blank-cover.html">Blank cover</a></li>
  							<li><a href="registration_email.html">Registration email</a></li>
  							<li><a href="grid_posts.html">Grid posts</a></li>
  							<li><a href="error404.html">Error 404</a></li>
  							<li><a href="error500.html">Error 500</a></li>
  						</ul>
  					</li>
  					<li><a href="../logout.php" class="nav-controller"></i>Logout</a></li>				
  				</ul>
  			</div>
  		</div>
  	</nav>
  	<div class="row text-center cover-container">
  		<a href="#">
  			<img src="../images/doe.png">
  		</a>
  		<h1 class="profile-name"><? echo $firstname." ".$lastname ?></h1>
  		<p class="user-text">Ashesi SNS: connect, share ideas and grow</p>
  	</div>
  	<!-- Timeline content -->
  	<div class="container">
  		<!-- <div class="col-md-10 no-paddin-xs"> -->
  		<div class="row">

  			<!-- right  content-->
  			<div class="profile-info col-md-8  animated fadeInRight">
  				<div class="panel">
  					<form method ="POST" >
  						<textarea name= "postmessage" placeholder="Whats in your mind today?" rows="2" class="form-control input-lg p-text-area"></textarea>
  				<!-- 	</form> -->
  					<div class="panel-footer">
  						<button name = "postbtn" class="btn btn-info pull-right">Post</button>
  						<ul class="nav nav-pills">
  							<li>
  								<a href="#"><i class="fa fa-map-marker"></i></a>
  							</li>
  							<li>
  								<a href="#"><i class="fa fa-camera"></i></a>
  							</li>
  							<li>
  								<a href="#"><i class=" fa fa-film"></i></a>
  							</li>
  							<li>
  								<a href="#"><i class="fa fa-microphone"></i></a>
  							</li>
  						</ul>
  					</div>
  				</form>
  				</div>

  				<div class="panel panel-white post-load-more panel-shadow text-center">
  					<button class="btn btn-info">
  						<i class="fa fa-refresh"></i>Load More...
  					</button>
  				</div>	

  				<div class="posts">
  				</div>


  			</div><!--end right  content-->

  			<!-- notifications-->
  			<div class="col-md-4 no-paddin-xs">
  				<div class="panel panel-white post animated fadeInUp">
  					<div class="post-heading">
  						<div class="pull-left image">
  							<img src="../images/herby.jpeg" class="avatar" alt="user profile image">
  						</div>
  						<div class="pull-left meta">
  							<div class="title h5">
  								<a href="#" class="post-user-name">Herbertha Morrison</a>
  								liked your <a href="#">Post</a>
  							</div>
  							<h6 class="text-muted time">5 seconds ago</h6>
  						</div>
  					</div>
  				</div>

  				<div class="panel panel-white post animated fadeInUp">
  					<div class="post-heading">
  						<div class="pull-left image">
  							<img src="../images/bary.jpeg" class="avatar" alt="user profile image">
  						</div>
  						<div class="pull-left meta">
  							<div class="title h5">
  								<a href="#" class="post-user-name">Barilyn Adzraku</a>
  								shared your <a href="#">Post</a>
  							</div>
  							<h6 class="text-muted time">5 seconds ago</h6>
  						</div>
  					</div>
  				</div>

  				<div class="panel panel-white post animated fadeInUp">
  					<div class="post-heading">
  						<div class="pull-left image">
  							<img src="../img/Friends/woman-2.jpg" class="avatar" alt="user profile image">
  						</div>
  						<div class="pull-left meta">
  							<div class="title h5">
  								<a href="#" class="post-user-name">Denny lawer</a>
  								shared your <a href="#">Post</a>
  							</div>
  							<h6 class="text-muted time">5 seconds ago</h6>
  						</div>
  					</div>
  				</div>

  				<div class="panel panel-white post panel-shadow">
  					<div class="post-heading">
  						<div class="pull-left image">
  							<img src="../img/Friends/woman-3.jpg" class="avatar" alt="user profile image">
  						</div>
  						<div class="pull-left meta">
  							<div class="title h5">
  								<a href="#" class="post-user-name">Martha cargrot</a>
  								liked your <a href="#">Post</a>
  							</div>
  							<h6 class="text-muted time">5 seconds ago</h6>
  						</div>
  					</div>
  				</div>

  				<div class="panel panel-white post panel-shadow">
  					<div class="post-heading">
  						<div class="pull-left image">
  							<img src="../img/Friends/woman-4.jpg" class="avatar" alt="user profile image">
  						</div>
  						<div class="pull-left meta">
  							<div class="title h5">
  								<a href="#" class="post-user-name">Carla dorla</a>
  								liked your <a href="#">Post</a>
  							</div>
  							<h6 class="text-muted time">5 seconds ago</h6>
  						</div>
  					</div>
  				</div>

  				<div class="panel panel-white post panel-shadow">
  					<div class="post-heading">
  						<div class="pull-left image">
  							<img src="../img/Friends/woman-5.jpg" class="avatar" alt="user profile image">
  						</div>
  						<div class="pull-left meta">
  							<div class="title h5">
  								<a href="#" class="post-user-name">Maria Bejarano</a>
  								liked your <a href="#">Post</a>
  							</div>
  							<h6 class="text-muted time">5 seconds ago</h6>
  						</div>
  					</div>
  				</div>

  				<div class="panel panel-white post panel-shadow">
  					<div class="post-heading">
  						<div class="pull-left image">
  							<img src="../img/Friends/woman-1.jpg" class="avatar" alt="user profile image">
  						</div>
  						<div class="pull-left meta">
  							<div class="title h5">
  								<a href="#" class="post-user-name">Hillary McBrewk</a>
  								liked your <a href="#">Post</a>
  							</div>
  							<h6 class="text-muted time">5 seconds ago</h6>
  						</div>
  					</div>
  				</div>


  				<div class="panel panel-white post-load-more panel-shadow text-center">
  					<button class="btn btn-info">
  						<i class="fa fa-refresh"></i>Load More...
  					</button>
  				</div>				
  			</div>



  		</div>
  		<!-- 	</div> -->
  	</div><!-- end timeline content-->

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
  </body>
  <script type="text/javascript" src="../js/ajax.js"></script>
  </html>
