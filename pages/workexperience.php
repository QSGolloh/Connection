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
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/h"text/javascript">tml5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="../js/script.js"></script>

  </head>
  <body class="animated">
  


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
          <a href="profile.php">
         <!--  <? // echo $firstname." ".$lastname ?>-->
            <img src="../img/Friends/woman-1.jpg" class="img-nav">
          </a>
        </li>
        <li><a href="home.html"><i class="fa fa-bars"></i>&nbsp;Home</a></li>
        <li><a href="messages.html"><i class="fa fa-comments"></i></a></li>
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
              <li><a href="profile.php">Profile</a></li>
              <li><a href="edit_profile.php">Edit profile</a></li>
              <li><a href="notifications.html">Notifications</a></li>
              <li><a href="searchpage.php">Search</a></li>
              
              <li><a href="registration_email.html">Registration email</a></li>
              <li><a href="grid_posts.html">Grid posts</a></li>
              <li><a href="error404.html">Error 404</a></li>
              <li><a href="error500.html">Error 500</a></li>
            </ul>
        </li>
        <li><a href="#" class="nav-controller"><i class="fa fa-user"></i>Users</a></li>       
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
                        <img src="img/Friends/woman-1.jpg" alt="">
                    </a>
                    <h1><!--<? //echo $firstname." ".$lastname ?>--></h1>
                    <h3> CV Generator</h3>
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
                </ul>
            </div>
          </div>

           <div class="profile-info col-md-8">

              <form method = "post" action = "../processes.php">

              <h3> Work Experience</h3>
              <h6 style="color:red">List your work experience in reverse chronological order, most recent first followed by others in the past</h6><br>
              <h5>Company 1</h5> 
              <div class="form-content"> <!--Beginning of Work Experience -->
              
                <div class="form-group"> 
                  <input type="text" name = "company1" class="form-control input-underline input-lg" placeholder="Company Name">
                </div> 
                <div class="form-group"> 
                  <input type="text" name= "loc1" class="form-control input-underline input-lg" placeholder="Location">
                </div>  
                <div class="form-group"> 
                  <input type="text" name = "jobtitle1" class="form-control input-underline input-lg" placeholder="Job Title">
                </div>  
                <div class="form-group"> 
                  <textarea rows="4" cols="82" class="form-control input-underline input-lg" name="description1" id="description" placeholder=" Tasks Performed "></textarea>
                </div>  
                <div class="form-group"> 
                  <input type="text" name = "date1" class="form-control input-underline input-lg" placeholder="Time period">
                </div>  <br>
              </div> 

                <h4><a href="add-new-form">ADD NEW FIELD +</a></h4> <br>

              <button name="workback" type="submit" class="btn btn-info btn-lg">Back</button>
              <button name="worksave" type="submit" class="btn btn-info btn-lg">Save Changes</button>
              <button name="worknext" type="submit" class="btn btn-info btn-lg">Next</button>
            </form> 
                  

              </div> <!-- End of Work Experience -->

          


          </div>
      </div> 
      </div>
    <!--End Timeline content -->

   
    
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
