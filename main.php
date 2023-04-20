<?php declare(strict_types=1);

require_once 'vendor/autoload.php';

$amount = floatval(readline("Please enter amount of euro that you want to exchange: "));

$currency = readline("Please enter code for a currency that you want to exchange for the euros: ");

$currencyConverter = new App\CurrencyConverter();

$result = $currencyConverter->currencyConverter($currency, $amount);

echo "You entered " . $amount . " of euros you wanted to convert to " . $currency . PHP_EOL;
echo "The exchange rate for " . $currency . " is " . $result['rate'] . " and the conversion was done on " . $result['date'] . PHP_EOL;
echo "The amount you get is " . $result['amount'] . PHP_EOL;
