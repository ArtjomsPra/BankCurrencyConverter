<?php declare(strict_types=1);

namespace App;

use GuzzleHttp\Client;
use SimpleXMLElement;

class ApiClient {

    private $client;

    public function __construct () {
        $this->client =new Client();
    }

    public function getExchangeRates () {
        $url = 'https://www.latvijasbanka.lv/vk/ecb.xml';
        $response = $this->client->request('GET', $url, ['verify' => false]);
        $xmlString = $response->getBody()->getContents();
        $xml = simplexml_load_string($xmlString);
        return $xml;
    }

}
