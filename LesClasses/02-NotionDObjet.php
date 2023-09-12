<?php 

class Character 
{
    private string|null $name = null;
    
    public function getName(): string|null
    {
        return $this->name;
    }
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}

/// Creation de l'object = Instance de la classe
// --
// Creation d'un instance de classe avec le mot clé "new" suivi du nom de la classe

$perso_1 = new Character;

echo "Name : " . $perso_1->getName();
echo "<hr>";

$perso_1->setName("Bob");

echo "Name : " . $perso_1->getName();
echo "<hr>";
