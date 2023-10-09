<?php

/**
 * PHPmServer - Pohoda Addressbook obtainer example
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2023 Vitex Software
 */

require_once '../vendor/autoload.php';
\Ease\Shared::init(['POHODA_URL', 'POHODA_USERNAME', 'POHODA_PASSWORD'], '../.env');
$addresser = new \mServer\Adressbook();
print_r($addresser->getColumnsFromPohoda(['id', 'jmeno', 'email', 'web'], ['city' => 'Prague']));


//echo "-----------------------------------------------------------\n";
//
//print_r($pragueAddresses);

//$addresser->loadFromPohoda(10);
//print_r($addresser->getData());


