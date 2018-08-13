<?php
/**
 * Created by PhpStorm.
 * User: wenba
 * Date: 2018/8/13
 * Time: 上午11:31
 */

namespace DesignPatterns\Creational\AbstractFactory;

class CsvParser implements Parser
{
    const OPTION_CONTAINS_HEADER = true;
    const OPTION_CONTAINS_NO_HEADER = false;

    /**
     * @var bool
     */
    private $skipHeaderLine;

    public function __construct(bool $skipHeaderLine)
    {
        $this->skipHeaderLine = $skipHeaderLine;
    }

    public function parse(string $input): array
    {
        $headerWasParsed = false;
        $parsedLines = [];

        foreach (explode(PHP_EOL, $input) as $line) {
            if (!$headerWasParsed && $this->skipHeaderLine === self::OPTION_CONTAINS_HEADER) {
                continue;
            }

            $parsedLines[] = str_getcsv($line);
        }

        return $parsedLines;
    }
}