
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
  <body class="welcome-page animated fadeIn">
    <?php require_once("../controller/registercontroller.php"); ?>
    <div class="row row-welcome">
      <div class="login-page">
        <div class="row"> 
          <div class="col-md-4 col-md-offset-4"> 
            <img src="../images/logoash.png"> 
            <h1 style= "color:#B22222;">Connect</h1>
              <h3 style= "color:#B22222;">Sign Up</h3>


            <form method = "post" action = "">
              <div class="form-content"> 

                <div class="form-group"> 
                  <input type="text" name = "email" class="form-control input-underline input-lg" placeholder="Email" required>
                  <span style="color: red"> <?php if(isset($GLOBALS['emailError'])){ echo $GLOBALS['emailError']; }?></span>
                </div> 

                <div class="form-group"> 
                  <input type="text" name= "fname" class="form-control input-underline input-lg" placeholder="First Name" required>
                   <span style="color: red"> <?php if(isset($GLOBALS['fnameError'])){ echo $GLOBALS['fnameError']; }?></span>
                </div> 

                <div class="form-group"> 
                  <input type="text" name = "lname" class="form-control input-underline input-lg" placeholder="Last Name" required>
                  <span style="color: red"> <?php if(isset($GLOBALS['lnameError'])){ echo $GLOBALS['lnameError']; }?></span>
                </div> 

                <div class="form-group"> 
                  <input type="password" name="password" class="form-control input-underline input-lg" placeholder="Password" required>
                  <span style="color: red"> <?php if(isset($GLOBALS['pwordError'])){ echo $GLOBALS['pwordError']; }?></span>  
                </div> 
                  <button name="register" type="submit" class="btn btn-info btn-lg">Register</button>
                  <p style= "color:#B22222;">Already registered? <a href="login.php" style= "color:#B22222;">Log in here</a></p>
              </div>  
                
            
            </form>  
          </div> 

        </div> 


        <div class="row">
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
        </div>
      </div>
    </div>
  </body>
</html>
