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
$bankAccounter = new \mServer\BankAccount();

// Export všech bankovních dokladů.

print_r($bankAccounter->getColumnsFromPohoda(['id', 'accountNo', 'iban', 'swift']));
