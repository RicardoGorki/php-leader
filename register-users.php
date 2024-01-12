<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="src/styles/styles-register.css">
</head>

<body>
	<div>
		<?php include 'src/components/menu.php'; ?>
	</div>
	<section class="container">
		<form action="action-register-users.php" method="POST">
			<label for="name">Nome:</label>
			<input name="name" id="name" type="text" placeholder="Ex: José" required>

			<label for="lastName">Sobrenome:</label>
			<input name="lastName" id="lastName" type="text" placeholder="Ex: Manoel" required>

			<label for="email">Email:</label>
			<input name="email" id="email" type="email" placeholder="Ex: johndoe@gmail.com" required>

			<label for="phone">Telefone:</label>
			<input name="phone" id="phone" type="tel" placeholder="Ex: 21999998888" required>

			<label for="birthDay">Data de Nascimento:</label>
			<input name="birthDay" id="birthDay" type="date" required>

			<input type="submit" value="Cadastrar">
		</form>
	</section>
</body>

</html>
