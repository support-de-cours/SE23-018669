<?php 
include_once "config.php";
include_once "dbconnect.php";
include_once "user_model.php";



// Modif de l'entete Response HTTP
header("content-type: application/json");

// Tableau PHP
$users = getAllUsers();

// Convert tableau PHP en JSON
$json = json_encode($users);

// $obj = json_decode($json, true);
echo $json;