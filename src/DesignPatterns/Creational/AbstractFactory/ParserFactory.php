<?php
/**
 * Created by PhpStorm.
 * User: wenba
 * Date: 2018/8/13
 * Time: 上午11:34
 */

namespace DesignPatterns\Creational\AbstractFactory;

class ParserFactory
{
    public function createCsvParser(bool $skipHeaderLine): CsvParser
    {
        return new CsvParser($skipHeaderLine);
    }

    public function createJsonParser(): JsonParser
    {
        return new JsonParser();
    }
}