<?php
require_once 'highway.php';

final class MotorWay extends HighWay
{
    private $nbLane = 4;
    private $maxSpeed = 130;

    final public function addVehicle(object $vehicle)
    {
        if ($vehicle instanceof Bike || $vehicle instanceof Skateboard){
            return "unautorized vehicle";
        }else{
            $currentVehicle[] = $vehicle;
        }
    }
}