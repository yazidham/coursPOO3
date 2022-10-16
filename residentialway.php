<?php
require_once 'highway.php';

final class ResidentialWay extends HighWay
{
    private $nbLane = 2;
    private $maxSpeed = 50;

    final public function addVehicle(object $vehicle)
    {
        $currentVehicle[] = $vehicle;
    }
}