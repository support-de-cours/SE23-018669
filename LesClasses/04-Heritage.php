<?php 

class ClassParent 
{
    public $firstname = "John";

    function familyName(): string
    {
        return "DOE";
    }
}

// L'heritage de classe se fait grace au mot clé "extends" suivi du nom de la classe parent
class ClassChild extends ClassParent
{
    public $firstname = "Bob";

    function doSomething() 
    {
        return "do something";
    }
}


$parent = new ClassParent;
$child = new ClassChild;
?>

<h2>Parent</h2>
<div>First Name : <?= $parent->firstname ?></div>
<div>Last Name : <?= $parent->familyName() ?></div>
<hr>

<h2>Enfant</h2>
<div>First Name : <?= $child->firstname ?></div>
<div>Last Name :  <?= $child->familyName() ?></div>
<div>Action :  <?= $child->doSomething() ?></div>


<?php 
// class A {}
// class B extends A {}
// class C extends B {}

// class D {}
// class E extends D {}
// class F extends E {}


// interface AA {}
// interface BB extends AA {}
