<?php

require_once 'src/database/dbconnect.php';
require_once "src/database/database.php";
require_once 'src/entities/User.php';

$users = readUserAction($conn);

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
</div>
