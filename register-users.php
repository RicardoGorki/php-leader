<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="src/styles/styles-register.css">
</head>
<body>
	<div>
		<?php require_once 'src/components/header.php';
		require_once 'src/components/footer.php';
		?>
		<?php if (isset($_GET["message"])) {
			$message = $_GET["message"];
			if ($message == "success-created") {
				echo "<div id='popup' class='popup popup-success'>" . "<span>" . "Usuário cadastrado com sucesso!" . "</span>"  . "</div>";
			} else if ($message == "error-created") {
				echo "<div class='popup popup-failed>" . "<span>" . "Falha ao cadastrar usuário" . "</span>"  . "</div>";
			}
		}
		?>
	</div>
	<section class="container">
		<form action="action-register-users.php" method="POST">
			<label for="name">Nome:</label>
			<input name="name" id="name" type="text" placeholder="Ex: José" minlength="3" maxlength="20" required>

			<label for="lastName">Sobrenome:</label>
			<input name="lastName" id="lastName" type="text" placeholder="Ex: Manoel" minlength="3" maxlength="20" required>

			<label for="email">Email:</label>
			<input name="email" id="email" type="email" placeholder="Ex: johndoe@gmail.com" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$"  minlength="6" maxlength="30" required>

			<label for="phone">Telefone:</label>
			<input name="phone" id="phone" type="tel" placeholder="Ex: 21999998888" pattern="[0-9]+" minlength="10" maxlength="13" required>

			<label for="birthDay">Data de Nascimento:</label>
			<input name="birthDay" id="birthDay" type="date" required>

			<input type="submit" value="Cadastrar">
		</form>
	</section>
</body>
</html>
