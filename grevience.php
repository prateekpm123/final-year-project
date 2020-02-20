<?php

$con = mysqli_connect('localhost','root');
if($con) {
    echo "sucess";
}
$db = mysqli_select_db($con, 'sih registration');
if($db) {
    echo "sucess h1";
}




?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="grevience.css">

    <title>Mann Ki Baat- Complaints showcase</title>
</head>
 
<body class="home-body">
    <!-- <div class="fixed-top"> -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       <a class="navbar-brand" href="#">AU</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
           aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarNavDropdown">
           <!-- Add ml-auto to the UL tag class to move the whole nav bar to the right side -->
           <ul class="navbar-nav ml-auto">
               <li class="nav-item active nav1">
                   <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item nav1">
                   <a class="nav-link" href="aboutus.html">About Us</a>
               </li>
               <li class="nav-item nav1">
                   <a class="nav-link" href="directComplaint.html">Quick Complaint</a>
               </li>
               <li class="nav-item nav1">
                   <a class="nav-link" href="chatbot 2.html">Make Complaint</a>
               </li>
               <li class="nav-item nav1">
                   <a class="nav-link" href="#">Show Complaint</a>
               </li>
               <li class="nav-item nav1">
                   <a class="nav-link" href="contact us.html">Contact Us</a>
               </li>
               <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       Login
                   </a>
                   <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                       <a class="dropdown-item" href="login.html">User Login</a>
                       <a class="dropdown-item" href="login.html">Admin Login</a>

                       <!-- <a class="dropdown-item" href="#">Something else here</a> -->
                   </div>
                   <!-- <li class="nav-item nav1">
          <a class="nav-link" href="login.html">Log In</a>
        </li> -->
               <li class="nav-item nav1">
                   <a class="nav-link" href="Registration.php">Sign up</a>
               </li>
               <!-- Dropdown Menu Item -->
               <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Admin Space
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Complaints</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li> -->
           </ul>
       </div>
   </nav>

    <!-- </div> -->


    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assests/145797-social-network-logo-collection/png/facebook.png"
                                class="d-block w-100 image-slider" alt="">
                        </div>
                        <div class="carousel-item">
                            <a href="https://www.google.com"><img
                                    src="assests/145797-social-network-logo-collection/png/behance.png"
                                    class="d-block w-100 image-slider" alt="">
                            </a>        
                        </div>
                        <div class="carousel-item">
                            <img src="assests/145797-social-network-logo-collection/png/google-plus.png"
                                class="d-block w-100 image-slider" alt="">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="container-fluid trending">
                    <h1>Trending</h1>
                </div>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>

        </div>
        <div class="row trending-cards-complaint">
            <div class="col-md-3">
                <?php

                $q = "SELECT c_descption FROM `complaints`";
                $result = mysqli_query($con, $q);
                $desc = mysqli_fetch_assoc($result);

                ?>

                <div class="card" style="width: 18rem;">
                    <div class="card-body complaint-card-body">
                        <h5 class="card-title">Resolve my paper correction issues</h5>
                        <span class="badge badge-primary">Correction</span>
                        <span class="badge badge-secondary">University</span>
                        <!-- <h6 class="card-subtitle mb-2 text-muted">Correction University</h6> -->
                        <p class="card-text">
                        <?php
                        
                        // echo $desc;
                        echo "{$desc['c_descption']}";


                        ?>
                    
                        </p>
                        <a href="#" class="card-link">Like</a>
                        <a href="#" class="card-link">Provide Suggestions</a>
                    </div>
                </div>
            </div> 
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body complaint-card-body">
                        <h5 class="card-title">To resolve timetable issues</h5>
                        <span class="badge badge-success">Time Table</span>
                        <span class="badge badge-secondary">University</span>
                        <!-- <h6 class="card-subtitle mb-2 text-muted">University timetable</h6> -->
                        <p class="card-text">University delayed timetable</p>
                        <a href="#" class="card-link">Like</a>
                        <a href="#" class="card-link">Provide Suggestions</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body complaint-card-body">
                        <h5 class="card-title">Making admissions smoother</h5>
                        <span class="badge badge-warning">Admission</span>
                        <span class="badge badge-info">College</span>
                        <!-- <h6 class="card-subtitle mb-2 text-muted">Admission  College</h6> -->
                        <p class="card-text">There was some problem with the admission of through the </p>
                        <a href="#" class="card-link">Like</a>
                        <a href="#" class="card-link">Provide Suggestions</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body complaint-card-body">
                        <h5 class="card-title">Provide proper hardware</h5>
                        <span class="badge badge-dark">Dept</span>
                        <!-- <h6 class="card-subtitle mb-2 text-muted">Admission </h6> -->
                        <p class="card-text">Department not providing proper hardware for studying</p>
                        <a href="#" class="card-link">Like</a>
                        <a href="#" class="card-link">Provide Suggestions</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-md-8">
                <h1>trending</h1>
            </div> -->
    </div>
    </div>

    <!-- <div class="fixed-bottom">    -->
    <footer class="footed">
        <div class="container-fluid footeds">
            <div class="row">
                <div class="col-md-6 footer-leftside">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex
                        ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                        dolore eu fugiat
                        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                        deserunt mollit
                        anim id est laborum.</p>
                </div> 
                <div class="col-md-3 footer-rightside">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- </div> -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="bootstrap-4.4.1-dist/js/bootstrap.min.js">
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.footer-leftside').accordion();
        })
    </script>
</body>

</html>