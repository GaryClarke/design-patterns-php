<?php

namespace Behavioral\ChainOfResponsibilities;

use Psr\Http\Message\RequestInterface;

class HttpInMemoryCacheHandler extends Handler {

    /**
     * @var array
     */
    private $data;

    /**
     * HttpInMemoryCacheHandler constructor.
     *
     * @param array $data
     * @param Handler|null $successor
     */
    public function __construct(array $data, Handler $successor = null)
    {
        parent::__construct($successor);

        $this->data = $data;
    }

    protected function processing(RequestInterface $request)
    {
        $key = sprintf(
            '%s?%s',
            $request->getUri()->getPath(),
            $request->getUri()->getQuery()
        );

        if ($request->getMethod() == 'GET' && isset($this->data[$key])) {

            return $this->data[$key];
        }

        return null;
    }
}