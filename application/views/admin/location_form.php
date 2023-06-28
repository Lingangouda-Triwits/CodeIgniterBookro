<!DOCTYPE html>
<html>
<head>
    <title>User Location</title>
</head>
<body>
    <h1>User Location:</h1>
    <?php if ($location) : ?>
        <p>Country: <?= $location['country'] ?></p>
        <p>Region: <?= $location['region'] ?></p>
        <p>City: <?= $location['city'] ?></p>
        <p>Latitude: <?= $location['latitude'] ?></p>
        <p>Longitude: <?= $location['longitude'] ?></p>
    <?php else : ?>
        <p>Location not available.</p>
    <?php endif; ?>
</body>
</html>
