<?php
class Vehicle{
    
    private $tires,$fuel;

    function __construct($tires,$fuel){
        $this->tires = $tires;
        $this->fuel = $fuel;
        echo "data added\n";
    }

    function showData(){
        echo 'number of tires '.$this->tires."\n";
        echo 'fuel capacity '.$this->fuel."\n";
    }

    function setTires($tires){
        $this->tires = $tires;
    }

    function setFuel($fuel){
        $this->fuel = $fuel;
    }
}

class Car extends Vehicle{
    function runCar(){
        echo "running car\n";
    }
}

$benz  = new Car(4,'1.5L');

$benz->showData();
$benz->setFuel('2L');
$benz->showData();

?>