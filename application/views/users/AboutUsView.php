<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="shortcut icon" href="<?php echo base_url()?>images/favicon1.ico" type="image/x-icon">


    <!-- Custom styles -->
    <style>
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
        body {
            background-color: #e3f2fd;
        }

        .nav-item {
            padding: 0px 15px;
        }
    </style>

    <title>Bookro website</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #2c3e50;">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">Bookro</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo base_url().'index.php/users/HomePageCont/index';?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="<?php echo base_url().'index.php/users/HomePageCont/aboutUs';?>">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo base_url().'index.php/users/ContactUs';?>">Contact Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">Register</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item"
                               href="<?php echo base_url().'index.php/users/customer/CRegContro/show';?>">Customer</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item"
                               href="<?php echo base_url().'index.php/users/driver/DRegContro/insertData';?>">Driver</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">Login</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item"
                               href="<?php echo base_url().'index.php/users/customer/CLogContro';?>">Customer</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item"
                               href="<?php echo base_url().'index.php/users/driver/DLogContro';?>">Driver</a>
                        </li>
                    </ul>
                </li>
                
            </ul>
        </div>
    </div>
</nav>

<div class="card mb-3 mt-4 mx-auto" style="max-width: 600px;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="<?php echo base_url().'images/first.jpg';?>" class="img-fluid rounded-start" alt="Card Image 1">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Card Title 1</h5>
                <p class="card-text">Some quick example text to show the card's content. Lorem ipsum doletur, adipisicing elit. In maiores maxime id parabo sequi omnis?</p>
            </div>
        </div>
    </div>
</div>


<div class="card mb-3 mt-4 mx-auto" style="max-width: 600px;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="<?php echo base_url().'images/third.jpg';?>" class="img-fluid rounded-start" alt="Card Image 2">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Card Title 2</h5>
                <p class="card-text">Some quick example text to show the card's content. Lorem ipsum dolor cing elit. Aspernatur, quidem architecto, dolore autem iseum.</p>
            </div>
        </div>
    </div>
</div>


<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo base_url().'images/second.jpg';?>" class="img-fluid rounded-start" alt="Card Image 1">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card Title 1</h5>
                            <p class="card-text">Some quick example text to show the card's content.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo base_url().'images/fourth.jpg';?>" class="img-fluid rounded-start " style="min-height:150px; min-width:150px;"  alt="Card Image 2" >
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card Title 2</h5>
                            <p class="card-text">Some quick example text to show the card's content.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo base_url().'images/fifth.jpg';?>" class="img-fluid rounded-start" style="min-height:150px; min-width:150px; alt="Card Image 3">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card Title 3</h5>
                            <p class="card-text">Some quick example text to show the card's content.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="main-footer text-center">
    <!-- Default to the left -->
    <strong>&copy; 2023 bookro.tdc3030.com</strong>
    All rights reserved.
</footer>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
