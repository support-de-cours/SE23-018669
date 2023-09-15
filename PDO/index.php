<?php 
include_once "config.php";
include_once "dbconnect.php";
include_once "user_model.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Json</title>
</head>
<body>

    <a href="add_user.php">Ajout d'un utilisateur</a>

    <table>
        <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach (getAllUsers() as $user): ?>
            <tr>
                <td><?= $user->firstname ?></td>
                <td><?= $user->lastname ?></td>
                <td><?= $user->email ?></td>
            </tr>
            <?php endforeach; ?>

        </tbody>
    </table>

</body>
</html>