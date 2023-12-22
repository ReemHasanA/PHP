<?php
session_start();
include 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">My Website</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-success ml-2" href="signup.php">Sign Up</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4 d-flex flex-column align-items-center">
        <h1>Welcome <?php
        if (isset($_SESSION['Username'])&& !empty($_SESSION['Username'])) {
            echo $_SESSION['Username'];
        }
        ?>
         to My Website</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non metus justo.</p>
    </div>
    <div class="d-flex flex-column align-items-center">
        <img src="https://static.vecteezy.com/system/resources/previews/001/191/174/non_2x/flower-floral-png.png" width="50%" alt="">
    </div>
    <div class="d-flex justify-content-around">
             
        <a class="btn btn-success ml-2 w-25 m-2" href="signup.php">Sign Up</a>
                    <a class="btn btn-primary w-25 m-2" href="login.php">Login</a>
        </div> 
        
       
              
    

    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
