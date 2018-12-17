<?php

use PHPUnit\Framework\TestCase;
use Behavioral\ChainOfResponsibilities\Handler;
use Behavioral\ChainOfResponsibilities\SlowDatabaseHandler;
use Behavioral\ChainOfResponsibilities\HttpInMemoryCacheHandler;

class ChainOfResponsibilitiesTest extends TestCase {

    /**
     * @var Handler
     */
    private $chain;

    /**
     *
     */
    protected function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        $this->chain = new HttpInMemoryCacheHandler(
            ['/foo/bar?index=1' => 'Hello In Memory'],
            new SlowDatabaseHandler()
        );

        parent::setUp();
    }


    /** @test */
    function can_request_key_in_fast_storage()
    {
        $uri = $this->createMock(\Psr\Http\Message\UriInterface::class);
        $uri->method('getPath')->willReturn('/foo/bar');
        $uri->method('getQuery')->willReturn('index=1');

        $request = $this->createMock(\Psr\Http\Message\RequestInterface::class);
        $request->method('getMethod')->willReturn('GET');
        $request->method('getUri')->willReturn($uri);

        $this->assertEquals('Hello In Memory', $this->chain->handle($request));
    }


    /** @test */
    function can_request_key_in_slow_storage()
    {
        $uri = $this->createMock(\Psr\Http\Message\UriInterface::class);
        $uri->method('getPath')->willReturn('/foo/baz');
        $uri->method('getQuery')->willReturn('');

        $request = $this->createMock(\Psr\Http\Message\RequestInterface::class);
        $request->method('getMethod')->willReturn('GET');
        $request->method('getUri')->willReturn($uri);

        $this->assertEquals('Hello World!', $this->chain->handle($request));
    }
}