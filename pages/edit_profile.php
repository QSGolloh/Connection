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
  <body class="animated">
  <?php 
  require_once('../classes/loadclass.php'); 
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
        <li class="active">
          <a href="profile.php">
            <? echo $firstname." ".$lastname ?>
            <img src="<? echo $ppic ?>" class="img-nav">
          </a>
        </li>
        <li><a href="home.html"><i class="fa fa-bars"></i>&nbsp;Home</a></li>
        <li><a href="messages.php"><i class="fa fa-comments"></i></a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">  Pages 
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

   

    <!-- Timeline content -->
    <div class="container" style="margin-top:50px;">
      <div class="row">
        <div class="col-md-10 no-paddin-xs">
          <div class="profile-nav col-md-4">
            <div class="panel">
                <div class="user-heading round">
                    <a href="#">
                        <img src="<? echo $ppic ?>" alt="">
                    </a>
                    <h1><? echo $firstname." ".$lastname ?></h1>
                    <p><? echo $email ?></p>
             
                </div>

                <ul class="nav nav-pills nav-stacked">
                    <li><a href="profile.php"> <i class="fa fa-user"></i> Profile</a></li>
                    <!-- <li><a href="about.html"> <i class="fa fa-info-circle"></i> About</a></li> -->
                    <li><a href="friends.html"> <i class="fa fa-users"></i> Friends</a></li>
                    <li><a href="cvgenerator.php"> <i class="fa fa-file-image-o"></i> CV Generator</a></li>
                    <li class="active"><a href="edit_profile.html"> <i class="fa fa-edit"></i> Edit profile</a></li>
                </ul>
            </div>
          </div>

  <?php
  echo '<div class="profile-info col-md-8">
            <form method="post" action="" enctype="multipart/form-data">
              <!-- update info -->
                <div class="panel panel-info post animated fadeInUp">
              <div class="panel-heading">
                <h3 class="panel-title">Edit info</h3>
              </div>            
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-md-3 control-label">Last name</label>
                  <div class="col-md-8">
                    <input name= "lastname"  class="form-control" type="text" value= "'.$lastname.'" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label">Gender</label> 
                  <select class="col-md-6" id="mySelect" name ="gender">
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>  
                    </select>
                </div> 
                
                <div >
                  <label class="col-md-3 control-label">Year Group</label>               
                    <select class="col-md-6" id= "year" name="yeargroup">
                    <option value="0" >Year</option>'?>
                   
                  <?php loadyeargroups(); ?>
               <?php
               echo '
                    </select>
                </div>

                <div >
                  <label class="col-md-3 control-label">Major</label>               
                    <select class="col-md-6" id= "year" name="major">
                    <option value="0" >Major</option>'?>
                   
                  <?php loadAllMajor(); ?>
               <?php
               echo '
                    </select>
                </div>

                 <div class="form-group">
                  <label class="col-md-3 control-label">Status</label> 
                    <select class="col-md-6" id="mySelect" name ="status">
                      <option value="Student">Student</option>
                      <option value="Alunnus">Alumnus</option>  
                    </select>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">Nationality</label> 
                  <div class="col-md-8">
                    <input name= "nationality" class="form-control" type="text" value= "'.$nationality.'" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label">Place of work</label> 
                  <div class="col-md-8">
                    <input name= "poWork" class="form-control" type="text" value= "'.$placeofwork.'">
                  </div>
                </div> 
                <div class="form-group">
                  <label class="col-md-3 control-label">Profile Picture</label> 
                  <div class="col-md-8">
      
                   <input type="file" name="images" class="form-control" accept="image/*" required>
                  
                   
                  </div>
                </div> 

                <div class="form-group">
                  <button type="submit"  name="update" class="btn btn-info" onclick="window.location.reload()">Update</button> 
                </div> 
              </div>
            </div><!-- end update info-->
            </form>';
  ?>

           

            <div class="panel panel-info post panel-shadow">
              <div class="panel-heading">
                <h3 class="panel-title">Change password</h3>
              </div>            
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-md-4 control-label">Current password</label>
                  <div class="col-md-7">
                    <input class="form-control" type="text" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">New password</label>
                  <div class="col-md-7">
                    <input class="form-control" type="text" value="">
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-info">Update</button>
                </div>                
              </div>
            </div>
          </div>
      </div>
      </div>
    </div><!--End Timeline content -->

   
    </div> --><!-- Online users sidebar content-->
    
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
</html>
