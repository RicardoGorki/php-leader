<?php

$servername = "localhost";
$database = "leader";
$username = "leader";
$password = "root";

$conn = new mysqli($servername, $username, $password, $database);

if (!$conn) {
die("Connection failed: " . mysqli_error($conn));
}
echo "Connected successfully";

mysqli_close($conn);

?>
