<?php

namespace Creational\AbstractFactory;

class ParserFactory {

    public function createCsvParser(bool $skipheaderLine)
    {
        return new CsvParser($skipheaderLine);
    }

    public function createJsonParser()
    {
        return new JsonParser();
    }
}