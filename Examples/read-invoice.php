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
$invoicer = new \mServer\Invoice();

// Export vydaných faktur.

print_r($invoicer->getColumnsFromPohoda(['id', 'number', 'symVar']));

// Todo: Export vydaných faktur dle datumu vystavení.
// Todo: Export vydaných faktur dle názvu firmy nebo ICO firmy.
// Todo: Export všech vydaných faktur.
// Todo: Export vydaných faktur dle uživatelského filtru programu POHODA.
// Todo: Export vydaných faktur.Export nových nebo změněných záznamů.
