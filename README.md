![Project Logo](phpmserver.svg?raw=true)

# PHPmServer
client library for Stormware's [mPohoda mServer](https://www.stormware.cz/pohoda/xml/mserver/) 

Features:

 * Create/Update/Delete AddressBook record
 * Create/Update/Delete Invoice record

Installation:
-------------

Install using composer:

```shell
composer require vitexsoftware/pohoda-connector
```

Or clone https://github.com/VitexSoftware/PHP-Pohoda-Connector.git 

Configuration
-------------

Classess check at startup for this constants or environment variables:

  * POHODA_ICO      - company indentificator
  * POHODA_URL      - mServer endpoint
  * POHODA_USERNAME - Pohoda user's login
  * POHODA_PASSWORD - Pohoda user's password
  * POHODA_TIMEOUT  - Curl timeout
  * POHODA_COMPRESS - compress is disabled by default
  * POHODA_DEBUG    - debug mode is disabled by default


Usage
-----

See usage examples in [tests](tests) directory

  * [Check Connection](tests/check-connection.php)
  * [Add Addressbook record](tests/insert-address.php)
  * [Create Invoice](tests/insert-invoice.php)
  * [Addressbook reading](tests/read-address.php)
  * [Address update](tests/update-address.php)


See also my other libraries: https://github.com/Spoje-NET/PohodaSQL , https://github.com/Spoje-NET/php-abraflexi

