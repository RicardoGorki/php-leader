<?php

require_once "src/entities/User.php";

$servername = "localhost";
$database = "leader";
$username = "leader";
$password = "root";

$conn =  mysqli_connect($servername, $username, $password, $database);

$users = [];

	$sql = "SELECT * FROM users";
	$result = mysqli_query($conn, $sql);

	$result_check = mysqli_num_rows($result);
	echo ($result_check);
	if ($result_check > 30) {
		return false;
	} else {
	for ($i = 0; $i < 50; $i++) {
		$user = new User("Financeiro" . $i, "Leader" . $i, "leader" . $i . "@leader.com", "21999988" . $i, "2000-01-01 00:00:00");
		$user->createUser($user->getId(), $user->getName(), $user->getLastName(), $user->getEmail(), $user->getPhone(), $user->getBirthDay());
		$user->__destruct();
	}
	mysqli_close($conn);
}
