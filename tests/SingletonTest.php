<?php
/**
 * Created by PhpStorm.
 * User: wenba
 * Date: 2018/8/14
 * Time: 下午6:21
 */

use DesignPatterns\Creational\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase{

    public function testUniqueness()
    {

        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class,$firstCall);
        $this->assertSame($firstCall,$secondCall);

    }

}