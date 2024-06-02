<?php

declare(strict_types = 1);
require_once '../Transactions.php';
require_once './Stripe/Transactions.php';
use Stripe\Transactions;
use Public\Transactions as PublicTransaction;
$transactions1 = new Transactions();
$transactions = new PublicTransaction(100,"Transaction 1");

$transactions ->addTax(8);
$transactions ->addDiscount(10);

var_dump($transactions->amount);
echo '<pre/>';
var_dump($transactions1);
echo '<pre/>';
