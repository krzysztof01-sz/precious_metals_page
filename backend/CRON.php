<?php

require_once "DatabaseControl.php";

$api = new ServingAPI;
$db = new DatabaseControl();

$db->updateExchangeRates($api->getExchangeRatesAsArray());