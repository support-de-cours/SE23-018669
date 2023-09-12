<?php 

class Voiture {
    const WHEELS = 4;

    private string $brand;
    private string $model;
    private string $color = "white";


    function __construct(string $brand, string $model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getModel(): string
    {
        return $this->model;
    }






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