<?php
$servername = "localhost";
$username = "Light";
$password = "TrackerTest";
$dbname = "tracker";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection Successful<br>";
}

?>
