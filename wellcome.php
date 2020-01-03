


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script>
  function myfunction(){
    alert("Cannot register for fastrack!!!!!");

  }

  </script>
</head>
<style>
    body{
        background-color: #0c9463;
    }
.card{
  background-color: #fff;  
}
.row{
    margin-top: 200px;
    margin-left: 250px;
}
h1{
  color:#fff;
}
</style>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="#">
          <h4>BMSCE</h4>
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="help.html">Help
                <span class="sr-only">(current)</span>
              </a>
        </li>
 </li>
	<li class="nav-item">
          <a class="nav-link" href="about.html">About</a>
        </li>
               
        
      </ul>
    </div>
  </div>
</nav>
<!--
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">BMSCE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="faq.html">HELP</a>
      </li>
        
    </ul>
  </div>  
</nav>-->
<br>


<center><h1>WELCOME</h1></center>


<div class="row">
    
    <div class="col-sm-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Fastrack</h5>
          <p class="card-text">JUNE - 2020</p>
          <a href="" class="btn btn-primary" onclick="myfunction()" ><span><i class=""></i></span>&nbsp;Register</a>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">SEE</h5>
            <p class="card-text">DEC 2019</p>
            <a href="dept.php" class="btn btn-primary"><span><i class=""></i></span>&nbsp;Register</a>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">LOGOUT</h5>
            <p class="card-text">Bye</p>
            
            <a href="logout.php?logout" class="btn btn-primary"><span><i class="fas fa-sign-out-alt"></i></span> &nbsp;logout</a>
          </div>
        </div>
      </div>
  </div>


  <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-bottom">
       <p></p>
      </nav>


</body>
</html>


