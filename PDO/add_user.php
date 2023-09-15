<?php 
include_once "./config.php";
include_once "./dbconnect.php";
include_once "./user_model.php";


// Default value
$firstname = null;
$lastname = null;
$email = null;


// Retrieve form data
if ($_SERVER["REQUEST_METHOD"] === 'POST')
{
    $errors = [];

    $firstname = $_POST['firstname'] ?? null;
    $lastname  = $_POST['lastname'] ?? null;
    $email     = $_POST['email'] ?? null;

    // Controle des données
    // ... 

    if ($firstname === null || !strlen($firstname))
    {
        array_push($errors, "Le champs Firstname est obligatoire");
    }
    else if (!preg_match("/^[a-z]+$/i", $firstname))
    {
        array_push($errors, "Erreur sur le champs Firstname");
    }

    // Controle lastname
    // Controle email


    if (!count($errors))
    {
        // Enregistrement en BDD avec PDO
        // -- 

        // // Definition SQL
        // $sql = "INSERT INTO `user` (`firstname`, `lastname`, `email`) VALUES (\"$firstname\", \"$lastname\", \"$email\")";

        // // Execution de la requete
        // $query = $db->query($sql);


        // ------------------------------------------------------------

        // // Definition SQL
        // $sql = "INSERT INTO `user` (`firstname`, `lastname`, `email`) VALUES (?, ?, ?)";

        // // Preparation de la requete
        // $query = $db->prepare($sql);

        // // Execution de la requete
        // $query->execute([
        //     $firstname, 
        //     $lastname, 
        //     $email
        // ]);


        // ------------------------------------------------------------

        // // Definition SQL
        // $sql = "INSERT INTO `user` (`firstname`, `lastname`, `email`) VALUES (:firstname, :lastname, :email)";

        // // Preparation de la requete
        // $query = $db->prepare($sql);
        // $query->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        // $query->bindValue(':lastname', $lastname, PDO::PARAM_STR);
        // $query->bindValue(':email', $email, PDO::PARAM_STR);

        // // Execution de la requete
        // $query->execute();



        // ------------------------------------------------------------


        // $keys =  array_keys($_POST);
        // $sql_cols = "`".implode("`, `", $keys)."`";
        // $pdo_cols = ":".implode(",:", $keys);

        // // Definition SQL
        // $sql = "INSERT INTO `user` ($sql_cols) VALUES ($pdo_cols)";

        // // Preparation de la requete
        // $query = $db->prepare($sql);
        // foreach ($_POST as $key => $value)
        // {
        //     $query->bindValue(":$key", $value, PDO::PARAM_STR);
        // }

        // // Execution de la requete
        // $query->execute();

        // Fonction Insert
        insertUser('user', $_POST);

        // Fonction anonyme dans la variable insert
        $insertUser('user', [
            'firstname' => "BOB",
            'lastname' => "Sponge",
            'email' => "bob@sponge.com"
        ]);


        exit;
    }
    else {
        print_r($errors);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>
<body>
    <form method="post" novalidate="novalidate">

        <div>
            <label for="firstname">Firstname</label>
            <input type="text" id="firstname" name="firstname" value="<?= $firstname ?>">
            <!-- firstname=bob -->
        </div>

        <div>
            <label for="lastname">Lastname</label>
            <input type="text" id="lastname" name="lastname" value="<?= $lastname ?>">
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?= $email ?>">
        </div>

        <button type="submit">Send</button>
    </form>
</body>
</html>