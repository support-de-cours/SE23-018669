<?php 

class A 
{
    public $public_property = "This is a public property";
    private $private_property = "This is  a PRIVATE property !!!";
    protected $protected_property = "This is a protected property!";

    public function getPrivateProperty() 
    {
        return $this->private_property;
    }
    public function getProtectedProperty() 
    {
        return $this->protected_property;
    }
}

class B extends A
{
    public function getPrivatePropertyOfA() 
    {
        // return $this->private_property;
    }
    public function getProtectedPropertyOfA() 
    {
        return $this->protected_property;
    }
}

$a = new A;
$b = new B;

?>

<div>A (public) : <?= $a->public_property ?></div>
<div>B (public) : <?= $b->public_property ?></div>
<hr>

<div>A (private) : <?= $a->getPrivateProperty() ?></div>
<div>B (private) : <?= $b->getPrivatePropertyOfA() ?></div>
<hr>

<div>A (protected) : <?= $a->getProtectedProperty() ?></div>
<div>B (protected) : <?= $b->getProtectedPropertyOfA() ?></div>
<hr>
