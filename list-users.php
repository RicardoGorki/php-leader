<?php

require_once 'src/database/dbconnect.php';
require_once "src/database/database.php";
require_once 'src/entities/User.php';

$users = readUserAction($conn);

?>
<div class="container">
    <?php include 'src/components/header.php';
    include 'src/components/footer.php';
    ?>
    <table class="table-users">
        <tr>
            <th>NAME</th>
            <th>LASTNAME</th>
            <th>EMAIL</th>
            <th>PHONE</th>
            <th>BIRTHDAY</th>

        </tr>
        <?php foreach ($users as $row) : ?>
            <tr>
                <td class="user-name"><?= htmlspecialchars($row['name']) ?></td>
                <td class="user-lastName"><?= htmlspecialchars($row['last_name']) ?></td>
                <td class="user-email"><?= htmlspecialchars($row['email']) ?></td>
                <td class="user-phone"><?= htmlspecialchars($row['phone_numbers']) ?></td>
                <td class="user-birthDay"><?= htmlspecialchars($row['birth_day']) ?></td>
                <td>
                    <a class="btn btn-primary text-white" href="./update-users.php?id=<?= $row['id'] ?>">Edit</a>
                </td>
                <td>
                    <a class="btn btn-danger text-white" href="./delete-users.php?id=<?= $row['id'] ?>">Remove</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
