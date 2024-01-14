<?php

require_once 'src/database/dbconnect.php';
require_once "src/database/database.php";
require_once 'src/entities/User.php';


$page = 1;

if (isset($_GET['page']))
	$page = filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT);
if (!$page)
	$page = 1;

$limit = 10;
$initial_page = ($page * $limit) - $limit;

$users = readLimitedUserAction($conn, $initial_page, $limit);
$totalUsers = readCountAllUserAction($conn);
$intTotalUsers = (int)($totalUsers["COUNT(name)"]);
if ($intTotalUsers)
	$pages = ceil($intTotalUsers / $limit);
?>
<link rel="stylesheet" href="src/styles/styles-list-users.css">
<div class="container">
	<?php require_once 'src/components/header.php';
	require_once 'src/components/footer.php';
	?>
	<table class="table-users">
		<tr>
			<th>Nome</th>
			<th>Sobrenome</th>
			<th>Email</th>
			<th>Telefone</th>
			<th>Data de Nascimento</th>

		</tr>
		<?php foreach ($users as $row) : ?>
			<tr>
				<td class="user-name"><?= htmlspecialchars($row['name']) ?></td>
				<td class="user-lastName"><?= htmlspecialchars($row['last_name']) ?></td>
				<td class="user-email"><?= htmlspecialchars($row['email']) ?></td>
				<td class="user-phone"><?= htmlspecialchars($row['phone_numbers']) ?></td>
				<td class="user-birthDay"><?= date("d-m-Y", strtotime(htmlspecialchars($row['birth_day']))) ?></td>
				<td class="tdbtn">
					<a class="btn btn-primary" href="./update-users.php?id=<?= $row['id'] ?>">Editar</a>
				</td>
				<td class="tdbtn">
					<a class="btn btn-danger" href="./delete-users.php?id=<?= $row['id'] ?>">Deletar</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
	<div class="page-container">
	<a class="btn btn-primary btn-page" href="?page=1">Primeira</a>
	<?php if($page>1): ?>
		<a class="btn btn-primary btn-page" href="?page=<?= $page - 1 ?>"> << </a>
	<?php endif; ?>
	<?="<p class='btn-page page-p'>".$page."</p>" ?>
	<?php if($page<$pages): ?>
		<a class="btn btn-primary btn-page" href="?page=<?= $page + 1 ?>"> >> </a>
	<?php endif; ?>
	<a class="btn btn-primary btn-page" href="?page=<?= $pages ?>">Última</a>
	<div>
</div>
