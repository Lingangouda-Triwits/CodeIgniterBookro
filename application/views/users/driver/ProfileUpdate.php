<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta http-equiv="refresh" content="20"> -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
<!--             
<script type = "text/JavaScript">
            function AutoRefresh( t ) {
               setTimeout("location.reload(true);", t);
            }
      </script> -->


  <!-- CDN of datatables -->
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

  <link rel="shortcut icon" href="<?php echo base_url()?>images/favicon1.ico" type="image/x-icon">

    <title>Bookro | Driver</title>
    <style>
        * {
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
        
  /* Hide the vertical scrollbar */
  body::-webkit-scrollbar {
    width: 0;
    background: transparent;
  }

        .rounded-photo {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    object-fit: cover; 
    margin-left: -25px; /* Add negative margin-left to move the photo a bit to the left */
}

    </style>
</head>
<!-- onload = "JavaScript:AutoRefresh(15000);" -->
<body >
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
                    <a class="nav-link text-white" href="<?php echo base_url().'index.php/users/HomePageCont/aboutUs'; ?>">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo base_url().'index.php/users/ContactUs';?>">Contact Us</a>
                </li>
            </ul>
            

            <!-- Right-aligned items -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-white" href="<?php echo base_url().'index.php/users/driver/DDashboardCont/updateProfileView';?>">Welcome <?php $driverArray = $this->session->userdata('driver'); echo $driverArray['name'];?></a>
                </li>
                <li class="nav-item">
                    <img src="<?php echo base_url('uploads/'.$photo); ?>" alt="Driver Photo" class="rounded-photo">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo base_url().'index.php/users/driver/DLogContro/logout';?>">LogOut</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col">
          <h1 class="m-0 text-center mt-3">Update Profile</h1>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="row justify-content-center mt-3">
  <div class="col-md-4">
    <form action="<?php echo base_url(). 'index.php/users/driver/DDashboardCont/updateProfile';?>" method="POST">
      <div class="mb-3">
        <label for="carname" class="form-label">Car Name</label>
        <input type="text" class="form-control" id="carName" name="carName" required>
      </div>

      <div class="mb-3">
        <label for="carnum" class="form-label">Car Number</label>
        <input type="text" class="form-control" id="carNum" name="carNum" maxlength="10" required onkeyup="this.value = this.value.toUpperCase();">

      </div>  
      
      <div class="mb-3">
        <label for="licensenumber" class="form-label">License Number</label>
        <input type="text" class="form-control" id="licenseNum" name="licenseNum" required>
      </div>  

      <div class="mb-3">
        <label for="rccardnumber" class="form-label">RC Card Number</label>
        <input type="text" class="form-control" id="rcCard" name="rcCard" required>
      </div> 
      <div class="text-center">
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
      </div>
    </form>
  </div>
</div>

<footer class="main-footer text-center mt-5">
    <!-- Default to the left -->
    <strong>Copyright &copy; 2023 Bookro.com</strong>
    All rights reserved.
</footer>



</body>
</html>
