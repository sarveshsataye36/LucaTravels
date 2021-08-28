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
          <li class="nav-item" style="margin-left: 30%;">
            <a class="nav-link" href="start.php">Home</a>
          </li>
          <li class="nav-item" style="margin-left: 30%;">
            <a class="nav-link" href="start.php#services">Services</a>
          </li>
          <li class="nav-item active" style="margin-left: 30%;">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          
        </ul>


        <form action="logout.php" method="post">
            <button class="btn btn-outline-danger mx-2 my-2 my-sm-0" data-toggle="modal"
              data-target="#registerModal">Logout</button>
              </form>
      </div>
  </div>
  <!-- ........................ navigation bar end here .............................  -->
      <!-- .............................jumbotron start here ........................................ -->
      
      <div class="jumbotron jumbotron-fluid mt-5">
        <div class="container">
          <h1 class="display-4">Contact Us</h1>
          <p class="lead">Feel free to contact us for any information you needed.</p>
        </div>
      </div>  
    
      <!-- .............................jumbotron end here ........................................ -->
   <!-- .................................... cards start here ..........................  -->
   <div class="container mt-5 mb-5 justify-content-around d-flex">
    
   <div class="row">
     <div class="col-lg-4">
      <img src="images/address.png" alt="address.png" style="width: 140px; height: 140px;"
      class="rounded circle">
       <h2>Address</h2>
       <p>Sanjay park new airport road near dorabjee mall viman darshan road pune-32</p>
      </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="images/phone.png" alt="phone.png" style="width: 140px; height: 140px;"
      class="rounded circle">
          <h2>Mobile</h2>
          <p>+91 9146346957</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="images/email.png" alt="email.png" style="width: 140px; height: 140px;"
          class="rounded circle">
          <h2>Email</h2>
          <p>lucatravels@gmail.com</p>
        </div><!-- /.col-lg-4 -->
      </div>
   </div>

      <!-- .................................... cards end here ..........................  -->
      <!-- ............................ footer form start here .............................  -->
      
      <footer class="footer mt-auto py-3 bg-dark">
        <div class="container">
          <p style="text-align: center;" class="px-1 py-1 text-light">© 2017-2020 Luca Tours & Travels . All Right Reserved · <a href="#">Privacy</a> · <a
            href="#">Terms</a></p>
        </div>
      </footer>

  <!-- ............................ footer form end here .............................  -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->
  <script src="javascript/jquery.mim.js"></script>
  <script src="javascript/javascript.min.js"></script>
</body>

</html>
