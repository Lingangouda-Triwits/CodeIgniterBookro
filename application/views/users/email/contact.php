
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
                <input type="email" id="to" name="email" placeholder="Receiver Email">
                <br><br>
                <input type="text" id="subject" name="name" placeholder="Name">
                <br><br>
                <input type="submit" value="Send Email" />
            </form>
        </div>
    </body>
</html>
