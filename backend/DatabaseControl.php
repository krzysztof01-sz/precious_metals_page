<?php

require_once "ServingAPI.php";

class DatabaseControl(){
    private $server = '';
    private $user = '';
    private $password = '';
    private $database = 'preciousMetals';
    private $table = 'exchangeRates';
    
    private $gold;
    private $silver;
    private $palladium;
    private $platinum;
    
    
    private function setExchangeRatesFromAPI(array $exchangeRates): void{
        $this->gold = $exchangeRates['Gold'];
        $this->silver = $exchangeRates['Silver'];
        $this->palladium = $exchangeRates['Palladium'];
        $this->platinum = $exchangeRates['Platinum'];
    }
    
    protected function performQuery(string $query, bool $needResponce = false, bool $needResult = false){
        try {
            if(@!$connection = new mysqli($this->server, $this->user, $this->password, $this->database)) 
                throw new Exception($connection->connect_error);

            if(@!mysqli_query($connection, "SET CHARSET utf8")) throw new Exception($connection->connect_error);
            if(@!$result = $connection->query($query)) throw new Exception($connection->connect_error);

            if ($needResponce === true){
                $fetched = $result->fetch_array(MYSQLI_BOTH);
                return $fetched;
            } 

            else if ($needResult === true){
                return $result;
            } else return true;

        } catch (Exception $e){
            $this->reportException($e);
            return false;
        }
    }
    
    private function saveExchangeRatesToDB(){
        $query = "INSERT INTO $this->table (gold, silver, palladium, platinum) VALUES('$this->gold', '$this->silver', '$this->palladium', '$this->platinum')";
        
        if(@!$this->performQuery($query, false, true))
            throw new Exception('Nie udało się zaktualizować bazy danych na podstawie danych z Metals-API.');
            
    }
    
    public function updateExchangeRates(array $exchangeRates){
        try {
            $this->setExchangeRatesFromAPI($exchangeRates);
            $this->saveExchangeRatesToDB();
        } catch(Exception $e){
            echo 'Błąd: '$e->getMessage();
        }
    }
    
    
    private function retrieveDataFromDb(){
        $query = "SELECT gold, silver, palladium, platinum FROM $this->table ORDER BY requestDatetime DESC LIMIT 1";
        
        if(@!($retrieved = $this->performQuery($query, true, false)))
            throw new Exception('Nie udało się zaktualizować bazy danych na podstawie danych z Metals-API.');
        
        $this->gold = $retrieved['Gold'];
        $this->silver = $retrieved['Silver'];
        $this->platinum = $retrieved['Platinum'];
        $this->palladium = $retrieved['Palladium'];
    }
    
    public function getGoldExchangeRate(): ?float{
        if ($this->gold === null)
            $this->retrieveDataFromDb();
            
        return $this->gold;
    }
    
        
    public function getSilverExchangeRate(): ?float{
        if ($this->silver === null)
            $this->retrieveDataFromDb();
            
        return $this->silver;
    }
    
    public function getPlatinumExchangeRate(): ?float{
        if ($this->platinum === null)
            $this->retrieveDataFromDb();
            
        return $this->platinum;
    }
    
    public function getPalladiumExchangeRate(): ?float{
        if ($this->palladium === null)
            $this->retrieveDataFromDb();
            
        return $this->palladium;
    }
}

