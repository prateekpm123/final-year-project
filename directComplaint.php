<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Make Complaint 2</title>
    <link rel="stylesheet" href="../bootstrap-4.4.1-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="directComplaint.css">
    <link href="https://fonts.googleapis.com/css?family=Bitter&display=swap" rel="stylesheet">
</head>

<body onclick="printID(this.id)">

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
                    <a class="nav-link" href="grevience.php">Show Complaint</a>
                </li>
                <li class="nav-item nav1">
                    <a class="nav-link" href="#">Contact Us</a>
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
            <div class="col-lg-3 col-md-2 col-sm-1">

            </div>
            <div class="col-lg-6 col-md-8 col-sm-10">
                <h1>Register your complaint here !</h1>
                <h3>Select Categories !!</h3>
                <div class="col btncol">
                    <button type="button" class="btn btn-outline-primary">University</button>
                    <button type="button" class="btn btn-outline-secondary">Institute</button>
                    <button type="button" class="btn btn-outline-success">Students</button>
                    <button type="button" class="btn btn-outline-danger">Admission</button>
                    <button type="button" class="btn btn-outline-warning">Finance</button>
                    <button type="button" class="btn btn-outline-info">Department</button>
                    <!-- <button type="button" class="btn btn-outline-light">Light</button> -->
                    <button type="button" class="btn btn-outline-dark">Teaching</button>
                </div>
                <div class="col btncol">
                    <input type="text" placeholder="Enter the Result you wanna achieve / summary ">
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <textarea name="" id="" cols="30" rows="10" placeholder="Type your complaint here !"></textarea>
                    </div>
                </div>
                <div class="row row3">

                </div>
                <div class="row">
                    <div class="col">
                        <a href="homepage.html">
                            <button type="button" class="btn btn-primary btn-large btn3">Submit</button>
                        </a>
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-2 col-sm-1">

            </div>
        </div>
    </div>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="../bootstrap-4.4.1-dist/js/bootstrap.min.js">
    </script>
    <script src="directComplaint.js">
    </script>
</body>
</body>

</html>