<?php

namespace Structural\DependencyInjection;

class DatabaseConnection {

    /**
     * @var DatabaseConfiguration
     */
    private $databaseConfiguration;

    /**
     * DatabaseConnection constructor.
     *
     * @param DatabaseConfiguration $config
     */
    public function __construct(DatabaseConfiguration $config)
    {
        $this->databaseConfiguration = $config;
    }


    public function getDsn()
    {
        return sprintf('%s:%s@%s:%d',
            $this->databaseConfiguration->getUsername(),
            $this->databaseConfiguration->getPassword(),
            $this->databaseConfiguration->getHost(),
            $this->databaseConfiguration->getPort()
        );
    }
}