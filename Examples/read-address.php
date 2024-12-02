<?php

declare(strict_types=1);

/**
 * This file is part of the PHP-Pohoda-Connector package
 *
 * https://github.com/VitexSoftware/PHP-Pohoda-Connector
 *
 * (c) VitexSoftware. <https://vitexsoftware.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require_once '../vendor/autoload.php';
\Ease\Shared::init(['POHODA_URL', 'POHODA_USERNAME', 'POHODA_PASSWORD'], \dirname(__DIR__).'/.env');
$addresser = new \mServer\Addressbook();
print_r($addresser->getColumnsFromPohoda(['id', 'jmeno', 'email', 'web']));
// print_r($addresser->getColumnsFromPohoda(['id', 'jmeno', 'email', 'web'], ['city' => 'Prague']));

// echo "-----------------------------------------------------------\n";
//
// print_r($pragueAddresses);

// $addresser->loadFromPohoda(10);
// print_r($addresser->getData());
