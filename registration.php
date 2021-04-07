<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <!-- icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

  </head>
  <body>
    <!-- image -->
    <div id="container-image">
     <img class="image" width="100%" height="280" src="icons/gambar.jpeg" alt="image">
    </div>
    <!-- /image -->

    <!-- nabvar -->
    <div id="navbar" class="my-color">
      <div class="container">
        <nav class="navbar navbar-expand-lg pt-0 pb-0"> 
          <!-- <a class="navbar-brand" href="#">Hotel</a> -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav text-center">
              <li class="nav-item">
                <a class="nav-link" href="index.php"><nav class="icon"><img src="icons/home.png" alt=""></nav></a>
                <nav class="text-icon">Home</nav>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php"><nav class="icon"><img src="icons/data.png" alt=""></nav></a>
                <p class="text-icon">Report Data</p>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="registration.php"><nav class="icon"><img src="icons/registrasi.png" alt=""></nav></a>
                <p class="text-icon">Registration</p>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><nav class="icon"><img src="icons/logout.png" alt=""></nav></a>
                <p class="text-icon">Logout</p>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <!-- /navbar -->


    <!-- registration -->
    <div id="registration" class="registration">
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4 pb-5 text-center"><strong>Registration User</strong></h1>
          <form>
            <div class="form-group row">
              <label for="id-number" class="col-sm-2 col-form-label">Id Number</label>
              <div class="col-sm-10">
                <input type="id" class="form-control mb-2" id="id-number" placeholder="id number">
              </div>
              <label for="password" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control mb-2" id="password" placeholder="password">
              </div>
              <label for="name" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input type="name" class="form-control mb-2" id="name" placeholder="name">
              </div>
              <label for="date" class="col-sm-2 col-form-label">Date of Birth</label>
              <div class="col-sm-10">
                <input type="date" class="form-control mb-2" id="date">
              </div>
              <label for="work-position" class="col-sm-2 col-form-label">Work Position</label>
              <div class="col-sm-10">
                <input type="text" class="form-control mb-2" id="work-position" placeholder="work postition">
              </div>
              <label for="address" class="col-sm-2 col-form-label">Address</label>
              <div class="col-sm-10">
                 <textarea class="form-control" id="address" rows="3" placeholder="address"></textarea>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- /registration -->

    <!-- footer -->
    <footer class="text-center my-color">
      <p>Sistem Kontrol Dan Monitoring Pendistribusian Perlengkapan Kamar Hotel Berbasis Internet of Things</p>
    </footer>
    <!-- /footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>