<?php

use PHPUnit\Framework\TestCase;
use Creational\AbstractFactory\CsvParser;
use Creational\AbstractFactory\JsonParser;
use Creational\AbstractFactory\ParserFactory;

class AbstractFactoryTest extends TestCase {

    /** @test */
    function can_create_csv_parser()
    {
        $factory = new ParserFactory();

        $parser = $factory->createCsvParser(CsvParser::OPTION_CONTAINS_HEADER);

        $this->assertInstanceOf(CsvParser::class, $parser, 'Expected an instance of ' . CsvParser::class);
    }

    /** @test */
    function can_create_json_parser()
    {
        $factory = new ParserFactory();

        $parser = $factory->createJsonParser();

        $this->assertInstanceOf(JsonParser::class, $parser, 'Expected an instance of ' . JsonParser::class);
    }
}