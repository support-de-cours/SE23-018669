<?php 

// DSN (Domain Server Name) Phrase
$dsn = "mysql:";                        // Driver de BDD
$dsn.= "host=".$db_host.";";            // Port du serveur de BDD
$dsn.= "port=".$db_port.";";            // Serveur de BDD
$dsn.= "dbname=".$db_schema.";";        // Nom du schema de donnée
$dsn.= "charset=".$db_charset.";";    // Jeu de caratères pour l'enregistrement des données

// Connexion BDD
try {
    $db = new \PDO($dsn, $db_user, $db_pass);
}
// Arret du script en cas d'erreur de connexion à la BDD
catch(PDOException $e) 
{
    // print_r ($e);
    die( printf("Échec de la connexion : %s\n", $e->getCode()) );
    // printf("Échec de la connexion : %s\n", $e->getCode());
    // exit(0);
}