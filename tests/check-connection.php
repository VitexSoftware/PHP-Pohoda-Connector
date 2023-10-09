<?php
/**
 * PHPmPohoda - connection checek tool
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Vitex Software
 */

namespace mServer;

require_once __DIR__ . '/../vendor/autoload.php';

$client = new Client(null, \Ease\Shared::instanced()->loadConfig(__DIR__ . '/.env') );
print_r($client->isOnline());

