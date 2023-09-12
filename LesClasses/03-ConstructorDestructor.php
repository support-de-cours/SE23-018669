<?php 


class Character 
{
    private string $name;

    function __construct(string $name)
    {
        $this->name = $name;
    }

    // function __destruct()
    // {
        // echo "My Destructor<br>";
    // }
    
    public function getName(): string
    {
        return $this->name;
    }
    // public function setName(string $name): self
    // {
    //     $this->name = $name;

    //     return $this;
    // }
}


$perso_1 = new Character("John");
$perso_2 = new Character("Bob");



echo "Name 1 : " . $perso_1->getName();
echo "<hr>";
echo "Name 2 : " . $perso_2->getName();
echo "<hr>";
