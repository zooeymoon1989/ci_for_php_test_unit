<?php
/**
 * Created by PhpStorm.
 * User: zooey
 * Date: 2018/8/17
 * Time: 0:01
 */

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Vehicle;

class CarBuilder implements BuilderInterface
{

    private $car;

    public function addDoors()
    {
        $this->car->setPart('rightDoor',new Parts\Door());
        $this->car->setPart('leftDoor', new Parts\Door());
        $this->car->setPart('trunkLid', new Parts\Door());
    }

    public function addEngine()
    {
        $this->car->setPart('engine', new Parts\Engine());
    }


    public function addWheel()
    {
        $this->car->setPart('wheelLF', new Parts\Wheel());
        $this->car->setPart('wheelRF', new Parts\Wheel());
        $this->car->setPart('wheelLR', new Parts\Wheel());
        $this->car->setPart('wheelRR', new Parts\Wheel());
    }

    public function getVehicle(): Vehicle
    {
        return $this->car;
    }


    public function createVehicle()
    {
        // TODO: Implement createVehicle() method.
        $this->car = new Parts\Car();
    }
}