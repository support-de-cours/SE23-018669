<?php 

// Commentaire 

/* Commentaire
sur 
plusieurs
lignes
*/

/**
 * Definition de ma variable
 * 
 * @var string
 */
$myVar = "Abc";



/// SORTIES PHP
/// --


// echo "Sortie avec echo $myVar <br>\n";
// print "Sortie avec print <br>\n";

// echo 'Sortie avec echo <br> $myVar\n';
// print 'Sortie avec print <br>\n';


/// SORTIE DE DEBUG 
/// --


// $fruits = ["Pommes","Poires","Bananes",];

// print_r($fruits);
// var_dump($fruits);




/// TABLEAU
/// --


/// Collection de données

// $numeric_array = [
//     "Pommes",
//     "Poires",
//     "Bananes",
// ];
// print_r($numeric_array[1]);
// echo "<br>";


/// Dictionnaire

// $assoc_array = [
//     'firstname' => "Bruce",
//     'lastname' => "WAYNE",
// ];
// print_r( $assoc_array['lastname'] );
// echo "<br>";




/// TYPES DE DONNEES
/// -- 

/// Chaines
// string  "azerty


/// Nombre
// integer  42
// float    21.5


/// Booleen
// bool     true 
// bool     false 


/// Tableaux (collection / dictionnaire)
$numeric_arr = ["value 1", "value 2"]; // collection
$assoc_arr = ['key' => "value", 'key2' => "value2", ]; // dictionnaire

/// Objet 
$my_object = new stdClass;

// Convert Array to Object
// $object = (object) $assoc_arr;
// $object = json_decode(json_encode($assoc_arr));

class MyClass {};