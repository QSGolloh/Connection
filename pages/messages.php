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
          <div class="col-md-5 col-sm-4">         
           <form class="navbar-form">
              <div class="form-group" style="display:inline;">
              </div>
            </form>
          </div>        
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="profile.php">
        <?php  echo $firstname." ".$lastname ?>  <!--displays user's full name -->
           <img src="<? echo $ppic ?>" class="img-nav">  <!--displays user's profile picture -->
          </a>
        </li>
        <li><a href="home.html"><i class="fa fa-bars"></i>&nbsp;Home</a></li>
        <li class="active"><a href="messages.html"><i class="fa fa-comments"></i></a></li>
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
                   <li class="active bounceInDown users" data-receiver="<?php echo $value['id']?>" data-sender="<?php echo $userid;?>" data-name="<?php echo $value['firstname'] . ' ' . $value['lastname']?>">
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
              <h3 id="receiverName"></h3>
              <div class="chat-message">
                  <ul class="chat" id="chat">
                     
                  </ul>
              </div>
              <div class="panel profile-info panel-info">
                <form action="../messageprocess.php" method="post">
                    <textarea class="form-control input-lg p-text-area" rows="3" name= "message" placeholder="Write a message..." id="message"></textarea>
               
                <div class="panel-footer">
                    <input class="btn btn-info pull-right" name ="send" type="submit" value="Send" id="button" >
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
    let senderId = '' , receiverId = '';
    document.querySelector("#button").addEventListener("click", (event)=>{
      event.preventDefault();
      sendMessage();
    })
    function sendMessage(){
      let message = document.getElementById("message").value;
      let placeholder = document.getElementById("chat");
      if(message !== ''){
        let xhr = new XMLHttpRequest();
        xhr.open("GET", `./sendMessage.php?message=${message}&sender=${senderId}&receiver=${receiverId}`, true);
        xhr.onreadystatechange = function() {
          let output = '';
          if(xhr.readyState == 4 && xhr.status == 200) {
              let result = JSON.parse(this.responseText);
              if(result.length > 0){
              result.forEach(function(elem){
                if(elem.hasOwnProperty('receiver')){
                    output+= 
                    `<li class="left clearfix">
                        <div class="chat-body clearfix">
                          <div class="header">
                            <strong class="primary-font"></strong>
                            <small class="pull-right text-muted"><i class="fa fa-clock-o"></i>${elem['createdAt']}</small>
                          </div>
                          <p>
                            ${elem['message']}
                          </p>
                        </div>
                      </li>
                      `
                    }else{
                      output+= 
                    `<li class="right clearfix">
                        <div class="chat-body clearfix">
                          <div class="header">
                            <strong class="primary-font"></strong>
                            <small class="pull-right text-muted"><i class="fa fa-clock-o"></i>${elem['createdAt']}</small>
                          </div>
                          <p>
                            ${elem['message']}
                          </p>
                        </div>
                      </li>`
                    }
                  })
            }else{
              output = `<h1>No Result match your query</h1>`
            }
              placeholder.innerHTML = output;  
          }
      }
        xhr.send();
      }else{
        alert("Add Message");
      }
    }

    



     //code to get user by clicking 
      $(".users").click(function(e){
        placeholder = document.getElementById("chat")
        placeholder.innerHTML  = '';
        receiverId = $(this).data('receiver');
        senderId = $(this).data('sender');
        document.getElementById("receiverName").innerHTML = 'Chatting With: '  + $(this).data('name');
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
