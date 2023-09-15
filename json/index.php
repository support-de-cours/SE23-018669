<?php 

// Modif de l'entete Response HTTP
// header("content-type: application/json");


// Tableau PHP
$xml = simplexml_load_string(file_get_contents("./data.xml"));

// Convert tableau PHP en JSON
$json = json_encode($xml);
$arr = json_decode($json, true);

// $obj = json_decode($json, true);
// echo $json;

// print_r($xml);

$xml2 = new SimpleXMLElement('<root/>');
array_walk_recursive($arr, array ($xml2, 'addChild'));
print $xml2->asXML();
