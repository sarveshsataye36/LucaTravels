<?php
 include "booking.php";//
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
              <li class="nav-item" style="margin-left: 30%;">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
              
            </ul>
            <button class="btn btn-outline-success mx-2 my-2 my-sm-0" data-toggle="modal" data-target="#bookingModal">Book
              Now</button>
              <form action="logout.php" method="post">
            <button class="btn btn-outline-danger mx-2 my-2 my-sm-0" data-toggle="modal"
              data-target="#registerModal">Logout</button>
              </form>
          </div>
        </nav>
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
          <h1 class="display-4 font-italic ms-1 me-1 mt-1" style="color: rgb(0, 238, 255);">Luca Tours & Travels</h1>
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
  <!-- ........................booking modal start here...........................  -->

   <div class="modal fade" id="bookingModal" data-backdrop="static"     data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Booking Form</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="booking.php" method="POST">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Name</label>
                    <input type="text"
                    name="username" placeholder="Username" class="form-control" id="inputEmail4">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Mobile</label>
                    <input type="number" name="mobile" placeholder="Mobile" class="form-control" id="inputPassword4">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAddress">Your Location</label>
                  <input type="text" name="caddress" class="form-control" id="inputAddress"  placeholder="1234 Main St">
                </div>
                <div class="form-group">
                  <label for="inputAddress2">Destination</label>
                  <input type="text" name="faddress" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCity">Start Date</label>
                    <input type="datetime-local" name="sdate" class="form-control" id="inputCity">
                  </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCity">Last Date</label>
                    <input type="datetime-local" name="ldate" class="form-control" id="inputCity">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputState">Trip</label>
                    <select id="inputState" name="trip" class="form-control">
                      <option selected>One Way</option>
                      <option>Two Way</option>
                      <option>Urgent</option>
                      <option>Family Trip</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputState">Member</label>
                    <select id="inputState" name="member" class="form-control">
                      <option selected>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                    </select>
                  </div>
                <button type="submit" class="btn-block mx-4 py-2 btn-primary">Sign in</button>
              </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<div class="bg-dark mt-5 mb-0 px-1 py-1">
  <p style="text-align: center;" class="px-1 py-1 text-light">© 2017-2020 Luca Tours & Travels . All Right Reserved · <a href="#">Privacy</a> · <a
      href="#">Terms</a></p>
  <!-- .........................booking modal end here...........................  -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper)
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->

  <script src="javascript/jquery.mim.js"></script>
  <script src="javascript/javascript.min.js"></script>
  

</body>
</html>