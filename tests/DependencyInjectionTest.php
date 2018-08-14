<?php
/**
 * Created by PhpStorm.
 * User: wenba
 * Date: 2018/8/14
 * Time: 下午4:05
 */

use DesignPatterns\Structural\DependencyInjection\DatabaseConnection;
use DesignPatterns\Structural\DependencyInjection\DatabaseConfiguration;
use PHPUnit\Framework\TestCase;

class DependencyInjectionTest extends TestCase{

    public function testDependencyInjection()
    {
        $config = new DatabaseConfiguration('localhost',3306,'root','');
        $connection = new DatabaseConnection($config);

        $this->assertEquals('root:@localhost:3306',$connection->getDsn());
    }

}