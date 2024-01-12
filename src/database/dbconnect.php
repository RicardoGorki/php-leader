<?php

$servername = "localhost";
$database = "leader";
$username = "leader";
$password = "root";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
	$conn =  mysqli_connect($servername, $username, $password, $database);

} catch (\Throwable $th) {
	throw $th;
}


?>
