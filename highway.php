<?php

abstract class HighWay 
{
    private array $currentVehicles;
    private int $nbLane;
    private int $maxSpeed;

    abstract public function addVehicle(object $vehicle);

    public function getCurrentVehicles() : array
    {
        return $this->currentVehicles;
    }

    public function getNbLane() : int
    {
        return $this->nbLane;
    }

    public function getMaxSpeed() : int
    {
        return $this->maxSpeed;
    }

    public function setCurrentVehicles(array $currentVehicles):array
    {
        $this->maxSpeed = $currentVehicles;
    }
    
    public function setNbLane(int $nbLane): int
    {
        $this->nbLane = $nbLane;
    }

    public function setMaxSpeed(int $maxSpeed): int
    {
        $this->maxSpeed = $maxSpeed;
    }
}