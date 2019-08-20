<?php

interface CarService
{
    public function getCost();
    public function getLabel();
}

class BasicInspection implements CarService
{
    public function getCost()
    {
        return 10;
    }

    public function getLabel()
    {
        return 'Basic Inspection';
    }
}

class EngineTuning implements CarService
{
    protected $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return 15 + $this->carService->getCost();
    }

    public function getLabel()
    {
        return $this->carService->getLabel() . ', Engine Tuning';
    }
}

class WheelAlignment implements CarService
{
    protected $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return 5 + $this->carService->getCost();
    }

    public function getLabel()
    {
        return $this->carService->getLabel() . ', Wheel Alignment';
    }
}



echo (new EngineTuning(new WheelAlignment(new BasicInspection())))->getCost(), "\n";
echo (new EngineTuning(new WheelAlignment(new BasicInspection())))->getLabel(), "\n";
