<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Sent Email Using SMTP</h2><br> -->
<!-- Success Flash message available here .............. -->
<?php 
// if($error = $this->session->flashdata('msg')){ 
    ?>
    <!-- <p style="color: green;"><strong>Success!</strong> -->
     <?php 
    //  echo  $error;
      ?>
      <!-- <p> -->
<?php
//  }
  ?>
<!-- End Flash message available here .............. -->
<!-- <form action=" -->
<?php 
// echo base_url().'index.php/users/email_send/send';
?>
<!-- " method="post"> -->
    <!-- <input type="email" name="from" class="form-control" placeholder="Enter Email" required><br>
    <textarea name="message" class="form-control" placeholder="Enter message here" required></textarea><br>
    <button type="submit" class="btn btn-primary">Send Message</button>
</form>
</body>
</html> -->


<!DOCTYPE html>
<html>
    <head>
        <title>CodeIgniter Send Email</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <h3>Use the form below to send email</h3>
            <form method="post" action="<?=base_url().'index.php/users/emailcontroller/send';?>" enctype="multipart/form-data">
                <input type="email" id="to" name="to" placeholder="Receiver Email">
                <br><br>
                <input type="text" id="subject" name="subject" placeholder="Subject">
                <br><br>
                <textarea rows="6" id="message" name="message" placeholder="Type your message here"></textarea>
                <br><br>
                <input type="submit" value="Send Email" />
            </form>
        </div>
    </body>
</html>
