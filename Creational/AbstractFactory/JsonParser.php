<?php

namespace Creational\AbstractFactory;

class JsonParser implements Parser {


    public function parse(string $input)
    {
        return json_decode($input, true);
    }
}