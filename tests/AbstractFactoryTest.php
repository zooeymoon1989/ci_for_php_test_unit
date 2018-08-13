<?php
/**
 * Created by PhpStorm.
 * User: wenba
 * Date: 2018/8/13
 * Time: 上午11:35
 */

namespace tests;

use DesignPatterns\Creational\AbstractFactory\CsvParser;
use DesignPatterns\Creational\AbstractFactory\JsonParser;
use DesignPatterns\Creational\AbstractFactory\ParserFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testCanCreateCsvParser()
    {
        $factory = new ParserFactory();
        $parser = $factory->createCsvParser(CsvParser::OPTION_CONTAINS_HEADER);

        $this->assertInstanceOf(CsvParser::class, $parser);
    }

    public function testCanCreateJsonParser()
    {
        $factory = new ParserFactory();
        $parser = $factory->createJsonParser();

        $this->assertInstanceOf(JsonParser::class, $parser);
    }
}