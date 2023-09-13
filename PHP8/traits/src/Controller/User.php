<?php 
namespace App\Controller;

use App\Trait\PersonTrait;
use App\Abstract\ActionAbstract;
use App\Interface\PersonInterface;

class User extends ActionAbstract implements PersonInterface
{
    use PersonTrait;

    function login(): self 
    {
        // Proceed to login

        return $this;
    }

}