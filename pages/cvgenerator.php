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
      include_once('../controller/userprofilecontroller.php');
      

      $array = getUserById($_SESSION['userid']);
      foreach($array as $item){
        $firstname = $item['firstname'];
        $lastname = $item['lastname'];
        $email = $item['email'];
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
                  <?php  echo $firstname." ".$lastname ?>
                  <img src="<? echo $ppic ?>" class="img-nav">
                </a>
              </li>
              <li><a href="home.php"><i class="fa fa-bars"></i>&nbsp;Home</a></li>
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
                  <p> <? echo $email ?></p>
                </div>
                <ul class="nav nav-pills nav-stacked">
                 <li><a href="cvgenerator.php"> <i class="fa fa-user"></i> Header</a></li>
                 <li><a href="education.php"> <i class="fa fa-info-circle"></i> Education</a></li>
                 <li><a href="awards.php"> <i class="fa fa-file-image-o"></i>Achievements</a></li>
                 <li><a href="workexperience.php"> <i class="fa fa-users"></i> Work Experience</a></li>
                 <li><a href="projects.php"> <i class="fa fa-file-image-o"></i>Projects & Research</a></li>
                 <li><a href="curricular.php"> <i class="fa fa-file-image-o"></i> Co-Curricular</a></li>
                 <li><a href="skills.php"> <i class="fa fa-edit"></i> Other Skills</a></li>
                 <li><a href="reference.php"> <i class="fa fa-info-circle"></i> References</a></li>
                 <li><a href="pdf.php"><i class="fa fa-clone"></i> Preview</a></li>
               </ul>
             </div>
           </div>

           <div class="profile-info col-md-8">

            <form name="myForm" method = "post" action = "../processes.php" onsubmit="return validateHeader()">
              <h3> Header</h3>
              <div class="form-content"> 
                <div class="form-group"> 
                  <input type="text" name= "fname" class="form-control input-underline input-lg" placeholder="First Name">
                </div>  

                <div class="form-group"> 
                  <input type="text" name= "lname" class="form-control input-underline input-lg" placeholder="Last Name">
                </div> 

                <div class="form-group"> 
                  <input type="text" name = "address" class="form-control input-underline input-lg" placeholder="Postal Address">
                </div> 

                <div class="form-group"> 
                  <input type="text" name = "number" class="form-control input-underline input-lg" pattern="^\d{10}$" 
                  placeholder="Phone Number (format: 10 digits only)" required>
                </div> 

                <div class="form-group"> 
                  <input type="text" name = "email" class="form-control input-underline input-lg" placeholder="Email">
                </div>

                <div class="form-group"> 
                  <input type="text" name = "nationality" class="form-control input-underline input-lg" placeholder="Nationality">
                </div> 

                <div class="form-group"> 
                  <input type="text" name = "url" class="form-control input-underline input-lg" placeholder="LinkedIn URL">
                </div> 
              </div>

              <br> 
              <button name="header" type="submit" class="btn btn-info btn-lg">Save Changes</button>
              <button name="header_next" type="submit" class="btn btn-info btn-lg">Next</button>
            </form> 
            <script src="../js/cv.js"></script>

          </div>

        </div>
      </div> 
    </div>
    <!--End Timeline content -->

    <!-- Online users sidebar content-->

    
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
