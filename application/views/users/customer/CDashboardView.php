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

  <!-- for the notification -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <title>Bookro | Customer</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        body {
            background-color: #e3f2fd;
        }

        /* Hide the vertical scrollbar */
        body::-webkit-scrollbar {
            width: 0;
            background: transparent;
        }

        .nav-item {
            padding: 0px 15px;
        }

        .notification-icon {
            position: fixed;
            top: 65px;
            right: 20px;
            font-size: 24px;
            color: #000;
            cursor: pointer;
        }

        @media (max-width: 576px) {
            /* Styles for small devices */
            .notification-icon {

                top: 55px;
                right: 10px;
                font-size: 20px;
            }
        }

        @media (max-width: 768px) {
            /* Styles for medium devices */
            .notification-icon {
                top: 55px;
                right: 15px;
                font-size: 22px;
            }
        }

        @media (max-width: 992px) {
            /* Styles for large devices */
            .notification-icon {
                top: 55px;
                right: 20px;
                font-size: 24px;
            }
        }
    </style>
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
                    <a class="nav-link text-white"href="<?php echo base_url().'index.php/users/HomePageCont/index';?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo base_url().'index.php/users/HomePageCont/aboutUs'; ?>">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo base_url().'index.php/users/ContactUs';?>">Contact Us</a>
                </li>
            </ul>
                
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-white" href="#">Welcome <?php $userArray = $this->session->userdata('user'); echo $userArray['name'];?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo base_url().'index.php/users/customer/CLogContro/logout' ?>">LogOut</a>
                </li>
            </ul>
        </div>
    </div>
</nav>



<div id="contentContainer">
  <!-- Include jQuery library -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(function() {
      <?php if (!empty($messages)) { ?>
        toastr.options = {
          closeButton: true,
          progressBar: true,
          tapToDismiss: false,
          timeOut: 0,
          positionClass: 'toast-top-right',
          onclick: null,
          showDuration: '300',
          hideDuration: '1000',
          showEasing: 'swing',
          hideEasing: 'linear',
          showMethod: 'fadeIn',
          hideMethod: 'fadeOut' // Change to 'toast-success-icon' for green color
        };
        <?php foreach ($messages as $message) { ?>
          toastr.info('Holy guacamole! A driver has accepted your request', '<?= $message ?>');
        <?php } ?>
        // Create the icon element
        var iconElement = jQuery('<i class="fas fa-bell notification-icon"></i>');
        // Add a click event handler to display the alerts again
        iconElement.on('click', function() {
          <?php foreach ($messages as $message) { ?>
            toastr.info('Holy guacamole! A driver has accepted your request', '<?= $message ?>');
          <?php } ?>
        });
        // Append the icon to the body
        jQuery('body').append(iconElement);
      <?php } ?>
    });
  </script>
</div>


<!-- Alert -->
<div style="display: flex; justify-content: center;">
<?php if (!empty($this->session->flashdata('requestSent'))) : ?>
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong><?php echo $this->session->flashdata('requestSent');?></strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php endif; ?>
</div>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col">
          <h1 class="m-0 text-center mt-3">Book a ride here</h1>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="row justify-content-center mt-2">
  <div class="col-md-4">
    <form action="<?php echo base_url().'index.php/users/customer/CDashboardCont/saveRequest';?>" method="POST" >
      <div class="mb-1">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="name" name="name" pattern="[A-Za-z]+(\s[A-Za-z]+)+" title="FirstName Space LastName" required>

      </div>

      <div class="mb-1">
        <label for="mobile" class="form-label">Mobile Number</label>
        <input type="phone" class="form-control" id="mobile" name="mobile" minlength="10" maxlength="10" pattern="^[6-9][0-9]*$" required oninput="if(!this.value.match('^[6-9][0-9]*$'))this.value='';">  
      </div>  
      
      <div class="mb-1">
        <label for="boarding" class="form-label">Address: Boarding</label>
        <input type="text" class="form-control" id="boarding" name="boarding" required>
      </div>  

      <div class="mb-1">
        <label for="destination" class="form-label">Destination</label>
        <input type="text" class="form-control" id="destination" name="destination" required>
      </div> 

      <div class="mb-1">
        <label for="totalIndividuals" class="form-label">Number of Seats</label>
        <input type="text" class="form-control" id="totalPeople" name="totalPeople" required>
      </div> 

      <div class="text-center">
        <button type="submit" class="btn btn-primary mt-3">Send Request</button>
      </div>
    </form>
  </div>
</div>
<div class ="text-center mt-3">
<a href="<?php echo base_url(). 'index.php/users/customer/CDashboardCont/completed';?>">
  <button class='btn btn-success mb-2'>Completeds</button>
</a>
</div>


<hr>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col">
          <h1 class="m-0 text-center">Pending Rides</h1>
        </div>
      </div>
    </div>
  </div>
</div>

<hr>

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
          <th scope="col">Requested On</th>
          <th scope="col">Accepted On</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $slno = 0;
        foreach ($status as $stat){
          $slno = $slno + 1;
          $statslno = $stat->slno;
          $invoice = site_url("users/customer/CDashboardCont/seeInvoice/$statslno") ;

          echo "<tr>
                  <th scope='row'>". $slno . "</th>
                  <td>". $stat->name . "</td>
                  <td>". $stat->mobile . "</td>
                  <td>". $stat->boarding . "</td>
                  <td>". $stat->destination . "</td>
                  <td>". $stat->status . "</td>
                  <td>". $stat->time_stamp . "</td>
                  <td>". $stat->acceptedOn . "</td>
                  </tr>";
                } 
                
                ?>
      <!-- <td>
        <a href='$invoice'><button class='invoice btn btn-info btn-sm'>Invoice</button></a>
      </td> -->
      </tbody>
    </table>
  </div>
  <!-- /.content-wrapper -->
</div>

<footer class="main-footer text-center mt-5">
    <!-- Default to the left -->
    <strong>Copyright &copy; 2023 bookro.tdc3030.com</strong>
    All rights reserved.
</footer>

<!-- the cdn of jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script> -->
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>
<!-- 
onsubmit="submitForm()"
<script>
  function scrollToDataTable() {
    const dataTable = document.getElementById("myTable");
    dataTable.scrollIntoView({ behavior: "smooth" });
  }
</script>

<script>
  function submitForm() {
    scrollToDataTable();
    setTimeout(function() {
      location.reload();
    }, 2000);
  }
</script> -->



</body>
</html>


