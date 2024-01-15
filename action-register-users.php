<?php
require_once("src/entities/User.php");

$name = $_POST['name'];
$lastName = $_POST['lastName'];
$email =  $_POST['email'];
$phone =  $_POST['phone'];
$birthDay = $_POST['birthDay'];

$user = new User($name, $lastName, $email, $phone, $birthDay);

$newDate = strtotime($user->getBirthDay());
$formatedBirthDay = date('Y-m-d H:i:s', $newDate);

if (isset($user)) {
	$user->createUser($user->getId(), $user->getName(), $user->getLastName(), $user->getEmail(), $user->getPhone(), $formatedBirthDay);
	$message = $user == 1 ? 'success-created' : 'error-created';
	return header("Location: ./register-users.php?message=$message");
}
?>
