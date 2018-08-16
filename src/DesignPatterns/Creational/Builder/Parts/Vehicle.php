<?php
/**
 * Created by PhpStorm.
 * User: zooey
 * Date: 2018/8/16
 * Time: 2:33
 */

namespace DesignPatterns\Creational\Builder\Parts;

abstract class Vehicle{

    private $data = [];

    public function setPart($key , $value)
    {
        $this->data[$key] = $value;
    }

}