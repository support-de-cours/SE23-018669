<?php 

// Modif de l'entete Response HTTP
header("content-type: application/json");

// Tableau PHP
$users = include "./data.php";

// Convert tableau PHP en JSON
$json = json_encode($users);

// $obj = json_decode($json, true);
echo $json;