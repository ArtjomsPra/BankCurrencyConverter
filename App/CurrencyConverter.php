<?php declare(strict_types=1);

namespace App;

class CurrencyConverter {

    private ApiClient $apiClient;

    public function __construct () {
        $this->apiClient = new ApiClient();
    }

    public function currencyConverter(string $currency, float $amount) : array {
        $currencies = $this->apiClient->getExchangeRates();
        $exchangeRate = 0;
        $date = date('d.m.Y');
        foreach ($currencies->Currencies->Currency as $convertingCurrency) {
            if ($convertingCurrency->ID == $currency) {
                $exchangeRate = $convertingCurrency->Rate;
            }
        }
        $convertedAmount = $amount * $exchangeRate;
        return ['amount' => $convertedAmount, 'rate' => $exchangeRate, 'date' => $date];
    }
}
