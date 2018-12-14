<?php

namespace Structural\Proxy;

class HeavyBankAccount implements BankAccount {

    /**
     * @var int[]
     */
    private $transactions = [];

    public function deposit(int $amount)
    {
        $this->transactions[] = $amount;
    }

    public function getBalance()
    {
        return array_sum($this->transactions);
    }
}