<?php

namespace Behavioral\ChainOfResponsibilities;

use Psr\Http\Message\RequestInterface;

abstract class Handler {

    /**
     * @var Handler|null
     */
    private $successor = null;

    public function __construct(Handler $handler = null)
    {
        $this->successor = $handler;
    }


    final public function handle(RequestInterface $request)
    {
        $processed = $this->processing($request);

        if ($processed === null) {

            // The request has not been processed by this handler => see the next
            if ($this->successor !== null) {

                $processed = $this->successor->handle($request);
            }
        }

        return $processed;
    }

    abstract protected function processing(RequestInterface $request);
}