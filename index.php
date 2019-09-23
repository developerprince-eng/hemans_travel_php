<?php
$base_url = 'hemansa_travel_project'; 
include('/controllers/trip.php');
?>
<!DOCTYPE html>
<head>
    <title> HEMANS TRAVELS</title>
    <link href="assets/vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">HMT</a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Aboutus</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="auth">Login</a>
            </li>
            </ul>
        </div>
    </nav>

        <video width="300" height="240" controls>
            <source srcc="$base_url/assets/videos/MYVIDEO.mp4" type="video/mp4">
        </video>

        <div class="hero">
            <h1> "ONUA AKWAABA" </h1>
            <div class="button">
                <a href="" class="btn btn-one"> Watch Video</a>
                <a href="" class="btn btn-two"> Explore</a>
            </div>
        </div>

    </header>
    <script src="assets/vendor/bootstrap-4.3.1-dist/js/bootstrap.min.js" rel="stylesheet" type="text/css">
</body>

</html>