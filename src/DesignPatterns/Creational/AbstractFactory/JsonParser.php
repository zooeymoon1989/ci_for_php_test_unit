<?php
/**
 * Created by PhpStorm.
 * User: wenba
 * Date: 2018/8/13
 * Time: 上午11:32
 */

namespace DesignPatterns\Creational\AbstractFactory;

class JsonParser implements Parser
{
    public function parse(string $input): array
    {
        return json_decode($input, true);
    }
}