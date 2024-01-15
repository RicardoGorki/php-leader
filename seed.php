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

if ($result_check > 30) {
	return header("Location: ./list-users.php?");
} else {
	for ($i = 0; $i < 50; $i++) {
		$user = new User("Leader" . $i, "Empresarial" . $i, "leader" . $i . "@leader.com", "21999998888", "2015-08-27 00:00:00");
		$user->createUser($user->getId(), $user->getName(), $user->getLastName(), $user->getEmail(), $user->getPhone(), $user->getBirthDay());
		$user->__destruct();
	}
	mysqli_close($conn);
}
return header("Location: ./list-users.php?");
?>
