<?php 

$origin = "J'aime les chats";

echo $origin;
echo "<br>";

$modif1 = str_replace("chat", "chien", $origin);
echo $modif1;
echo "<br>";


// Syntax regex : 
// motif_ouverture expression motif_fermeture flag
$modif2 = preg_replace("/chat/", "chien", $origin);
echo $modif2;
echo "<br>";


