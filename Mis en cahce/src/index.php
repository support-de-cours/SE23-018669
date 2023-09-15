<?php 
$cache_file = "../cache/demo.html";
$cache_expire = time()-60;

$tse_start = microtime(true);

// 1. Test l'existance du fichier de cache
if (!file_exists($cache_file) || filemtime($cache_file) < $cache_expire)
{
    sleep(5);
    // 2. Ouverture du tampon
    // -- 

    ob_start();

    

    // 3.Execution du script et du rendu de page
    // --

        // sleep(1);
        $data = ["Pommes","Poires","Bananes","Kiwis","Fraises",];

        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <h1>Exemple de mise en cache</h1>

            <div>cahce: <?= date("Y-m-d H:i:s") ?></div>
            <ul>
            <?php foreach ($data as $item) :?>
                <li><?= $item ?></li>
            <?php endforeach; ?>
            </ul>

        </body>
        </html>

        <?php 


    // 4. stockage du tampon dans une chaîne de caractères
    // --

    $cache_data = ob_get_contents(); 


    // 5. Creation du fichier de cache
    // --

    file_put_contents($cache_file, $cache_data) ; 


    // 6. Fermeture du tampom ...
    // --

    ob_end_clean(); // ... effacement du tampon
    // ob_end_flush(); // ... affichage du tampon

}






// 5. lire le fichier de cache
readfile($cache_file);


$tse_end = microtime(true);

echo "<br><br>";
echo $tse_end - $tse_start;