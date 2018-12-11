<?php

namespace Structural\DataMapper;

class UserMapper {

    /**
     * @var StorageAdapter
     */
    private $adapter;


    /**
     * UserMapper constructor.
     *
     * @param StorageAdapter $storage
     */
    public function __construct(StorageAdapter $storage)
    {
        $this->adapter = $storage;
    }


    /**
     * Find a user by id
     *
     * @param int $id
     * @return User
     */
    public function findById(int $id)
    {
        $result = $this->adapter->find($id);

        if ($result === null) {
            throw new \InvalidArgumentException("User #$id not found");
        }

        return $this->mapRowToUser($result);
    }


    /**
     * Map data to a User object
     *
     * @param array $row
     * @return User
     */
    private function mapRowToUser(array $row)
    {
        return User::fromState($row);
    }
}