<?php

namespace Structural\Proxy;

interface BankAccount {

    public function deposit(int $amount);

    public function getBalance();
}