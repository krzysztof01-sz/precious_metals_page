<?php

class ServingAPI {
    private $endpoint = 'latest';
    private $accessKey = '7lwiofy050ts8c5e0raauo5vuzras8cri73z53jqm41azvcfxaq0kqsitk8r'; // API KEY
    private $currency;
    private $symbols;
    
    private $exchangeRates;
    
    public function __construct(string $defaultCurrency = 'PLN'){
        $this->setCurrency($defaultCurrency);
        $this->setMetalsSymbols();
    }
    
    private function sendRequest(): ?array{
        $query = 'https://metals-api.com/api/'.$this->endpoint;
        $query .= '?access_key='.$this->accessKey;
        $query .= '&base='.$this->currency;
        $query .= '&symbols='.$this->symbols;
             
        $ch = curl_init($query);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $json = curl_exec($ch);
        curl_close($ch);
        
        $exchangeRates = json_decode($json, true);
        
        return $exchangeRates['rates'];
    }
    
    private function setCurrency(string $currency): void{
        $this->currency = $currency;
    }
    
    private function setMetalsSymbols(){
        $this->symbols = "";
        $metals = array('XAU', 'XAG', 'XPD', 'XPT');
        $this->symbols = implode(',', $metals);
    }
    
    private function renderExchangeRates(){ // test purposes only!
        $rates = $this->sendRequest();
        echo 'Złoto = '.round($rates['XAU'], 3).' PLN za uncję<br>';
        echo 'Srebro = '.round($rates['XAG'], 3).' PLN za uncję<br>';
        echo 'Platyna = '.round($rates['XPT'], 3).' PLN za uncję<br>';
        echo 'Pallad = '.round($rates['XPD'], 3).' PLN za uncję<br>';
    }
    
    public function getExchangeRatesAsArray(): ?array{
        $rates = $this->sendRequest();
        
        return array(
            'Gold' => (float) round($rates['XAU'], 3),
            'Silver' => (float) round($rates['XAG'], 3),
            'Platinum' => (float) round($rates['XPT'], 3),
            'Palladium' => (float) round($rates['XPD'], 3)
                    );
    }
    
}
