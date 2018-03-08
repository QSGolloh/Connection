<?php    session_start();?>
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
    			    </div>
    			  </form>
    			</div>        
      <ul class="nav navbar-nav navbar-right">
       <!--  <li>
          <a href="profile.html">
            Logged in user
            <img src="../img/Friends/woman-1.jpg" class="img-nav">
          </a>
        </li> -->
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
        <li><a href="../logout.php" class="nav-controller"></i>Logout</a></li>       
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
                 <?php 
                 // code to derive users friends from database 
                   require_once("../database/dbconnectclass.php");
                   $load = new DatabaseConnection();
                   $userid = $_SESSION['userid'];
                   $process_query = $load->query("SELECT user.email as email, user.firstname as firstname, user.user_id as id, user.lastname as lastname FROM user
                    INNER JOIN  friendship 
                    on user.user_id = friendship.sender_id
                    WHERE friend_status = 'accepted' AND receiver_id=$userid");           
                   if($process_query){
                    $data = array();
                    while($row = $load->fetch()){
                      $data[] = $row;
                    }
                  }

                 ?>
                 <!-- code to display list of friends to chat with -->
                 <?php foreach ($data as $value) :?>
                   <li class="active bounceInDown users" data-id="<?php echo $value['id']?>">
                    <a href="#" class="clearfix">
                      <img src="../img/Friends/doe.png" alt="" class="img-circle">
                      <div class="friend-name"> 
                        <strong><?php echo $value['firstname'] .' '. $value['lastname'] ?> </strong>
                      </div>
                    </a>
                  </li>
                  <?php endforeach; ?>  
              </ul>
            </div>

            <!-- selected chat content -->
            <div class="col-md-8 bg-white ">
              <div class="chat-message">
                  <ul class="chat">
                    
                      <li class="left clearfix">
                        <div class="chat-body clearfix">
                          <div class="header">
                            <strong class="primary-font">John Doe</strong>
                            <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 12 mins ago</small>
                          </div>
                          <p>
                            how are you?
                          </p>
                        </div>
                      </li>
                      <li class="right clearfix">
                        <div class="chat-body clearfix">
                          <div class="header">
                            <strong class="primary-font">Sarah</strong>
                            <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 13 mins ago</small>
                          </div>
                          <p>
                            God is good. Forever great.
                          </p>
                        </div>
                      </li> 
                  </ul>
              </div>
              <div class="panel profile-info panel-info">
                <form action="../messageprocess.php" method="post">
                    <textarea class="form-control input-lg p-text-area" rows="3" name= "message" placeholder="Write a message..." id="message"></textarea>
               
                <div class="panel-footer">
                    <input class="btn btn-info pull-right" name ="send" type="submit" value="Send">
                   <!-- <input class ="button4" name ="submit" type="submit" value="Submit">-->
                    <ul class="nav nav-pills">
                        <li><a href="#"><i class="fa fa-camera"></i></a></li>
                        <li><a href="#"><i class=" fa fa-film"></i></a></li>
                        <li><a href="#"><i class="fa fa-microphone"></i></a></li>
                    </ul>
                </div>
                 </form>
              </div><!-- end add post form-->           
            </div><!-- selected chat content -->        
          </div><!-- end chat content -->
        </div>
      </div>
    </div>
    

    <script type="text/javascript">
    function sendMessage(){
        let output = '';
        let placeholder = document.querySelector(".searchResult");
        let message = document.querySelector("#message").value;
        let xhr = new XMLHttpRequest();

        xhr.open("GET", "./sendMessage.php?message="+message, true);
        xhr.onreadystatechange = function() {
          if(xhr.readyState == 4 && xhr.status == 200) {
              var result = JSON.parse(this.responseText);
              if(result.length > 0){
              result.forEach(function(elem){
                  output += `<li class="list-item block"><a href="<?php echo BASE_URL?>topic.php?topic=${elem.id}">
                  ${elem.title}</a></li>`;
              })
            }else{
              output = `<h1>No Result match your query</h1>`
            }
              placeholder.innerHTML = output;
               $("#myModal").modal();
          }
        }
        xhr.send();
      }



      //code to get user by clicking 
      $(".users").click(function(e){
        alert($(this).data('id'));
      });

    </script>


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
