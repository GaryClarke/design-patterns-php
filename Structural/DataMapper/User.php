<?php

namespace Structural\DataMapper;

class User {

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $email;

    public function __construct(string $username, string $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    public static function fromState(array $state)
    {
        return new self($state['username'], $state['email']);
    }
}