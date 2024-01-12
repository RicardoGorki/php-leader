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

function updateUserAction($conn, $id, $name, $email, $phone)
{
	$updateUserDb = updateUserDb($conn, $id, $name, $email, $phone);
	$message = $updateUserDb == 1 ? 'success-update' : 'error-update';
	return header("Location: ./index.php?message=$message");
}

function deleteUserAction($conn, $id)
{
	$deleteUserDb = deleteUserDb($conn, $id);
	$message = $deleteUserDb == 1 ? 'success-remove' : 'error-remove';
	return header("Location: ./list-users.php?message=$message");
}
