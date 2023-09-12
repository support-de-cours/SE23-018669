<?php 

// Imports
require_once "Vehicle.php";
require_once "Car.php";
require_once "Truck.php";


// Instance de classes
$car1 = new Car("Ford", "Ranger");
$car2 = new Car("Toyota", "Hilux");

$truck1 = new Truck("MAN", "2");
$truck2 = new Truck("KenWorth", "3");

?>

<h2>Car 1</h2>
<div>Brand : <?= $car1->getBrand() ?></div>
<div>Model : <?= $car1->getModel() ?></div>
<div>Wheels : <?= $car1::WHEELS ?></div>

<h2>Car 2</h2>
<div>Brand : <?= $car2->getBrand() ?></div>
<div>Model : <?= $car2->getModel() ?></div>

<h2>Truck 1</h2>
<div>Brand : <?= $truck1->getBrand() ?></div>
<div>Model : <?= $truck1->getModel() ?></div>
<div>Wheels : <?= Truck::WHEELS ?></div>

<h2>Truck 2</h2>
<div>Brand : <?= $truck2->getBrand() ?></div>
<div>Model : <?= $truck2->getModel() ?></div>
<div>Engine : <?= Vehicle::ENGINE ?></div>