<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="src/styles/styles-list-users.css">
</head>

<body>
	<div>
		<?php include 'src/components/menu.php'; ?>
	</div>
	<section class="list-body">
		<?php

		$conn = new mysqli("localhost", "leader", "root", "leader");

		if (!$conn) {
			die("Connection failed: " . mysqli_error($conn));
		}
		$sql = $conn->query("SELECT * FROM users ORDER by name");
		while ($row = $sql->fetch_array()) {
			echo "<section class='container-list'>";

			echo "<label class='list-label'>" . "Nome: " . "</label>" . "<div class='list-item'>" .  $row['name'] . "</div>";

			echo "<label class='list-label'>" . "Sobrenome: " . "</label>" . "<div class='list-item'>" .  $row['last_name'] . "</div>";
			echo "<label class='list-label'>" . "Email: " . "</label>" . "<div class='list-item'>" .  $row['email'] . "</div>";
			echo "<label class='list-label'>" . "Tel: " . "</label>" . "<div class='list-item'>" .  $row['phone_numbers'] . "</div>";
			echo "<label class='list-label'>" . "Data de Nascimento: " . "</label>" . "<div class='list-item'>" . $row['birth_day'] . "</div>";
			echo "<a value='Deletar'>";
			echo $row['id'];
			if (isset($_GET['submitdelete'])) {
				$action_id = $row['id'];
				$del = $conn->query("DELETE FROM users WHERE id='$action_id'");
			}
			"</input>";
			"</form>";

			echo "</section>";

		}
		mysqli_close($conn);
		?>

	</section>
</body>

</html>
