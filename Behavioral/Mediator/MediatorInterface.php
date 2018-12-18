<?php

namespace Behavioral\Mediator;

interface MediatorInterface {

    /**
     * @param $content
     * @return mixed
     */
    public function sendResponse($content);

    public function makeRequest();

    public function queryDb();
}