<?php

require_once 'src/database/database.php';
require_once 'src/services/users.php';
require_once 'src/components/header.php';
require_once 'src/components/footer.php';

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
				<input type="text" name="name" value="<?= htmlspecialchars($user['name']) ?>" minlength="3" maxlength="20" required />
				<label>Sobrenome:</label>
				<input type="text" name="lastName" value="<?= htmlspecialchars($user['last_name']) ?>" minlength="3" maxlength="20" required />
				<label>Email:</label>
				<input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$"  minlength="6" maxlength="30" required />
				<label>Telefone:</label>
				<input type="text" name="phone" value="<?= htmlspecialchars($user['phone_numbers']) ?>" pattern="[0-9]+" minlength="10" maxlength="13" required />
				<label>Data de nascimento:</label>
				<input type="text" name="birthDay" value="<?= date("d-m-Y", strtotime($user['birth_day'])) ?>" pattern="-d{1,2}\-\d{2}\-\d{4}" minlength="10" maxlength="10" required />
				<div class="btn-container">
					<a class="prev-btn" href="list-users.php">Voltar</a>
					<input id="submit-update" type="submit" value="Salvar" />
				</div>
			</form>
		</div>
	</div>
</body>
</html>
