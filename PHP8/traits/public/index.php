<?php

use App\Controller\Character;
use App\Controller\User;

require_once "./../vendor/autoload.php";


$john = new User('John');
$bob = new User('bob');

$batman = new Character("Bruce");

?>

<div>User 1 : <?= $john->getFirstname() ?></div>
<div>User 2 : <?= $bob->getFirstname() ?></div>
<div>Character 1 : <?= $batman->getFirstname() ?></div>

<hr>

<div>User 1 : <?= $john->doSomething() ?></div>
<div>User 2 : <?= $bob->doSomething() ?></div>
<div>Character 1 : <?= $batman->doSomething() ?></div>


<hr>

<div>User 1 : <?= $john->sayHello( $bob->getFirstname() ) ?></div>
<div>User 2 : <?= $bob->sayHello( $john->getFirstname() ) ?></div>

<hr>

<div>User 1 : <?= $john->sayGoodbye( $bob ) ?></div>
<div>User 2 : <?= $bob->sayGoodbye( $john ) ?></div>