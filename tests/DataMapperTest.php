<?php

use PHPUnit\Framework\TestCase;
use Structural\DataMapper\User;
use Structural\DataMapper\UserMapper;
use Structural\DataMapper\StorageAdapter;

class DataMapperTest extends TestCase {

    /** @test */
    function can_map_user_from_storage()
    {
        $storage = new StorageAdapter([1 => ['username' => 'GaryC', 'email' => 'gary@test.com']]);

        $mapper = new UserMapper($storage);

        $user = $mapper->findById(1);

        $this->assertInstanceOf(User::class, $user);
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    function will_not_map_invalid_data()
    {
        $storage = new StorageAdapter([]);

        $mapper = new UserMapper($storage);

        $mapper->findById(1);
    }
}