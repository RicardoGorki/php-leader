<?php
require_once("src/database/dbconnect.php");
require_once("src/database/database.php");
require_once("src/entities/User.php");
require_once 'src/components/header.php';
require_once 'src/components/footer.php';

if (isset($_POST['id']))
	deleteUserAction($conn, $_POST['id']);

?>
<link rel="stylesheet" href="src/styles/styles.css">
<div class="form-delete">
	<form action="delete-users.php" method="POST">
		<label>Deseja remover este usuário?</label>
		<div class="div-delete">
			<a class="prev-btn" href="list-users.php">Voltar</a>
			<input type="hidden" name="id" value="<?= $_GET['id'] ?>" required />
			<button class="btn-delete" type="submit">Deletar</button>
			<div>
	</form>
</div>
