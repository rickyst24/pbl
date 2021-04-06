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
     <img src="icons/Capture.png" alt="image">
     <!--  <div class="jumbotron jumbotron-fluid">
        <div class="container">
          
        </div>
      </div> -->
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
                <a class="nav-link" href="#"><nav class="icon"><img src="icons/home.png" alt=""></nav></a>
                <nav class="text-icon">Home</nav>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><nav class="icon"><img src="icons/data.png" alt=""></nav></a>
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


    <!-- report data -->
    <div id="data-laporan" class="report-data text-center">
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4 pb-5"><strong>Report Data</strong></h1>
          <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">Id Number</th>
                <th scope="col">Name</th>
                <th scope="col">Room Number</th>
                <th scope="col">Facilities</th>
                <th scope="col">Date</th>
                <th scope="col">Information</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">3231901034</th>
                <td>Daniel Prayogo</td>
                <td>101</td>
                <td>10 View</td>
                <td>22/02/202</td>
                <td>Complete</td>

              </tr>
              <tr>
                <th scope="row">4211901034</th>
                <td>Jacob</td>
                <td>102</td>
                <td>10 View</td>
                <td>22/02/202</td>
                <td>Complete</td>
              </tr>
              <tr>
                <th scope="row">3231901934</th>
                <td>Daniel Sipahutar</td>
                <td>104</td>
                <td>10 View</td>
                <td>22/02/2021</td>
                <td>Complete</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- /report data -->

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