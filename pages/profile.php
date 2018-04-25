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
      <?php // so here i included the necessary files 
    
      include_once('../controller/userprofilecontroller.php');
      include_once('../classes/loadclass.php');
      $id;
      if(isset($_GET['id'])){
          $id = $_GET['id'];
      } else {
        $id = $_SESSION['userid'];
      }
      
      $array = getUserById($id);
      foreach($array as $item){
                $firstname = $item['firstname'];
                $lastname = $item['lastname'];
                $email = $item['email'];
                $gender = $item['gender'];
                $status = $item['status'];
                $year_group = $item['year_group_id']; //change year group to string
                $year_group = getYearGroup($year_group);
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
           <div class="col-md-5 col-sm-4">         
            <form class="navbar-form">
             <div class="form-group" style="display:inline;">
               <div class="input-group" style="display:table;">
                 <input class="form-control" name="search" placeholder="Search..." autocomplete="off" type="text">
                 <span class="input-group-addon" style="width:1%;">
                   <span class="glyphicon glyphicon-search"></span>
                 </span>
               </div>
             </div>
           </form>
         </div>        
         <ul class="nav navbar-nav navbar-right">
          <li class="active">
            <a href="profile.html">
             <?echo $firstname." ".$lastname ?>
              <img src="<?php echo $ppic ?>" class="img-nav">
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
          <li><a href="../logout.php" class="nav-controller">Logout</a></li>       
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
                <img src="<?php echo $ppic ?>" alt="">
              </a>
              <h1><?echo $firstname." ".$lastname ?></h1>
              <p><?echo $email ?></p>
            </div>

            <ul class="nav nav-pills nav-stacked">
              <li><a href="profile.php"> <i class="fa fa-user"></i> Profile</a></li>
             <!--  <li class="active"><a href="about.html"> <i class="fa fa-info-circle"></i> About</a></li> -->
              <li><a href="friends.php"> <i class="fa fa-users"></i> Friends</a></li>
              <li><a href="cvgenerator.php"> <i class="fa fa-file-image-o"></i> CV Generator</a></li>
              
            </ul>
          </div>
        </div>

        <div class="profile-info col-md-8">
          <div class="panel animated fadeInUp">
           <div class="panel-body bio-graph-info">
            <h1>Bio Graph</h1>
            <div class="row">
              <?php 

                echo 

                '<div class="bio-row">
                <p><span>First Name </span>:'. $firstname.'</p>
                </div>
                <div class="bio-row">
                <p><span>Last Name </span>: '. $lastname.'</p>
                </div>
                <div class="bio-row">
                <p><span>Country </span>:  '. $nationality.'</p>
                </div>
                <div class="bio-row">
                <p><span>Gender </span>: '. $gender.' </p>
                </div>
                <div class="bio-row">
                <p><span> Year Group </span>: '. $year_group.'</p>
                </div>
                <div class="bio-row">
                <p><span>Status </span>: '. $status.'</p>
                </div>';
                if ($status == "Alumnus"){
                  echo '<div class="bio-row">
                  <p><span>Place of Work </span>: '.$placeofwork.'</p>
                  </div>';  
                }
                 
               ?> 
            </div>
          </div>
        </div> <!--End Timeline content -->
      </div>

      <div class="col-md-8">
      <form action="edit_profile.php">
      <input type="submit" value="Edit Profile"/>
      </form>
      </div>

      
  </body>
  </html>
