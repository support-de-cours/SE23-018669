<?php 

// Personnalisation des Exceptions
// -> throw : Definition de l'exception
// -> try   : test d'execution du code
// -> catch : En cas d'echec de l'execution

function doSomething(int $a)
{
    if ($a < 18)
    {
        throw new Exception("\$a is not less than 18 (\$a = $a)", 42);
    }

    echo "Do Something";
}

try {
    doSomething(10);
}
catch (Exception $e) {
    
    echo 'Message d\'erreur : ' .$e->getMessage();
    echo '<br>';
    echo 'Code d\'erreur : ' .$e->getCode();
    echo '<br>';
    echo $e->getFile();

}