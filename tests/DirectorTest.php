<?php
/**
 * Created by PhpStorm.
 * User: zooey
 * Date: 2018/8/17
 * Time: 1:04
 */

use DesignPatterns\Creational\Builder\Parts\Car;
use DesignPatterns\Creational\Builder\Parts\Truck;
use DesignPatterns\Creational\Builder\TruckBuilder;
use DesignPatterns\Creational\Builder\CarBuilder;
use DesignPatterns\Creational\Builder\Director;
use PHPUnit\Framework\TestCase;

class DirectorTest extends TestCase
{

    public function testCanBuildTruck()
    {
        $newVehicle = (new Director())->build(new TruckBuilder());

        $this->assertInstanceOf(Truck::class,$newVehicle);
    }

    public function testCanBuildCar()
    {
        $newVehicle = (new Director())->build(new CarBuilder());

        $this->assertInstanceOf(Car::class, $newVehicle);

    }

}
