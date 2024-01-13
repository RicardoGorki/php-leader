<?php

require_once "src/entities/User.php";

function findUserAction($conn, $id)
{
	return findUserDb($conn, $id);
}

function readUserAction($conn)
{
	return readUserDb($conn);
}

function updateUserAction($conn, $id, $name, $lastName, $email, $phone, $birthDay)
{
	$updateUserDb = updateUserDb($conn, $id, $name, $lastName, $email, $phone, $birthDay);
	$message = $updateUserDb == 1 ? 'success-update' : 'error-update';
	return header("Location: ./list-users.php?message=$message");
}

function deleteUserAction($conn, $id)
{
	$deleteUserDb = deleteUserDb($conn, $id);
	$message = $deleteUserDb == 1 ? 'success-remove' : 'error-remove';
	return header("Location: ./list-users.php?message=$message");
}
