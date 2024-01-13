<?php

require_once 'src/database/database.php';
require_once 'src/services/users.php';
include 'src/components/header.php';
include 'src/components/footer.php';

$user = findUserAction($conn, $_GET['id']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="src/styles/styles-register.css">
</head>
<body>
<div class="container">
	<div class="form-div">
		<form class="form" action="action-update-users.php" method="POST">
			<input type="hidden" name="id" value="<?= $user['id'] ?>" required />
			<label>Nome:</label>
			<input type="text" name="name" value="<?= htmlspecialchars($user['name']) ?>" required />
			<label>Sobrenome:</label>
			<input type="text" name="lastName" value="<?= htmlspecialchars($user['last_name']) ?>" required />
			<label>Email:</label>
			<input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required />
			<label>Telefone:</label>
			<input type="text" name="phone" value="<?= htmlspecialchars($user['phone_numbers']) ?>" required />
			<label>Data de nascimento:</label>
			<input type="text" name="birthDay" value="<?= date("d-m-Y", strtotime($user['birth_day'])) ?>" required />
			<div class="btn-container">
			<a class="prev-btn" href="list-users.php">Voltar</a>
			<input id="submit-update" type="submit" value="Salvar" />
			</div>
		</form>
	</div>
</div>
</body>
</html>
