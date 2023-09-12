<?php 

// Creation d'un Interface avec le mot clé "Interface"
interface MyInterface
{
    public function doSomething(): string;
    public function doAnotherThing(int $a, int $b): string;
}

// Utilisation de l'interface avec le mot clé 
class MyClass implements MyInterface
{
    public function doSomething(): string
    {
        return "A string";
    }
    public function doAnotherThing(int $a, int $b): string
    {
        return $a + $b;
    }
} 
class MySecondClass implements MyInterface
{
    public function doSomething(): string
    {
        return "A string";
    }
    public function doAnotherThing(int $a, int $b): string
    {
        return $a * $b;
    }
}

$myObject = new MyClass;