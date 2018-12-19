<?php

namespace Behavioral\Observer;

use SplSubject;

class UserObserver implements \SplObserver {

    /**
     * @var User[]
     */
    private $changedUsers;

    /**
     * Receive update from subject
     * @link http://php.net/manual/en/splobserver.update.php
     * @param SplSubject $subject <p>
     * The <b>SplSubject</b> notifying the observer of an update.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function update(SplSubject $subject)
    {
        $this->changedUsers[] = clone $subject;
    }

    /**
     * @return User[]
     */
    public function getChangedUsers()
    {
        return $this->changedUsers;
    }
}