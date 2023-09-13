Debut du fichier
<hr>

<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



$fruits = "Pommes, Poires, Bananes";

// NOTICE
// -- 
// Informe d'une erreur non problematique et continu l'execution du code




// WARNING
// -- 
// Un Warning informe que quelque chose ne peux pas fonctionner correctement, sans que cela ne gêne la vie de l'application

$fruits = explode(", ", $fruits);
echo $fruits;

// echo gettype($fruits);
// echo "<br>";

// // foreach( $array as $key => $value) 
// // foreach( $array as $value) 
// foreach ($fruits as $fruit) 
// {
//     echo $fruit."<br>";
// }



// FATALE
// -- 
// Impossible de continuer l'application

// echo doSomething();

?>

<hr>
Fin du fichier