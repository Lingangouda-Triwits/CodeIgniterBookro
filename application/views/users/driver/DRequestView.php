<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>


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

        /* .text-center {
            color: #e3f2fd;
        } */

        .nav-item {
            padding: 0px 15px;
            
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
<body>


<nav class="navbar navbar-expand-lg navbar-light " style="background-color:#2c3e50;">
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
                    <a class="nav-link active text-white" href="#">Welcome <?php $userArray = $this->session->userdata('driver'); echo $userArray['name'];?></a>
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


<div class="container mt-5">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col">
          <h1 class="m-0">Accepted Requests</h1>
        </div>
      </div>
    </div>
  </div>

  <!-- Main content -->
  <div class="container">
    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">S.No</th>
          <th scope="col">Name</th>
          <th scope="col">Mobile Num</th>
          <th scope="col">Boarding</th>
          <th scope="col">Destination</th>
          <th scope="col">Status</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $slno = 0;
        foreach ($status as $stat){
          $slno = $slno + 1;

          echo "<tr>
                  <th scope='row'>". $slno . "</th>
                  <td>". $stat->name . "</td>
                  <td>". $stat->mobile . "</td>
                  <td>". $stat->boarding . "</td>
                  <td>". $stat->destination . "</td>
                  <td>". $stat->status . "</td>
                  <td>
                    <a href=''><button class='btn btn-sm btn-success'>Start</button></a>
                  
                    <a href=''><button class='btn btn-sm btn-dark'>Completed</button></a>
                  </td>
                  </tr>";
                } 
                ?>
      </tbody>
    </table>
  </div>
  <!-- /.content-wrapper -->
</div>


<footer class="main-footer text-center mt-5">
    <strong>Copyright &copy; 2023 Bookro.in</strong>
    All rights reserved.
</footer>

<!-- the cdn of jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>

</body>
</html>

