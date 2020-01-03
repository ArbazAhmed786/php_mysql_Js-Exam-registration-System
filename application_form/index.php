
<?php
    
    error_reporting(0);
    if(isset($_POST["first_name"]) && isset($_POST["last_name"]) && isset($_POST["birthday"]) && isset($_POST["gender"]) && isset($_POST["usn"]) && isset($_POST["challan"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["password"]) && isset($_POST["confirm_password"])){
	$servername= "localhost";
	$username = "root";
	$password = "";
	$dbname = "examf";
	
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if($conn)
	{		echo "";
	}
	else
	{	
		die("connection_aborted".mysqli_connect_error());
	}

    $fname=$_POST["first_name"];
    $lname = $_POST["last_name"];
    $bday = $_POST["birthday"];
    $gender = $_POST["gender"];
    $usn = $_POST["usn"];
    $challan = $_POST["challan"];
    $email = $_POST["email"];
    $ph = $_POST["phone"];
    $Password=$_POST["Password"];
    $confirm_password=$_POST["confirm_password"];

		
	
	
	$query = "INSERT INTO register VALUES ('$fname','$lname','$bday','$gender','$usn','$challan','$email','$ph','$Password','$confirm_password')";
	$data=mysqli_query($conn,$query);
	if($data){


		 echo '<script type="text/javascript">';
         echo 'setTimeout(function () { swal("Done!","Registered Successfully..!","success");';
         echo '}, 1000);</script>';		
	}

	else{
		 echo '<script type="text/javascript">';
         echo 'setTimeout(function () { swal("Sorry!","USN already Exists..!","warning");';
         echo '}, 1000);</script>';
	}

}
?>













<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Md">
    <meta name="keywords" content="Colorlib Templates">
    <link href="https://fonts.googleapis.com/css?family=Bitter&display=swap" rel="stylesheet">
    <!-- Title Page-->
    <title>Registration</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body background="images/final.jpg">

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
          <a class="nav-link" href="C:\Users\Projects\Desktop\yaseen\project_Work\yaseen\index.html">Home | Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="C:\Users\Projects\Desktop\yaseen\project_Work\yaseen\admin\login.html">Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register
	<span class="sr-only">(current)</span>
         </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="C:\Users\Projects\Desktop\yaseen\project_Work\yaseen\help.html">Help</a>
        </li>
 </li>
	<li class="nav-item">
          <a class="nav-link" href="about.html">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration</h2>
                    <form action="" method="post">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label required">First Name</label>
                                    <input class="input--style-4" type="text" name="first_name" required placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label required">Last Name</label>
                                    <input class="input--style-4" type="text" name="last_name" required placeholder="Last Name">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Birth Date</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="birthday" placeholder="DD/MM/YYYY">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
	     <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label required">USN</label>
                                    <input class="input--style-4" type="text" name="usn" required placeholder="1BMCS000">
                                </div>
                            </div>
                             <div class="col-2">
                                <div class="input-group">
                                    <label class="label required">Challan Number</label>
                                    <input class="input--style-4" type="text" name="challan" required placeholder="20190000000">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email" placeholder="example@bmsce.ac.in">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="phone" placeholder="9998887776">
                                </div>
                            </div>
                        </div>



                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label required">Password</label>
                                    <input class="input--style-4" type="password" name="password" placeholder="Your password">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label required">Confirm Password</label>
                                    <input class="input--style-4" type="password" name="confirm_password" placeholder="Confirm password">
                                </div>
                            </div>
                        </div>
                 
                        <div class="p-t-15 p-b-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;
	<button class="btn btn--radius-2 btn--grey" type="reset" value = "RESET">Reset</button>
                        </div>
                    </for>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->