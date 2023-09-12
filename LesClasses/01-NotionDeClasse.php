<?php 

// Pour creer une classe
// -> mot clé "class"
// -> suivi du nom de la classe
class Voiture {

    // CONSTANTES

    const WHEELS = 4;


    // PROPERTIES / ATTRIBUTES

    private string $brand;
    private string $model;
    private string $color = "white";


    // ACTIONS / METHODS

    // Getter / Setter

    /**
     * Get the value of brand
     */ 
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * Set the value of brand
     *
     * @return self
     */ 
    public function setBrand($brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    // Actions

    public function start(): self
    {
        // Start engine
        
        return $this;
    }
    
    public function stop(): self
    {
        // Stop engine
        
        return $this;
    }
}