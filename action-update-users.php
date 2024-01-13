<?php

require_once 'src/database/database.php';
require_once 'src/services/users.php';
require_once 'src/components/header.php';
require_once 'src/components/footer.php';

if (isset($_POST["id"]) && isset($_POST["name"]) && isset($_POST["lastName"])
		&& isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["birthDay"])) {
		updateUserAction($conn, $_POST["id"], $_POST["name"], $_POST["lastName"], $_POST["email"], $_POST["phone"], $_POST["birthDay"]);
}
?>
