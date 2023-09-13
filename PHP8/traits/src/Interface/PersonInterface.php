<?php 
namespace App\Interface;

interface PersonInterface 
{
    public function getFirstname(): string;
    public function setFirstname(string $firstname): self;
    public function getLastname(): string;
    public function setLastname(string $lastname): self;
}