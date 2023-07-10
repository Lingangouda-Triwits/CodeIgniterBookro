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


<!-- Review Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Review</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'index.php/users/customer/CDashboardCont/sendReviews';?>" method="POST">
        
          <input type="hidden" name="nameEdit" id="nameEdit">
          <input type="hidden" name="pickupEdit" id="pickupEdit">
          <input type="hidden" name="dropEdit" id="dropEdit">
          <input type="hidden" name="distanceEdit" id="distanceEdit">
          <input type="hidden" name="totalPeopleEdit" id="totalPeopleEdit">
          <input type="hidden" name="totalFareEdit" id="totalFareEdit">
          
          <div class="mb-3">
            <label for="title" class="form-label">Rating (out of 5)</label>
            <input type="text" class="form-control" id="rating" name="rating" pattern="[1-5]" required>
            <small class="form-text text-muted">Please enter a number between 1 and 5.</small>
          </div>


          <div class="mb-3">
            <label for="title" class="form-label">The Things You Loved</label>
            <input type="text" class="form-control" id="things" name="things">
          </div>

          <div class="mb-3">
            <label for="title" class="form-label">Recommendations</label>
            <input type="text" class="form-control" id="recs" name="recs">
          </div>

          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Send Review</button>
          </div>
        </form>
    </div>
  </div>
</div>



<div class="container mt-5">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col">
          <h1 class="m-0">Completed Rides</h1>
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
          <th scope="col">Boarding</th>
          <th scope="col">Destination</th>
          <th scope="col">Distance(k/m)</th>
          <th scope="col">Seats Booked</th>
          <th scope="col">Total Fare(rs)</th>
          <th scope="col">Status</th>
          <th scope="col">Time</th>
          <th scope="col">qr</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      <?php
$slno = 0;
if (!empty($completeds)) {
    foreach ($completeds as $completed) {
        $slno = $slno + 1;
        $start = 1;
        $sno = $completed->slno;
        $showQR = site_url("users/customer/CDashboardCont/showQR/$sno");

        echo "<tr>
                <th scope='row'>" . $slno . "</th>
                <td>" . $completed->name . "</td>
                <td>" . $completed->pickup . "</td>
                <td>" . $completed->drop . "</td>
                <td>" . $completed->distance . "</td>
                <td>" . $completed->totalPeople . "</td>
                <td>" . $completed->total_fare . "</td>
                <td>" . $completed->status . "</td>
                <td>" . $completed->time_stamp . "</td>
                <td>";
        
        if (!empty($completed->qrPhoto)) {
            echo "<a href='" . base_url('qrFolder/' . $completed->qrPhoto) . "' target='_blank'>
              <button type='button' class='btn btn-sm btn-secondary'>View QR</button>
            </a>";
        } else {
            echo "-";
        }
        
        echo "</td>
                <td>
                  <button type='button' class='review btn btn-sm btn-info' data-bs-toggle='modal' data-bs-target='#exampleModal'>review</button>
                </td>
            </tr>";
    }
}
?>


      </tbody>
    </table>
  </div>
  <!-- /.content-wrapper -->
</div>


<footer class="main-footer text-center mt-5">
    <strong>Copyright &copy; 2023 bookro.tdc3030.com</strong>
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

<script>
  document.getElementById("rating").addEventListener("input", function() {
    var input = this.value;
    var numericInput = input.replace(/[^0-9]/g, ''); // remove non-numeric characters
    if (numericInput < 1 || numericInput > 5) {
      numericInput = '';
    }
    this.value = numericInput;
  });
</script>


<!-- to send the data to the modal -->
<script>
    reviews = document.getElementsByClassName('review');
    Array.from(reviews).forEach((element) => {
      element.addEventListener("click", (e) => {
        tr = e.target.parentNode.parentNode;
        name = tr.getElementsByTagName("td")[0].innerText;
        pickup = tr.getElementsByTagName("td")[1].innerText;
        drop = tr.getElementsByTagName("td")[2].innerText;
        distance = tr.getElementsByTagName("td")[3].innerText;
        people = tr.getElementsByTagName("td")[4].innerText;
        totalFare = tr.getElementsByTagName("td")[5].innerText;
        nameEdit.value = name;
        pickupEdit.value = pickup;
        dropEdit.value = drop;
        distanceEdit.value = distance;
        totalPeopleEdit.value = people;
        totalFareEdit.value = totalFare;

      })
    })
  </script>



</body>
</html>

