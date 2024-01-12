<?php
require ("src/entities/User.php");
require ("src/lib/myDb.php");

$name = $_POST['name'];
$lastName = $_POST['lastName'];
$email =  $_POST['email'];
$phone =  $_POST['phone'];
$birthDay = $_POST['birthDay'];

$user = new User($name, $lastName, $email, $phone, $birthDay);
/*
$sql = "INSERT INTO users (id, name, lastname, $email, $phone, $birthDay) VALUES (
	'$user->getId()', '$user->getName()', '$user->getLastName()', '$user->getEmail()', '$user->getPhone()', '$user->getBirthDay()')";
	 */

?>
