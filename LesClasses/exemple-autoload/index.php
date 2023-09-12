<?php

// require_once "src/Vehicle.php";
// require_once "src/Car.php";
// require_once "src/Truck.php";

function autochargement($className)
{
    $className = str_replace("\\", "/", $className);

    $file = $className . ".php";

    print_r( "Class Name : " . $file . " !!!" );

    require_once $file;

}

spl_autoload_register('autochargement');


use \src\Controller\Car;
use \src\Controller\Truck;

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
<div>Engine : <?= src\Controller\Vehicle::ENGINE ?></div>