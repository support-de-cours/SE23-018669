<?php 
interface VehicleEngine 
{
    public function start();
    public function stop();
}
abstract class Vehicle //implements VehicleEngine
{
    const ENGINE = "Diesel";
    
    private $brand;
    private $model;

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
}