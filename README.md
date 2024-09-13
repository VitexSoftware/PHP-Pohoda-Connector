![Project Logo](phpmserver.svg?raw=true)

# PHPmServer

client library for Stormware's [mPohoda mServer](https://www.stormware.cz/pohoda/xml/mserver/)

Features:

* Check connection
* Create/Update/Delete AddressBook record
* Create/Update/Delete Invoice record

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

## Usage

See usage examples in [tests](tests) directory

* [Check Connection](tests/check-connection.php)
* [Add Addressbook record](tests/insert-address.php)
* [Create Invoice](tests/insert-invoice.php)
* [Addressbook reading](tests/read-address.php)
* [Address update](tests/update-address.php)

**Many thanks to [Riešenia, spol. s r.o.](https://www.riesenia.com/) for its library <https://github.com/riesenia/pohoda>**

See my other libraries: <https://github.com/Spoje-NET/PohodaSQL> , <https://github.com/Spoje-NET/php-abraflexi>
