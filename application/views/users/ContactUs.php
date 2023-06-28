<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Simple Contact Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="shortcut icon" href="<?php echo base_url()?>images/favicon1.ico" type="image/x-icon">

<style>
* {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}
body {
color: #e3f2fd;
background-color: #1f2833;
font-family: "Open Sans", sans-serif;
}
/* .contact-form {
padding: 50px;
margin: 30px 0;
} */
.contact-form h1 {
text-transform: uppercase;
margin: 0 0 15px;
}
.contact-form .form-control, .contact-form .btn {
min-height: 38px;
border-radius: 2px;
}
.contact-form .btn-primary {
min-width: 150px;
background: #299be4;
border: none;
}
.contact-form .btn-primary:hover {
background: #1c8cd7;
}
.contact-form label {
opacity: 0.9;
}
.contact-form textarea {
resize: vertical;
}
.hint-text {
font-size: 15px;
padding:25px 0 15px 0;
opacity: 0.8;
}
.bs-example {
margin: 20px;
}
.nav-item {
padding: 0px 15px;
}
.form-control{
    background-color:#e3f2fd;
}

</style>
</head>
<body>
<!-- this is navabar -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url().'index.php/users/HomePageCont/index';?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url().'index.php/users/HomePageCont/aboutUs'; ?>">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?php echo base_url().'index.php/users/ContactUs';?>">Contact Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">Register</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
              <a class="dropdown-item" href="<?php echo base_url().'index.php/users/customer/CRegContro/show';?>">Customer</a>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <li>
              <a class="dropdown-item" href="<?php echo base_url().'index.php/users/driver/DRegContro/insertData';?>">Driver</a>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">Login</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
              <a class="dropdown-item" href="<?php echo base_url().'index.php/users/customer/CLogContro';?>">Customer</a>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <li>
              <a class="dropdown-item" href="<?php echo base_url().'index.php/users/driver/DLogContro';?>">Driver</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>



<div class="container-xl">
<div class="row">
<div class="col-md-8 mx-auto">
<div class="contact-form">
<p class="hint-text">We'd love to hear from you, please drop us a line if you've any query.</p>
<form action="<?php echo base_url().'index.php/users/ContactUs/contact';?>" method="post">
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label for="inputFirstName">First Name</label>
<input type="text" name="fname" class="form-control" id="inputFirstName" required>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label for="inputLastName">Last Name</label>
<input type="text" name="lname" class="form-control" id="inputLastName" required>
</div>
</div>
</div>
<div class="form-group">
<label for="inputEmail">Email Address</label>
<input type="email" name="email" class="form-control" id="inputEmail" required>
</div>
<div class="form-group">
<label for="inputMessage">Message</label>
<textarea class="form-control" name="message" id="inputMessage" rows="5" required></textarea>
</div>
<input type="submit" class="btn btn-primary" value="Submit">
</form>
</div>
</div>
</div>
</div>
</body>
</html> 