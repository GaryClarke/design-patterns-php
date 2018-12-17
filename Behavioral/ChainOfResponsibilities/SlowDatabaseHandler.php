<?php

namespace Behavioral\ChainOfResponsibilities;

use Psr\Http\Message\RequestInterface;

class SlowDatabaseHandler extends Handler {

    /**
     * @param RequestInterface $request
     *
     * @return string
     */
    protected function processing(RequestInterface $request)
    {
        return 'Hello World!';
    }
}