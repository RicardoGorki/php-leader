<?php

require_once "src/entities/User.php";

function findUserAction($conn, $id)
{
	return findUserByIdDb($conn, $id);
}

function readAllUserAction($conn)
{
	return readAllUserDb($conn);
}

function readCountAllUserAction($conn)
{
	return readCountAllUserDb($conn);
}

function readLimitedUserAction($conn, $initial_page, $limit)
{
	return readLimitedUserDb($conn, $initial_page, $limit);
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

function deleteAllUserAction($conn)
{
	$deleteAllUserDb = deleteAllUserDb($conn);
	$message = $deleteAllUserDb == 1 ? 'success-remove' : 'error-remove';
	return header("Location: ./list-users.php?message=$message");
}
