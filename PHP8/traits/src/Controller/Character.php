<?php 
namespace App\Controller;

use App\Abstract\ActionAbstract;
use App\Interface\PersonInterface;
use App\Trait\PersonTrait;

class Character extends ActionAbstract implements PersonInterface
{
    use PersonTrait;

    function move(string $direction): self
    {
        // Deplacement du personnage

        return $this;
    }

}