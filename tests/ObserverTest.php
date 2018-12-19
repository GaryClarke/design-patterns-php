<?php

use Behavioral\Observer\User;
use PHPUnit\Framework\TestCase;
use Behavioral\Observer\UserObserver;

class ObserverTest extends TestCase {

    /** @test */
    function change_in_subject_leads_to_observer_being_updated()
    {
        $observer = new UserObserver();

        $user = new User();

        $user->attach($observer);

        $user->changeEmail('foo@bar.com');

        $this->assertCount(1, $observer->getChangedUsers());
    }
}