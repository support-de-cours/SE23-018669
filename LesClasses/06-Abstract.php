<?php 

abstract class A 
{
    private $prop = "My property value";

    public function getProp()
    {
        return $this->prop;
    }
}

class B extends A {}

// $a = new A;
$b = new B;
?>

<div>B : <?= $b->getProp() ?></div>