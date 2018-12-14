<?php

namespace Structural\Proxy;

class BankAccountProxy extends HeavyBankAccount implements BankAccount {

    /**
     * @var int
     */
    private $balance;

    public function getBalance()
    {
        if ($this->balance === null) {

            $this->balance = parent::getBalance();
        }

        return $this->balance;
    }
}