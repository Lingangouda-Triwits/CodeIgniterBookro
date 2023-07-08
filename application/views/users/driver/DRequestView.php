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
                    <span class="text-white" style="font-size: 10px;">Update Profile</span>
                    <span class="text-white" style="font-size: 20px;">&rarr;</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" href="<?php echo base_url().'index.php/users/driver/DDashboardCont/updateProfileView';?>">
                        Welcome <?php $userArray = $this->session->userdata('driver'); echo $userArray['name'];?>
                    </a>
                </li>

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



<!-- Alert for Reject -->
<div style="display: flex; justify-content: center;">
<?php if (!empty($this->session->flashdata('rejected'))) : ?>
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong><?php echo $this->session->flashdata('rejected');?></strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php endif; ?>
</div>


<!-- Alert for Completed -->
<div style="display: flex; justify-content: center;">
<?php if (!empty($this->session->flashdata('completed'))) : ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong><?php echo $this->session->flashdata('completed');?></strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php endif; ?>
</div>


<!-- Completed Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Invoice</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'index.php/users/driver/DDashboardCont/invoice';?>" method="POST">
        
          <input type="hidden" name="slnoEdit" id="slnoEdit">
          <div class="mb-3">
            <label for="title" class="form-label">Name</label>
            <input type="text" class="form-control" id="nameEdit" name="nameEdit" readonly>
          </div>

          <div class="mb-3">
            <label for="title" class="form-label">PickUp</label>
            <input type="text" class="form-control" id="pickupEdit" name="pickupEdit" readonly>
          </div>

          <div class="mb-3">
            <label for="title" class="form-label">Drop</label>
            <input type="text" class="form-control" id="dropEdit" name="dropEdit" readonly>
          </div>

          <div class="mb-3">
            <label for="title" class="form-label">Distance in k/m</label>
            <input type="text" class="form-control" id="distance" name="distance" required>
          </div>

          <div class="mb-3">
            <label for="title" class="form-label">Total Fare</label>
            <input type="text" class="form-control" id="totalFare" name="totalFare" readonly>
          </div>

          <input type="hidden" name="totalPeople" id="totalPeople">

          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Send Invoice</button>
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
          <th scope="col">Number of Seats</th>
          <th scope="col">Status</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $slno = 0;
        foreach ($status as $stat){
          $slno = $slno + 1;
          $rejectslno = $stat->slno;
          $rejectUrl = site_url("users/driver/DDashboardCont/rejectRequest/$rejectslno");
          echo "<tr>
                  <th scope='row'>". $slno . "</th>
                  <td>". $stat->name . "</td>
                  <td>". $stat->mobile . "</td>
                  <td>". $stat->boarding . "</td>
                  <td>". $stat->destination . "</td>
                  <td>". $stat->totalPeople . "</td>
                  <td>". $stat->status . "</td>
                  <td>
                  
                  <button type='button' class='completed btn btn-sm btn-dark' data-bs-toggle='modal' data-bs-target='#exampleModal'>Completed</button>
                  <a href='$rejectUrl'><button class='btn btn-sm btn-danger'>Reject</button></a>
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
    <strong>Copyright &copy; 2023 Bookro.com</strong>
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

<!-- to send the data to the modal -->
<script>
    complete = document.getElementsByClassName('completed');
    Array.from(complete).forEach((element) => {
      element.addEventListener("click", (e) => {
        tr = e.target.parentNode.parentNode;
        name = tr.getElementsByTagName("td")[0].innerText;
        pickup = tr.getElementsByTagName("td")[2].innerText;
        drop = tr.getElementsByTagName("td")[3].innerText;
        people = tr.getElementsByTagName("td")[4].innerText;
        nameEdit.value = name;
        pickupEdit.value = pickup;
        dropEdit.value = drop;
        totalPeople.value = people;

      })
    })
  </script>

<script>
  // JavaScript code to update totalFare field based on distance field
  document.getElementById("distance").addEventListener("input", function() {
    var distance = parseFloat(this.value);
    var totalFare = distance ? distance * 15 : 0;
    document.getElementById("totalFare").value = totalFare;
  });
</script>


</body>
</html>

