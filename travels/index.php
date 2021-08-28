<?php
 include "register.php";
 include "login.php";

?> 
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/index.css">

  <title>start page</title>
</head>
<style>

</style>

<body>
  <div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <!-- <a class="navbar-brand" href="#">Navbar</a> -->
      <img src="images/logo.png" alt="logo" class="img-fluid nav-logo">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active" style="margin-left: 30%;">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item" style="margin-left: 30%;">
            <a class="nav-link" href="#services">Services</a>
          </li>
        </ul>


        <button class="btn btn-outline-primary mx-2 my-2 my-sm-0" data-toggle="modal"
          data-target="#registerModal">Register</button>
        <button class="btn btn-outline-primary mx-2 my-2 my-sm-0" type="submit" data-toggle="modal"
          data-target="#LoginModal">Login</button>
        <button class="btn btn-outline-success mx-2 my-2 my-sm-0" data-toggle="modal" data-target="#bookingModal">Book
          Now</button>
      </div>
  </div>

  <!-- ........................ navigation bar end here .............................  -->
  <!-- ........................ frontlogo start here .............................  -->

  <div class="">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/frontlogo.jpg" class="img-fluid" alt="frontlogo" style="height: 600px; width: 100%;">
        </div>
        <div class="col-lg px-0">
          <h1 class="display-4 font-italic  ms-1 me-1 mt-1" style="color: rgb(0, 238, 255);">Luca Tours & Travels</h1>
          <p class="lead my-3  ms-1 me-1 " style="color: rgb(0, 238, 255);">Looking for vacation trip & want to manage a car with driver ?
            Don't worry we got covered
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- ........................ frontlogo end here .............................  -->

  <!-- ...........................services start here...................................  -->
  <div>
  <div class="container" id="services">
     <h1 class="mt-4 mb-4 text-danger" style="text-align: center;">
       Services
     </h1>

    
    
   <!-- ...................... right .......................  -->
  <div class="row featurette mb-5">
    <div class="col-md-7 ">
      <h2 class="featurette-heading">Tourist Spot & Pligrimage</h2>
      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class="col-md-5">
     <img src="images/golden-temple1.jpg" alt="" style="width: 400px;
     height: 300px;" class="rounded">
    </div>
  </div>
  <!-- ......................... left ...............................  -->

  <div class="row featurette mb-5">
    <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading">Family Trips</h2>
      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class="col-md-5 order-md-1">
      <img src="images/family1.jpg" alt="" style="width: 400px;
      height: 300px;" class="rounded">
    </div>
  </div>
   <!-- ...................... right .......................  -->
  <div class="row featurette mb-5">
    <div class="col-md-7 ">
      <h2 class="featurette-heading">Urgent Booking</h2>
      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class="col-md-5">
     <img src="images/urgent.jpg" alt="" style="width: 400px;
     height: 300px;" class="rounded">
    </div>
  </div>
  <!-- ......................... left ...............................  -->

  <div class="row featurette mb-5">
    <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading">Clean & Hygenic</h2>
      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class="col-md-5 order-md-1">
      <img src="images/clean.png" alt="" style="width: 400px;
      height: 300px;" class="rounded">
    </div>
  </div>
  <!-- ...................... right .......................  -->
  <div class="row featurette mb-5">
    <div class="col-md-7 ">
      <h2 class="featurette-heading">Saftey</h2>
      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class="col-md-5">
     <img src="images/safety.png" alt="" style="width: 400px;
     height: 300px;" class="rounded">
    </div>
  </div>
  <!-- ......................... left ...............................  -->

  <div class="row featurette mb-5">
    <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading">Frist Aid</h2>
      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class="col-md-5 order-md-1">
      <img src="images/frist-aid.jpg" alt="" style="width: 400px;
      height: 300px;" class="rounded">
    </div>
  </div>
  <!-- ...................... right .......................  -->
  <div class="row featurette mb-5">
    <div class="col-md-7 ">
      <h2 class="featurette-heading">Confort</h2>
      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class="col-md-5">
     <img src="images/confort.jpg" alt="" style="width: 400px;
     height: 300px;" class="rounded">
    </div>
  </div>
  <!-- ......................... left ...............................  -->

  <div class="row featurette mb-5">
    <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading">Entertainment</h2>
      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class="col-md-5 order-md-1">
      <img src="images/music1.jpg" alt="" style="width: 400px;
      height: 300px;" class="rounded">
    </div>
  </div>
   <!-- ...................... right .......................  -->
   <div class="row featurette mb-5">
    <div class="col-md-7 ">
      <h2 class="featurette-heading">Others Services</h2>
      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class="col-md-5">
     <img src="images/chocolate2.jpg" alt="" style="width: 400px;
     height: 300px;" class="rounded">
    </div>
  </div>

  <!-- ................................................................  -->
</div>
</div>
  <!-- ...........................services end here ...................................  -->

  <!-- .............................register modal start  here..........................  -->
  <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLabel">Register</h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="register.php" method="POST">
          <?php
            if(isset($_GET['username'])){
              $username=$_GET['username'];
              echo '<div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="username" value="'.$username.'">
            </div>';
            }
            else {
              echo '<div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="username">
            </div>';
            }

            if (isset($_GET['email'])) {
              $email = $_GET['email'];
              echo '<div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" name="email" class="form-control" placeholder="email" id="exampleInputEmail1" aria-describedby="emailHelp" value="'.$email.'">
            </div>';
            }
            else {
              echo '<div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" name="email" class="form-control" placeholder="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>';
            }
              ?>    
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="password" class="form-control" placeholder="password" id="exampleInputPassword1">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Confirm Password</label>
              <input type="password" name="confirmpwd" class="form-control" placeholder="confirm password" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
          </form>
        </div>
      </div>
      <?php
        if(!isset($_GET['register'])){
        
        }
        else {
          $registerCheck = $_GET['register'];

            if($registerCheck == "empty")
            {
              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
             Username must not be blank.
            </div>';
            }
            elseif($registerCheck == "email_blank")
            {
              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
               Email cannot be blank.
            </div>';
            }
            elseif($registerCheck == "email_is_existed")
            {
              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              Email is already taken.
            </div>';
            }
            elseif($registerCheck == "something_went_wrong")
            {
              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              Something went wrong.
            </div>';
            }
            elseif($registerCheck == "password_must_not_blank")
            {
              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              Password must not be blank.
            </div>';
            }
            elseif($registerCheck == "password_must_contain_eight_char")
            {
              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              Password must contain eight character and numbers.
            </div>';
            }
            elseif($registerCheck == "confirmpassword_must_match")
            {
              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              Confirm password must match.
            </div>';
            }
            elseif($registerCheck == "success")
            {
              echo '<div class="alert alert-sucess alert-dismissible fade show" role="alert">
              Register Sucess. 
            </div>';
            }
          }
        
        ?>
    </div>
  </div>

  <!-- .............................register modal end here............................  -->

  <!-- ........................login modal start here...........................  -->

  <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLabel">Login</h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="login.php" method="POST">
            <?php
            if(isset($_GET['email'])){
              $email=$_GET['email'];
              echo '<label for="inputEmail" class="visually-hidden">Email address</label>
              <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required=""
                autofocus="" value="'.$email.'">';
            }
            else{
              echo '<label for="inputEmail" class="visually-hidden">Email address</label>
              <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required=""
                autofocus="">';
            }
            ?>         
            <label for="inputPassword" class="visually-hidden">Password</label>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="">
        </div>
        <button class="container w-50 mb-2 btn btn-lg btn-primary" type="submit">Login<button>
        </form>
      </div>
      <?php
        if(!isset($_GET['login'])){
        
        }
        else {
          $loginCheck = $_GET['login'];

            if($loginCheck == "incorrect_email")
            {
              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
             Incorrect Email
            </div>';
            }
            elseif($loginCheck == "incorrect_password")
            {
              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
               Incorrect Password
            </div>';
            }
            elseif($loginCheck == "password_incorrect")
            {
              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              Password Incorrect
            </div>';
            }
            elseif($loginCheck == "email_not_existed")
            {
              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              Email is not existed
            </div>';
            }
            elseif($loginCheck == "something_went_wrong")
            {
              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              Something went wrong
            </div>';
            }
            elseif($loginCheck == "success")
            {
              echo '<div class="alert alert-sucess alert-dismissible fade show" role="alert">
              Login Sucess 
            </div>';
            }
          }
        
        ?>
    </div>
  </div>
  </div>
  <!-- .........................login modal end here...........................  -->
  <!-- ........................booking modal start here...........................  -->

  <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLabel">Booking</h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-danger">
          <p>Register OR Login For Booking & Contact Pages</p>
        </div>
      </div>
    </div>
  </div>
  <!-- .........................login modal end here...........................  -->

  <!-- ............................ footer form start here .............................  -->

  <div class="bg-dark mt-5 mb-0 px-1 py-1">
    <p style="text-align: center;" class="px-1 py-1 text-light">© 2017-2020 Luca Tours & Travels . All Right Reserved · <a href="#">Privacy</a> · <a
        href="#">Terms</a></p>
  </div>

  <!-- ............................ footer form end here .............................  -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->
  <script src="javascript/jquery.mim.js"></script>
  <script src="javascript/javascript.min.js"></script>
</body>

</html>
<!-- 
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  Login
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> -->