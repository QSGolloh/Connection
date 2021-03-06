
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
    			  <!--    <div class="input-group" style="display:table;">
    			        <input class="form-control" name="search" placeholder="Search..." autocomplete="off" type="text">
    			        <span class="input-group-addon" style="width:1%;">
    			          <span class="glyphicon glyphicon-search"></span>
    			        </span>
    			      </div>-->
    			    </div>
    			  </form>
    			</div>        
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="profile.html">
            Logged in user
            <img src="img/Friends/woman-1.jpg" class="img-nav">
          </a>
        </li>
        <li><a href="home.html"><i class="fa fa-bars"></i>&nbsp;Home</a></li>
        <li class="active"><a href="messages.html"><i class="fa fa-comments"></i></a></li>
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
              <li><a href="searchpage.php">Search Page</a></li>
              <li><a href="registration_email.html">Registration email</a></li>
              <li><a href="grid_posts.html">Grid posts</a></li>
            </ul>
        </li>
        <li><a href="#" class="nav-controller"><i class="fa fa-user"></i>Users</a></li>       
      </ul>
        </div>
      </div>
    </nav>

    <!-- Timeline content -->
    <div class="container" style="margin-top:80px;">
      <div class="col-md-10 col-md-offset-1 no-paddin-xs animated fadeInRight"> 
        <div class="col-md-12">
          <!--  chat content -->
          <div class="row">
            <div class="col-md-4 bg-white ">
              <!-- member list -->
              <div class=" row border-bottom padding-sm" style="height: 40px;">
                
              </div>
              <ul class="friend-list">
                  <li class="active bounceInDown">
                    <a href="#" class="clearfix">
                      <img src="img/Friends/guy-2.jpg" alt="" class="img-circle">
                      <div class="friend-name"> 
                        <strong>John Doe</strong>
                      </div>
                      <div class="last-message text-muted">Hello, Are you there?</div>
                      <small class="time text-muted">Just now</small>
                      <small class="chat-alert label label-danger">1</small>
                    </a>
                  </li>
              
              </ul><!-- end member list -->
            </div>

            <!-- selected chat content -->
            <div class="col-md-8 bg-white ">
              <div class="chat-message">
                  <ul class="chat">
                      <li class="left clearfix">
                        <span class="chat-img pull-left">
                          <img src="img/Friends/guy-2.jpg" alt="User Avatar">
                        </span>
                        <div class="chat-body clearfix">
                          <div class="header">
                            <strong class="primary-font">John Doe</strong>
                            <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 12 mins ago</small>
                          </div>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                          </p>
                        </div>
                      </li>
                      <li class="right clearfix">
                        <span class="chat-img pull-right">
                          <img src="img/Friends/guy-3.jpg" alt="User Avatar">
                        </span>
                        <div class="chat-body clearfix">
                          <div class="header">
                            <strong class="primary-font">Sarah</strong>
                            <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 13 mins ago</small>
                          </div>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. 
                          </p>
                        </div>
                      </li>
                      <li class="left clearfix">
                          <span class="chat-img pull-left">
                          <img src="img/Friends/guy-2.jpg" alt="User Avatar">
                        </span>
                        <div class="chat-body clearfix">
                          <div class="header">
                            <strong class="primary-font">John Doe</strong>
                            <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 12 mins ago</small>
                          </div>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                          </p>
                        </div>
                      </li>
                      <li class="right clearfix">
                          <span class="chat-img pull-right">
                          <img src="img/Friends/guy-3.jpg" alt="User Avatar">
                        </span>
                        <div class="chat-body clearfix">
                          <div class="header">
                            <strong class="primary-font">Sarah</strong>
                            <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 13 mins ago</small>
                          </div>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. 
                          </p>
                        </div>
                      </li>                    
                      <li class="left clearfix">
                          <span class="chat-img pull-left">
                          <img src="img/Friends/guy-2.jpg" alt="User Avatar">
                        </span>
                        <div class="chat-body clearfix">
                          <div class="header">
                            <strong class="primary-font">John Doe</strong>
                            <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 12 mins ago</small>
                          </div>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                          </p>
                        </div>
                      </li>
                      <li class="right clearfix">
                          <span class="chat-img pull-right">
                          <img src="img/Friends/guy-3.jpg" alt="User Avatar">
                        </span>
                        <div class="chat-body clearfix">
                          <div class="header">
                            <strong class="primary-font">Sarah</strong>
                            <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 13 mins ago</small>
                          </div>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. 
                          </p>
                        </div>
                      </li>
                      <li class="right clearfix">
                          <span class="chat-img pull-right">
                          <img src="img/Friends/guy-3.jpg" alt="User Avatar">
                        </span>
                        <div class="chat-body clearfix">
                          <div class="header">
                            <strong class="primary-font">Sarah</strong>
                            <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 13 mins ago</small>
                          </div>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. 
                          </p>
                        </div>
                      </li>                    
                  </ul>
              </div>
              <!-- <div class="panel profile-info panel-info">
                <form action="../messageprocess.php" method="post">
                    <textarea class="form-control input-lg p-text-area" rows="3" name= "msg_body" placeholder="Write a message..."></textarea>
               
                <div class="panel-footer">
                    <input class="btn btn-info pull-right" name ="send" type="submit" value="Send">
                    <input class ="button4" name ="submit" type="submit" value="Submit">
                    <ul class="nav nav-pills">
                        <li><a href="#"><i class="fa fa-camera"></i></a></li>
                        <li><a href="#"><i class=" fa fa-film"></i></a></li>
                        <li><a href="#"><i class="fa fa-microphone"></i></a></li>
                    </ul>
                </div>
                 </form>
              </div><! end add post form-->        
            </div><!-- selected chat content -->        
          </div><!-- end chat content -->
        </div>
      </div>
    </div>


    <!--chat code online -->
<?php
      if (isset($_GET['u'])) {
  $username = mysql_real_escape_string($_GET['u']);
  if (ctype_alnum($username)) {
  //check user exists
  $check = mysql_query("SELECT firstname, lastname FROM users WHERE firstname='$username' OR lastname = '$username'");
  if (mysql_num_rows($check)===1) {
  $get = mysql_fetch_assoc($check);
  $username = $get['username']; //SELAssie check this later //
  
  //Check user isn't sending themself a private message
  if ($username != $user) {
          if (isset($_POST['submit'])) {
            //$msg_title = strip_tags(@$_POST['msg_title']);
            $msg_body = strip_tags(@$_POST['msg_body']);
            //$date = date("Y-m-d"); //SELASSIE - i use datetime stamp
            $opened = "no";
            $deleted = "no";
            
            // if ($msg_title == "Enter the message title here ...") {
            //  echo "Please give your message a title.";
            // }
            // else
            // if (strlen($msg_title) < 3) {
            //  echo "Your message title cannot be less than 3 characters in length!";
            // // }
            // else
            if ($msg_body == "Enter the message you wish to send ...") {
             echo "Please write a message.";
            }
            else
            if (strlen($msg_body) < 3) {
             echo "Your message cannot be less than 3 characters in length!";
            }
            else
            {

            $send_msg = mysql_query("INSERT INTO pvt_messages VALUES ('','$user','$username','$msg_title','$msg_body','$date','$opened','$deleted')");
           echo "Your message has been sent!";
            }
          }
        echo "
        

        <form action='send_msg.php?u=$username' method='POST'>
        <h2>Compose a Message: ($username)</h2>
        <input type='text' name='msg_title' size='30' onClick=\"value=''\" value='Enter the message title here ...'><p />
        <textarea cols='50' rows='12' name='msg_body'>Enter the message you wish to send ...</textarea><p />
        <input type='submit' name='submit' value='Send Message'>

        <textarea class="form-control input-lg p-text-area" rows="3" name= "msg_body" placeholder="Write a message..."></textarea>
               
                <div class="panel-footer">
                    <input class="btn btn-info pull-right" name ="send" type="submit" value="Send">
                    <input class ="button4" name ="submit" type="submit" value="Submit">
                    <ul class="nav nav-pills">
                        <li><a href="#"><i class="fa fa-camera"></i></a></li>
                        <li><a href="#"><i class=" fa fa-film"></i></a></li>
                        <li><a href="#"><i class="fa fa-microphone"></i></a></li>
                    </ul>
                </div>
        </form>

        ";
        }
        else
        {
         header("Location: $user");
        }
  }
  }
}
?>

    <!-- end of chat code online -->

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
