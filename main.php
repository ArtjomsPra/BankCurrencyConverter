<?php declare(strict_types=1);

require_once 'vendor/autoload.php';

$amount = floatval(readline("Please enter amount of euro that you want to exchange: "));

$currency = readline("Please enter code for a currency that you want to exchange for the euros: ");

$currencyConverter = new App\CurrencyConverter();

echo "You entered " . $amount . " of euros you wanted to convert to " . $currency . ". The amount you get is " . $currencyConverter->currencyConverter($currency, $amount);