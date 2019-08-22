<?php

interface Payments
{
    public function initiate();
}

class CcAvenue implements Payments
{
    public function initiate()
    {
        echo 'CCAvenue payment initiated';
    }
}

class PayTm implements Payments
{
    public function initiate()
    {
        echo 'PayTm payment initiated';
    }
}

class PayU implements Payments
{
    public function initiate()
    {
        echo 'PayU payment initiated';
    }
}

class Cart {
    public function checkout($ordereId, Payments $paymentGw)
    {
        echo "Order ID: {$ordereId} \n";
        $paymentGw->initiate();
    }
}

echo "Select Payment Gateway\n
1) CCAvenue
2) PayTm
3) PayU
";

$handle = fopen ("php://stdin","r");
$line = fgets($handle);
$line = trim($line);
switch ($line) {
    case '1':
        $paymentGw = new CcAvenue();
        break;
    case '2':
        $paymentGw = new PayTm();
        break;

    case '3':
        $paymentGw = new PayU();
        break;

    default:
        $paymentGw = null;
        break;
}

if(empty($paymentGw))
{
    die("Invalid Payment Gateway selected!\n");
}

$cart = new Cart();


$cart->checkout(uniqid(), $paymentGw);
echo "\n";