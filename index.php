<!DOCTYPE html>
<html>
<head>
	<title>HOME | Login Page</title>
   

   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ----------> 


   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="css/styles.css">

	<!--Start of Tawk.to Script-->
 

<style type = text/css>
	.container{
    top:0;
    margin-top:0;
    padding-top:0;
  }
</style>
</head>
<body background="images/bg1.jpg" bgcolor="silver">
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="http://bmsce.ac.in">
          <h4>BMSCE</h4>
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home | Login
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin/login.php">Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="application_form/index.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="help.html">Help</a>
        </li>
	<li class="nav-item">
          <a class="nav-link" href="about.html">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>




<!--
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="http://www.bmsce.ac.in">BMSCE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
	
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-user-plus"></i><a  href = "application_form/index.php">Register</a></button>

	  <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-question-circle"></i><a  href = "help.html">Help</a></button>
    </form>
  </div>
</nav>
-->





<?php
                        if(@$_GET['Empty']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>
                    <?php
                        }
                    ?>


                    <?php
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>
                    <?php
                        }
                    ?>















<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3 align="center">Sign In</h3><!--
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>-->
			</div>
			
			
			 
			
			
			<div class="card-body">
				<form action="process.php" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
                        
						<input type="text" class="form-control" name="usn" placeholder="USN">
						
					</div> 
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="Password" placeholder="Password">
					</div>
				<!--	<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>-->
					<div class="row justify-content-center">
					<div class="row">
					<div class="col-sm-12">
						<input type="submit" value="Login" name="Login" class="btn float-right login_btn">
					</div>
					</div>
					</div>
				</form>
				
			</div>
			<div class="card-footer">
				
				<div class="d-flex justify-content-center">
					<a href="application_form/index.php" style="text-decoration:none; color:white;">New User? Register</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>