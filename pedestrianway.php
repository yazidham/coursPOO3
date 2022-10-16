<?php
require_once 'highway.php';

final class PedestrianWay extends HighWay
{
    private $nbLane = 1;
    private $maxSpeed = 10;

    final public function addVehicle(object $vehicle)
    {
        if ($vehicle instanceof Bike || $vehicle instanceof Skateboard){
            $currentVehicle[] = $vehicle;
        }else{
            return "unautorized vehicle";
        }
    }
}