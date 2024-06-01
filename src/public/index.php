<?php

declare(strict_types = 1);
require_once '../Transactions.php';
$transactions = new Transactions(100,"Transaction 1");
$transactions ->addTax(8);
$transactions ->addDiscount(10);

var_dump($transactions->amount);
