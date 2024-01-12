<?php
require("src/entities/User.php");

$name = $_POST['name'];
$lastName = $_POST['lastName'];
$email =  $_POST['email'];
$phone =  $_POST['phone'];
$birthDay = $_POST['birthDay'];

$user = new User($name, $lastName, $email, $phone, $birthDay);

$newDate = strtotime($user->getBirthDay());
echo $formatedBirthDay = date('Y-m-d H:i:s', $newDate);

$servername = "localhost";
$database = "leader";
$username = "leader";
$password = "root";

$conn = new mysqli($servername, $username, $password, $database);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}


if (isset($name)) {
	echo "Connected successfully";
	$sql = "INSERT INTO users(id, name, last_name, email, phone_numbers, birth_day) VALUES('$user->getId()', '$user->$getName', '$user->$getLastName', '$user->$getEmail', '$user->$getPhone', '$formatedBirthDay')";
}

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
}
mysqli_close($conn);
?>
