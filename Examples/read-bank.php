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
$banker = new \mServer\Bank();

// Export všech bankovních dokladů.

print_r($banker->getColumnsFromPohoda(['id', 'number', 'symVar']));

// Todo: Export bankovních dokladů dle datumu vystavení.

$banker->getColumnsFromPohoda(['id', 'number', 'symVar'], ['dateFrom' => '2023-01-01', 'dateTill' => '2023-01-31']);

// Todo: Export bankovních dokladů dle názvu firmy.

$banker->getColumnsFromPohoda(['id', 'number', 'symVar'], ['company' => 'ZET s.r.o.']);

// Todo: Export bankovních dokladů dle uživatelského filtru programu POHODA.

// Fixme: Fatal error: Uncaught Symfony\Component\OptionsResolver\Exception\UndefinedOptionsException: The option "userFilterName" does not exist. Defined options are: "EAN", "code", "company", "dateFrom", "dateTill", "dic", "ico", "id", "internet", "lastChanges", "name", "storage", "store". in /home/vitex/Projects/VitexSoftware/PHP-Pohoda-Connector/vendor/symfony/options-resolver/OptionsResolver.php on line 876

$banker->getColumnsFromPohoda(['id', 'number', 'symVar'], ['userFilterName' => 'vyber']);

// Todo: Export bankovních dokladů.Export nových nebo změněných záznamů.

$banker->getColumnsFromPohoda(['id', 'number', 'symVar'], ['lastChanges' => '2025-01-01T00:00:00']);
