# PHPmServer

client library for Stormware's [mPohoda mServer](https://www.stormware.cz/pohoda/xml/mserver/)

![Project Logo](phpmserver.svg?raw=true)

The PHP-Pohoda-Connector library provides a set of features to interact with the Pohoda accounting software. Below are some of the key features along with code examples:

Features:

* Check connection
* Create/Update/Delete AddressBook record
* Create/Update/Delete Invoice record
* Create/Update/Delete Bank movement record

![PHP from Packagist](https://img.shields.io/packagist/php-v/vitexsoftware/pohoda-connector)
![Packagist Version](https://img.shields.io/packagist/v/vitexsoftware/pohoda-connector)
![Packagist Downloads](https://img.shields.io/packagist/dt/vitexsoftware/pohoda-connector)
![GitHub](https://img.shields.io/github/license/VitexSoftware/PHP-Pohoda-Connector)

## Installation

Install using composer:

```shell
composer require vitexsoftware/pohoda-connector
```

Or clone <https://github.com/VitexSoftware/PHP-Pohoda-Connector.git>

## Configuration

Classess check at startup for this constants or environment variables:

* **POHODA_ICO**      - company indentificator
* **POHODA_URL**      - mServer endpoint
* **POHODA_USERNAME** - Pohoda user's login
* **POHODA_PASSWORD** - Pohoda user's password
* **POHODA_TIMEOUT**  - Curl timeout
* **POHODA_COMPRESS** - compress is disabled by default
* **POHODA_DEBUG**    - debug mode is disabled by default

## Note on Encoding

Pohoda always produces XML encoded in `windows-1250`. This library will automatically convert all incoming XML to UTF-8 before processing. As a result, all parsed data and strings you receive from this library will be in UTF-8 encoding, regardless of the original XML encoding.

---

## Usage

1. Check Connection
This feature allows you to check if the connection to the Pohoda server is successful.

```php
<?php

namespace mServer;

require_once __DIR__.'/../vendor/autoload.php';

\Ease\Shared::init(['POHODA_URL', 'POHODA_USERNAME', 'POHODA_PASSWORD'], \dirname(__DIR__).'/.env');

$client = new \mServer\Client();

if (\Ease\Shared::cfg('APP_DEBUG')) {
    $client->logBanner();
}

echo  $client->isOnline() ? 'Online' : 'Offline';
```

1. Add Addressbook record
This feature allows you to add a new addressbook record.

```php
<?php

namespace mServer;

require_once __DIR__.'/../vendor/autoload.php';

\Ease\Shared::init(['POHODA_URL', 'POHODA_USERNAME', 'POHODA_PASSWORD'], \dirname(__DIR__).'/.env');

$addressBookRecord = [
    'identity' => [
        'address' => [
            'company' => 'Vitex Software',
            'name' => 'Vítězslav Dvořák',
            'city' => 'Prague',
            'street' => 'Long',
            'zip' => '15800',
            'ico' => '69438676',
            'dic' => 'CZ7808072811',
        ],
    ],
    'mobil' => '739 778 202',
    'web' => 'https://www.vitexsoftware.cz',
];

$addresser = new Adressbook($addressBookRecord);
$addresser->addToPohoda();

if ($addresser->commit()) {
    print_r($addresser->response->producedDetails);
}
```

1. Create Invoice

This feature allows you to create a new invoice.

```php
<?php

namespace mServer;

require_once __DIR__.'/../vendor/autoload.php';

$invoiceRecord = [
    'invoiceType' => 'issuedInvoice',
    'date' => date('Y-m-d'),
    'accounting' => ['ids' => '3Fv'],
    'text' => 'Faktura za zboží bez adresy',
    'paymentType' => 'draft',
    'note' => 'Import XML.',
    'intNote' => 'Tento doklad byl vytvořen importem přes XML z PHP.',
    'invoiceSummary' => [
        'roundingDocument' => 'math2one',
        'homeCurrency' => [
            'priceNone' => 3018,
            'priceLow' => 60000,
            'priceHighSum' => 557,
        ],
    ],
];

\Ease\Shared::init(['POHODA_URL', 'POHODA_USERNAME', 'POHODA_PASSWORD'], \dirname(__DIR__).'/.env');

$invoicer = new Invoice($invoiceRecord);

$itemRecord = [
    'text' => 'Židle Z220',
    'quantity' => 1.0,
    'unit' => 'ks',
    'payVAT' => false,
    'rateVAT' => 'high',
    'homeCurrency' => [
        'unitPrice' => 1968,
        'price' => 1968,
        'priceVAT' => 413.28,
        'priceSum' => 2381.28,
    ],
    'code' => 'Z220',
    'stockItemIDS' => 'Z220',
];

$invoicer->addItem($itemRecord);
$invoicer->addToPohoda();

if ($invoicer->commit()) {
    print_r($invoicer->response->producedDetails);
}
```

1. Addressbook reading

This feature allows you to read an addressbook record.

```php
<?php

require_once '../vendor/autoload.php';
\Ease\Shared::init(['POHODA_URL', 'POHODA_USERNAME', 'POHODA_PASSWORD'], \dirname(__DIR__).'/.env');
$addresser = new \mServer\Addressbook();
print_r($addresser->getColumnsFromPohoda(['id', 'jmeno', 'email', 'web']));
```

See usage examples in [tests](tests) directory

* [Check Connection](tests/check-connection.php)
* [Add Addressbook record](tests/insert-address.php)
* [Create Invoice](tests/insert-invoice.php)
* [Addressbook reading](tests/read-address.php)
* [Address update](tests/update-address.php)

**Many thanks to [Riešenia, spol. s r.o.](https://www.riesenia.com/) for its library <https://github.com/riesenia/pohoda>**

See my other libraries: <https://github.com/Spoje-NET/PohodaSQL> , <https://github.com/Spoje-NET/php-abraflexi>
