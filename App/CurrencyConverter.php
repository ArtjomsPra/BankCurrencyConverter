<?php declare(strict_types=1);

namespace App;

class CurrencyConverter {

    private ApiClient $apiClient;

    public function __construct () {
        $this->apiClient = new ApiClient();
    }

    public function currencyConverter(string $currency, float $amount) : float {
        $currencies = $this->apiClient->getExchangeRates();
            $exchangeRate = 0;
        foreach ($currencies->Currencies->Currency as $convertingCurrency) {
            if ($convertingCurrency->ID == $currency) {
                $exchangeRate = $convertingCurrency->Rate;
            }
        }
        return $amount * $exchangeRate;
    }
}
