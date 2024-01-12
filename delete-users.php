<?php
			require_once ("src/database/dbconnect.php");
			require_once ("src/database/database.php");
			require_once ("src/entities/User.php");

			if(isset($_POST['id']))
				deleteUserAction($conn, $_POST['id']);

		?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="src/styles/styles.css">
</head>
<body>
		<?php include 'src/components/header.php';
			include 'src/components/footer.php';
		?>
	<section>

	<div class="container">
    <div class="row">
        <a href="../../../index.php"><h1>Users - Delete</h1></a>
        <a class="btn btn-success text-white" href="list-users.php">Prev</a>
    </div>
    <div class="row flex-center">
        <div class="form-div">
            <form class="form" action="delete-users.php" method="POST">
                <label>Do you really want to remove the user?</label>
                <input type="hidden" name="id" value="<?=$_GET['id']?>" required/>

                <button class="btn btn-success text-white" type="submit">Yes</button>
            </form>
        </div>
    </div>
</div>
	</section>
</body>

</html>
