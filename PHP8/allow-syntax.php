<?php 

namespace Foo;
class FooClass{
    public $prop = "Prop Value";
}


// namespace Bar;
// class BarClass{}


// use \Foo\FooClass;


$c = FooClass::class;
echo $c;
echo "<br>";

echo gettype($c);
echo "<br>";


$d = new $c;
echo $d->prop;