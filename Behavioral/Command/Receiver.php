<?php

namespace Behavioral\Command;

class Receiver {

    /**
     * @var string[]
     */
    private $output;

    /**
     * @param string $str
     */
    public function write(string $str)
    {
        $this->output[] = $str;
    }
    
    
    public function getOutput()
    {
        return join(PHP_EOL, $this->output);
    }
}