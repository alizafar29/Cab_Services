<!doctype html>
<html lang="en">
  <head>
    <title>Ced Cab Service</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Ced Cab</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>

      </ul>
    </div>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
    <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="aboutUs.html">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contactUs.html">Contact Us</a>
        </li>
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="signUp.html">SignUp</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.html">LogIn</a>
        </li>
    </ul>
    </div>
  </div>
</nav>


    <div class="head">
        <h1>Book a City Taxi to your destination in town</h1>
        <p>Choose from a range of categories and prices</p>
    </div>
    <div class="form">
        <p class="">CITY TAXI</p>
        <h5 style="border-top: 1px solid lightgray">Your everyday travel partner</h5>
            <h6>AC Cabs for point to point travel</h6>
        <form method="POST" id="checkFare">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">PICKUP</label>
                </div>
                <select name="pickup" class="custom-select pick" id="inputGroupSelect01">
                  <option selected>Pickup Location</option>
                  <option value="Charbagh">Charbhag</option>
                  <option value="Indira Nagar">Indira Nagar</option>
                  <option value="BBD">BBD</option>
                  <option value="Barabanki">Barabanki</option>
                  <option value="Faizabad">Faizabad</option>
                  <option value="Basti">Basti</option>
                  <option value="Gorakhpur">Gorakhpur</option>
                </select>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">DROP</label>
                </div>
                <select name="drop" class="custom-select drop" id="inputGroupSelect01">
                  <option selected>Drop Location</option>
                  <option value="Charbagh">Charbhag</option>
                  <option value="Indira Nagar">Indira Nagar</option>
                  <option value="BBD">BBD</option>
                  <option value="Barabanki">Barabanki</option>
                  <option value="Faizabad">Faizabad</option>
                  <option value="Basti">Basti</option>
                  <option value="Gorakhpur">Gorakhpur</option>
                </select>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">CAB TYPE</label>
                </div>
                <select name="cabType" class="custom-select type" id="inputGroupSelect01" onchange="dis()">
                  <option selected>Select CAB type</option>
                  <option value="Ced_Micro">CedMicro</option>
                  <option value="Ced_Mini">CedMini</option>
                  <option value="Ced_Royal">CedRoyal</option>
                  <option value="Ced_SUV">CedSUV</option>
                </select>
              </div>

              <div class="input-group mb-3" id="luggageDiv">
              <span class="input-group-text" id="basic-addon1">Luggage</span>
              <input type="number" name="luggage" class="form-control luggage" placeholder="Enter Luggage in KG" aria-label="Username" aria-describedby="basic-addon1">
            </div>

              <button name="fare" id="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Calculate Fare</button>
        </form>

    </div>
    
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ride Details :</h5>
      </div>
      <div class="modal-body success">
        ...
      </div>
      <div class="modal-footer">
      <button type="button" id="OK" class="btn btn-danger hide" data-bs-dismiss="modal">OK</button>
        <button type="button" class="btn btn-danger btnC" data-bs-dismiss="modal">Cancel</button>
        <a href="signUp.html"><button type="button" class="btn btn-success btnC">Book Ride !</button></a>
      </div>
    </div>
  </div>
</div>
<!-- Optional JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
  
    <script src="cab.js"></script>

  </body>
</html>