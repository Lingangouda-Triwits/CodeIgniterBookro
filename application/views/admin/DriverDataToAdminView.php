<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Bookro | Admin</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url()?>public/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>public/admin/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- CDN of datatables -->
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

  <link rel="shortcut icon" href="<?php echo base_url()?>images/favicon1.ico" type="image/x-icon">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">Welcome,<strong> Admin</strong></a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="<?php echo base_url().'index.php/admin/LoginCont/logout/';?>" class="dropdown-item">LogOut</a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <div style="display: flex; justify-content: center;">
    <?php
    if (!empty($this->session->flashdata('driver'))) {
        echo "
        <div class='alert alert-warning alert-dismissible fade show' role='alert''>
            <strong>".$this->session->flashdata('driver')."</strong>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>";
    }
    ?>
</div>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link bg-white">
      <!-- <img src="<?php echo base_url()?>public/admin/" alt="Bookro" class="brand-image img-circle elevation-3"
           style="opacity: .8"> -->
      <span class="brand-text ml-3"><strong>Bookro</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="<?php echo base_url().'index.php/admin/DashbController/index'; ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo base_url().'index.php/admin/DashbController/data'; ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                    <p>Contacts</p>
                </a>
            </li>
            <li class="nav-item has-treeview">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                <p>User Details<i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo base_url().'index.php/admin/DashbController/customerToAdmin';?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Customers Info</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url().'index.php/admin/DashbController/driverToAdmin';?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Drivers Info</p>
                        </a>
                    </li>
                </ul>
            </li>
            
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                <p>Rides<i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo base_url().'index.php/admin/DashbController/pendingsToAdmin';?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Pending Rides</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url().'index.php/admin/DashbController/ongoingsToAdmin';?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Ongoing Rides</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url().'index.php/admin/DashbController/completedRides'; ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Completed Rides</p>
                        </a>
                    </li>
                </ul>
            </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  



  <!-- Edit Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit this Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>

        <form action="<?php echo base_url().'index.php/admin/DashbController/updateDriver';?>" method="POST">
          <div class="modal-body">
            <input type="hidden" name="slnoEdit" id="slnoEdit">
            <div class="form-group">
              <label for="title">FullName</label>
              <input type="text" class="form-control" id="nameEdit" name="nameEdit" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
              <label for="desc">Email</label>
              <input type="text" class="form-control" id="emailEdit" name="emailEdit" aria-describedby="emailHelp">
            </div> 

            <div class="form-group">
              <label for="desc">Mobile</label>
              <input type="text" class="form-control" id="mobileEdit" name="mobileEdit" aria-describedby="emailHelp">
            </div> 

            <div class="form-group">
              <label for="desc">City</label>
              <input type="text" class="form-control" id="cityEdit" name="cityEdit" aria-describedby="emailHelp">
            </div>  
        </div>
          <div class="modal-footer d-block mr-auto">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Drivers Data</h1>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="container">
            <table class="table" id="myTable">
            <thead>
                <tr>
                <th scope="col">S.No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile Num</th>
                <th scope="col">City</th>
                <th scope="col">Car Name</th>
                <th scope="col">Car Num</th>
                <th scope="col">License Num</th>
                <th scope="col">RC Card</th>
                <th scope="col">Aadhar Num</th>
                <th scope="col">Registered_On</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php 
              $slno = 0;
              foreach ($drivers as $driver) {
                $slno = $slno + 1;
                $driverslno = $driver->slno;
                $deleteUrl = site_url("admin/DashbController/deleteDriver/$driverslno");

                echo "<tr>
                        <th scope='row'>". $slno . "</th>
                        <td>". $driver->name . "</td>
                        <td>". $driver->email . "</td>
                        <td>". $driver->mobile . "</td>
                        <td>". $driver->city . "</td>
                        <td>". $driver->carName . "</td>
                        <td>". $driver->carNum . "</td>
                        <td>". $driver->licenseNum . "</td>
                        <td>". $driver->rcCard . "</td>
                        <td>". $driver->aadharNum . "</td>
                        <td>". $driver->time_stamp . "</td>
                        <td>
                          <button class='edit btn btn-sm btn-primary' data-toggle='modal' data-target='#editModal'>Edit</button>
                          <a href='$deleteUrl'>
                            <button class=' btn btn-sm btn-danger' data-email='$driverslno'>Delete</button>
                          </a>
                        </td>
                      </tr>";
              }
            ?>

            </tbody>
            </table>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->



  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- Default to the left -->
    <strong>Copyright &copy; 2023 Bookro.com.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url()?>public/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>public/admin/dist/js/adminlte.min.js"></script>

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
        edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
      element.addEventListener("click", (e) => {
        tr = e.target.parentNode.parentNode;
        name = tr.getElementsByTagName("td")[0].innerText;
        email = tr.getElementsByTagName("td")[1].innerText;
        mobile = tr.getElementsByTagName("td")[2].innerText;
        city = tr.getElementsByTagName("td")[3].innerText;
        nameEdit.value = name;
        emailEdit.value = email;
        mobileEdit.value = mobile;
        cityEdit.value = city;
        console.log(name,email,mobile,city)
        // slnoEdit.value = e.target.id;
        // $('#editModal').modal('toggle');
      })
    })
</script>



</body>
</html>


