<?php

namespace Behavioral\Mediator;

use Behavioral\Mediator\Subsystem\Client;
use Behavioral\Mediator\Subsystem\Server;
use Behavioral\Mediator\Subsystem\Database;

class Mediator implements MediatorInterface {

    /**
     * @var Server
     */
    private $server;

    /**
     * @var Database
     */
    private $database;

    /**
     * @var Client
     */
    private $client;

    /**
     * Mediator constructor.
     *
     * @param Server $server
     * @param Database $database
     * @param Client $client
     */
    public function __construct(Server $server, Database $database, Client $client)
    {
        $this->server = $server;
        $this->database = $database;
        $this->client = $client;

        $this->server->setMediator($this);
        $this->database->setMediator($this);
        $this->client->setMediator($this);
    }

    /**
     * @param $content
     * @return mixed
     */
    public function sendResponse($content)
    {
        $this->client->output($content);
    }

    public function makeRequest()
    {
        $this->server->process();
    }

    public function queryDb()
    {
        return $this->database->getData();
    }
}