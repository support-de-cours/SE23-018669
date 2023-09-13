<?php 
namespace App\Abstract;

use App\Controller\User;

abstract class ActionAbstract 
{
    // Hello John
    public function sayHello(string $to): string
    {
        return $this->getFirstname() . " say hello to " . $to;
    }

    // Goodbye John
    public function sayGoodbye(User $to): string
    {
        return $this->getFirstname() . " say goodbye to " . $to->getFirstname() ;
    }

    // Bob do something
    public function doSomething(): string
    {
        return $this->getFirstname() . " Do something";
    }
}
