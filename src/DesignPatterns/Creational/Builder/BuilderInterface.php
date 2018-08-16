<?php
/**
 * Created by PhpStorm.
 * User: zooey
 * Date: 2018/8/17
 * Time: 0:25
 */

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Vehicle;

interface BuilderInterface
{

    public function createVehicle();

    public function addWheel();

    public function addEngine();

    public function addDoors();

    public function getVehicle(): Vehicle;
}