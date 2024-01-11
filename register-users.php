<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="src/styles/styles_register.css">
</head>
<body>
	<div>
		<?php include 'src/components/menu.php';?>
	</div>
	<section>
		<div>
		<form action="action.php" method="post">
    <label for="name">Nome:</label>
    <input name="name" id="name" type="text">
    <label for="lastName">Sobrenome:</label>
    <input name="lastName" id="lastName" type="text">
    <label for="email">Email:</label>
    <input name="email" id="email" type="email">
    <label for="phone">Telefone:</label>
    <input name="phone" id="phone" type="tel">
    <label for="birthDay">Data de Nascimento:</label>
    <input name="birthDay" id="birthDay" type="date" value="2000-01-30">

    <button type="submit">Cadastrar</button>
</form>
		</div>
	</section>
</body>

</html>
