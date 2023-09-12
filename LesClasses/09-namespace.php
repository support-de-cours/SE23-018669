<?php 

// Namespace global : \

// NameSpace Foo
namespace Foo;
class MyClassA {
    public function method_1(){
        return "Namespace : <code>" .__NAMESPACE__ . "</code><br>". 
                "ClassName : <code>" . __CLASS__ . "</code><br>". 
                "Method : <code>" . __METHOD__ . "</code><br>".
                "Line : <code>" . __LINE__ ."</code>";
    }
}



// NameSpace Bar
namespace Bar;
class MyClassA {
    public function method_1(){
        return "Namespace : <code>" .__NAMESPACE__ . "</code><br>". 
                "ClassName : <code>" . __CLASS__ . "</code><br>". 
                "Method : <code>" . __METHOD__ . "</code><br>".
                "Line : <code>" . __LINE__ ."</code>";
    }
}
class MyClassB {
    public function method_1(){
        return "Namespace : <code>" .__NAMESPACE__ . "</code><br>". 
                "ClassName : <code>" . __CLASS__ . "</code><br>". 
                "Method : <code>" . __METHOD__ . "</code><br>".
                "Line : <code>" . __LINE__ ."</code>";
    }
}

// ----------------------------------------------


use \Foo\MyClassA as Class1;
use \Bar\MyClassA as Class2;


// $obj_a = new Class1;
$obj_a = new \Foo\MyClassA;

echo $obj_a->method_1();
echo "<hr>";


// $obj_a = new \Bar\MyClassA;
$obj_a = new Class2;
$obj_b = new MyClassB;


echo $obj_a->method_1();
echo "<hr>";