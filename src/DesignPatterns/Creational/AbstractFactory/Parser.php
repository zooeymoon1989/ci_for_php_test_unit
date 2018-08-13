<?php
/**
 * Created by PhpStorm.
 * User: wenba
 * Date: 2018/8/13
 * Time: 上午11:30
 */

namespace DesignPatterns\Creational\AbstractFactory;

interface Parser
{
    public function parse(string $input): array;
}