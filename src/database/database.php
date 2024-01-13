<?php

function findUserDb($conn, $id)
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

function readUserDb($conn)
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

function updateUserDb($conn, $id, $name, $lastName, $email, $phone, $birthDay)
{
	if ($id && $name && $email && $phone) {
		$sql = "UPDATE users SET name = ?, email = ?, phone = ? WHERE id = ?";
		$stmt = mysqli_stmt_init($conn);

		if (!mysqli_stmt_prepare($stmt, $sql))
			exit('SQL error');

		mysqli_stmt_bind_param($stmt, 'ssssss', $name, $lastName, $email, $phone, $birthDay, $id);
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
