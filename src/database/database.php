<?php

function findUserByIdDb($conn, $id)
{
	$id = mysqli_real_escape_string($conn, $id);


	$sql = "SELECT * FROM users  WHERE id = ?";
	$stmt = mysqli_stmt_init($conn);

	if (!mysqli_stmt_prepare($stmt, $sql))
		exit('SQL error');

	mysqli_stmt_bind_param($stmt, 's', $id);
	mysqli_stmt_execute($stmt);

	$user = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));

	mysqli_close($conn);
	return $user;
}

function readAllUserDb($conn)
{
	$users = [];

	$sql = "SELECT * FROM users";
	$result = mysqli_query($conn, $sql);

	$result_check = mysqli_num_rows($result);

	if ($result_check > 0)
		$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

	mysqli_close($conn);
	return $users;
}

function readLimitedUserDb($conn, $initial_page, $limit)
{
	$users = [];

	$sql = "SELECT * FROM users ORDER BY name LIMIT $initial_page, $limit";
	$result = mysqli_query($conn, $sql);

	$result_check = mysqli_num_rows($result);

	if ($result_check > 0)
		$users = mysqli_fetch_all($result, MYSQLI_ASSOC);


	return $users;
}
function readCountAllUserDb($conn)
{
	$users = [];

	$sql = "SELECT COUNT(name) FROM users";
	$result = mysqli_query($conn, $sql);
	$result_check = mysqli_num_rows($result);
	if ($result_check > 0)
		$users = mysqli_fetch_array($result, MYSQLI_ASSOC);;
	mysqli_close($conn);
	return $users;
}
function updateUserDb($conn, $id, $name, $lastName, $email, $phone, $birthDay)
{
	if ($id && $name && $lastName && $email && $phone && $birthDay) {
		$sql = "UPDATE users SET name = ?, last_name = ?, email = ?, phone_numbers = ?, birth_day = ? WHERE id = ?";
		$stmt = mysqli_stmt_init($conn);

		if (!mysqli_stmt_prepare($stmt, $sql))
			exit('SQL error');

		$newDate = strtotime($birthDay);
		$formatedBirthDay = date('Y-m-d H:i:s', $newDate);
		mysqli_stmt_bind_param($stmt, 'ssssss', $name, $lastName, $email, $phone, $formatedBirthDay, $id);
		mysqli_stmt_execute($stmt);
		mysqli_close($conn);
		return true;
	}
}

function deleteUserDb($conn, $id)
{
	$id = mysqli_real_escape_string($conn, $id);

	if ($id) {
		$sql = "DELETE FROM users WHERE id = ?";
		$stmt = mysqli_stmt_init($conn);

		if (!mysqli_stmt_prepare($stmt, $sql))
			exit('SQL error');

		mysqli_stmt_bind_param($stmt, 's', $id);
		mysqli_stmt_execute($stmt);

		return true;
	}
}

function deleteAllUserDb($conn)
{
		$sql = "DELETE FROM users";
		$stmt = mysqli_stmt_init($conn);

		if (!mysqli_stmt_prepare($stmt, $sql))
			exit('SQL error');
		mysqli_stmt_execute($stmt);
		return true;
}
