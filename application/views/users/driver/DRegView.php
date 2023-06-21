<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Driver Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>public/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url()?>public/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>public/admin/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="shortcut icon" href="<?php echo base_url()?>images/favicon1.ico" type="image/x-icon">
</head>

</style>
<body class="hold-transition register-page" style="background-color: #e3f2fd;">



<div class="register-box" >
  <div class="register-logo" >
    <p><strong>Driver Registration</strong></p>
  </div>

  <div class="card" >
    <div class="card-body register-card-body" style="background-color: #1f2833;">

    <!-- Display the message -->
    <?php if (!empty($message)) : ?>
          <div class="alert alert-info">
            <?php echo $message; ?>
          </div>
        <?php endif; ?>

      <form action="<?php echo base_url()?>index.php/users/driver/DRegContro/insertData" method="post" enctype="multipart/form-data">

        <div class="input-group mb-3">
          <input type="text" class="form-control" name="name" placeholder="Full name" required style="background-color: #e3f2fd;">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="invalid email format" required style="background-color: #e3f2fd;">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="phone" class="form-control" name="mobile" placeholder="Mobile Number" maxlength="10" pattern="^[6-9][0-9]*$" required oninput="if(!this.value.match('^[6-9][0-9]*$'))this.value='';" style="background-color: #e3f2fd;">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" id="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="must contain atleast one number and one uppercase and lowercase letter , and at least 8 or more characters" required style="background-color: #e3f2fd;">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-eye" id="togglePassword"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Retype password" required style="background-color: #e3f2fd;">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-eye" id="togglePassword1"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" name="city" placeholder="City" required style="background-color: #e3f2fd;">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-city"></span>
            </div>
          </div>
        </div>

        <label for="">Upload Profile Picture</label>
        <div class="input-group mb-3">
          <input type="file" class="form-control" name="photo" accept=".png, .jpg, .jpeg" required style="background-color: #e3f2fd;">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-image"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="submit" class="btn btn-block" style="background-color: #e3f2fd;">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="<?php echo base_url().'index.php/users/driver/DLogContro';?>" class="text-center">Already have an account!</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="<?php echo base_url()?>public/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>public/admin/dist/js/adminlte.min.js"></script>

<script>
  // to hide and unhide the passwords
  var password = document.getElementById("password");
  var confirmPassword = document.getElementById("confirm_password");
  const togglePassword = document.querySelector('#togglePassword');
  togglePassword.addEventListener('click', function(e){
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    this.classList.toggle('fa-eye-slash');
  
  });

  const togglePassword1 = document.querySelector('#togglePassword1');
  togglePassword1.addEventListener('click', function(e){
    const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
    confirmPassword.setAttribute('type', type);
    this.classList.toggle('fa-eye-slash');
  });


  // password validation
  function validatePassword(){
    if(password.value !== confirm_password.value){
      confirm_password.setCustomValidity("passwords don't match");
    }else{
      confirm_password.setCustomValidity("");
    }
  }
  password.onchange = validatePassword;
  confirm_password.onkeyup = validatePassword;


</script>

</body>
</html>
