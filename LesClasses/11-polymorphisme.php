<?php 
class Laser {
    public function caracteristiques() {
        echo "Disque laser<br>";
    }
}
class CD extends Laser{
    public function caracteristiques() {
        parent::caracteristiques();
        echo "Capacité : 700 Mo<br>";
    } 
}
class DVD extends Laser {
    public function caracteristiques() {
        parent::caracteristiques();
        echo "Capacité : 4,7 Go<br>";
    }
}
class BlueRay extends Laser {
    public function caracteristiques() {
        parent::caracteristiques();
        echo "Capacité : 25 Go<br>";
    } 
}


$cd = new CD;
$cd->caracteristiques();

$dvd = new DVD;
$dvd->caracteristiques();

(new BlueRay)->caracteristiques();