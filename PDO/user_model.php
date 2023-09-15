<?php 


// GET ALL
// ---

function getAllUsers() 
{
    global $db;

    // Definition de la requete
    $sql = "SELECT `id`, `firstname`, `lastname`, `email` FROM `user`";

    // Execution de la requete
    $query = $db->query( $sql );

    // Recup du resultats (liste = fetchAll())
    return $query->fetchAll(PDO::FETCH_OBJ);
}


// GET ONE
// ---

function getOneUser($id)
{
    global $db;

    // // Definition de la requete SQL
    // $sql = "SELECT `id`, `firstname` FROM `user` WHERE id=$id";

    // // Execution de la requete
    // $query = $db->query( $sql );

    // // Recup du resultat
    // return $query->fetch(PDO::FETCH_ASSOC);
    // // return $query->fetch(PDO::FETCH_NUM);
    // // return $query->fetch(PDO::FETCH_OBJ);

    // --------------------------------------------------------------

    // Definition de la requete SQL
    $sql = "SELECT `id`, `firstname` FROM `user` WHERE id=:id";
    // $sql = "SELECT `id`, `firstname` FROM `user` WHERE id= ?";

    // Preparation de la requete
    $query = $db->prepare( $sql );
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    // $query->bindParam(1, $user_id, PDO::PARAM_INT);

    // Execution de la requete
    $query->execute();

    // Recup du resultat
    // return $query->fetch(PDO::FETCH_ASSOC);
    // return $query->fetch(PDO::FETCH_NUM);
    return $query->fetch(PDO::FETCH_OBJ);
}


// INSERT
// ---

function insertUser($table, $data)
{
    global $db;

    $keys =  array_keys($data);
    $sql_cols = "`".implode("`, `", $keys)."`";
    $pdo_cols = ":".implode(",:", $keys);

    // Definition SQL
    $sql = "INSERT INTO `$table` ($sql_cols) VALUES ($pdo_cols)";

    // Preparation de la requete
    $query = $db->prepare($sql);
    foreach ($data as $key => $value)
    {
        $query->bindValue(":$key", $value, PDO::PARAM_STR);
    }
    
    // Execution de la requete
    $query->execute();
}

$insertUser = function($table, $data) use ($db)
{
    $keys =  array_keys($data);
    $sql_cols = "`".implode("`, `", $keys)."`";
    $pdo_cols = ":".implode(",:", $keys);

    // Definition SQL
    $sql = "INSERT INTO `$table` ($sql_cols) VALUES ($pdo_cols)";

    // Preparation de la requete
    $query = $db->prepare($sql);
    foreach ($data as $key => $value)
    {
        $query->bindValue(":$key", $value, PDO::PARAM_STR);
    }
    
    // Execution de la requete
    $query->execute();
};




// --------------------------------------------------------------



// --------------------------------------------------------------

// $user_id = 2;



// print_r( $result );