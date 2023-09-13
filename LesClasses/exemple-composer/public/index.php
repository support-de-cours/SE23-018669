<?php 

require_once "../vendor/autoload.php";

use App\Controller\Car;

// Instance de classes
$car1 = new Car("Ford", "F-250");
$car2 = new Car("Toyota", "Hilux");
?>

<h2>Car 1</h2>
<div>Brand : <?= $car1->getBrand() ?></div>
<div>Model : <?= $car1->getModel() ?></div>
<div>Wheels : <?= $car1::WHEELS ?></div>

<h2>Car 2</h2>
<div>Brand : <?= $car2->getBrand() ?></div>
<div>Model : <?= $car2->getModel() ?></div>