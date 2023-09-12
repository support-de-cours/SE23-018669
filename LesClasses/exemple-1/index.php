<?php 
require_once "Voiture.php";

$car1 = new Voiture("Tesla", "Model X");
?>

<h2>Car 1</h2>
<div>Brand : <?php echo $car1->getBrand() ?></div>
<div>Model : <?= $car1->getModel() ?></div>
