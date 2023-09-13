<?php 

// Source json 
$file = "./data.json";

// Contenu du fichier
$json = file_get_contents($file);

// Convertion data json > objet PHP
$users_obj = json_decode($json);
$users_arr = json_decode($json, true);

// $users = $users_obj->users;
// $users = $users_arr['users'];
print_r($users);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Json</title>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($users_obj->users as $user): ?>
            <tr>
                <td><?= $user->firstname ?></td>
                <td><?= $user->lastname ?></td>
                <td><?= $user->email ?></td>
            </tr>
            <?php endforeach; ?>

            <?php foreach ($users_arr['users'] as $user): ?>
            <tr>
                <td><?= $user['firstname'] ?></td>
                <td><?= $user['lastname'] ?></td>
                <td><?= $user['email'] ?></td>
            </tr>
            <?php endforeach; ?>
            
            <!-- 
            <tr>
                <td>john</td>
                <td>doe</td>
                <td>john@doe.com</td>
            </tr>
            <tr>
                <td>bruce</td>
                <td>wayne</td>
                <td>bruce@wayne-enterprise.net</td>
            </tr>
            <tr>
                <td>bob</td>
                <td>sponge</td>
                <td>spongebob@bikinibottom.lol</td>
            </tr>
            -->
        </tbody>
    </table>

</body>
</html>