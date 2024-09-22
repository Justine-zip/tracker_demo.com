<?php

$conn = mysqli_connect('localhost', 'Light', 'TrackerTest', 'tracker');

if (!$conn) {
    die("Connection Error: " . mysqli_connect_error());
} else {
    echo "Connection Successful";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        #map {
            height: 100vh;
            width: 100vw;
        }
    </style>
</head>
<body>
    <div id="map"></div>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="code.js"></script>
</body>
</html>
<?php
// Optional: Any additional PHP code can go here
?>
