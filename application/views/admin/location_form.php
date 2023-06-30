<!DOCTYPE html>
<html>
<head>
    <title>User Location</title>
</head>
<body onload = "getLocation();">
    <form class = 'myForm' action="" method="post" autocomplete="off">
        <label for="">Name</label>
        <input type="text" name='name' Required>
        <label for="">Email</label>
        <input type="email">
        <input type="text" name="latitude">
        <input type="text" name="longitude">
        <button type="submit" name="submit">submit</button>
    </form>

    <script type="text/javascript">
        function getLocation(){
            if(navigator.geolocation){
                navigator.geolocation.getCurrentPosition(showPosition);
            }
        }
            function showPosition(position){
                document.querySelector('.myForm input [name="latitude"]').value = position.coords.latitude;
                document.querySelector('.myForm input [name="longitude"]').value = position.coords.longitude;
            }
            function showError(error){
                switch(error.code){
                    case error.PERMISSION_DENIED:
                        alert("you must allow the request for GeoLocation to fill out the form ");
                        location.reload();
                        break;
                }
            }
        
    </script>
</body>
</html>