<?php

/**
 * PHPmPohoda - address import example
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Vitex Software
 */

namespace mServer;

require_once __DIR__ . '/../vendor/autoload.php';


$addresser = new Adressbook(null, \Ease\Shared::instanced()->loadConfig(__DIR__ . '/.env'));
$pragueAddresses = $addresser->getColumnsFromPohoda(['id', 'email', 'web'], ['city' => 'Prague']);

echo "-----------------------------------------------------------\n";

print_r($pragueAddresses);

//$addresser->loadFromPohoda(10);
//print_r($addresser->getData());


