<?php
/**
 * PHPmPohoda - connection checek tool
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020-2023 Vitex Software
 */

namespace mServer;

require_once __DIR__ . '/../vendor/autoload.php';

\Ease\Shared::init(['POHODA_URL', 'POHODA_USERNAME', 'POHODA_PASSWORD'], __DIR__ . '/.env');
if (\Ease\Shared::cfg('EASE_LOGGER', false) === false) {
    define('EASE_LOGGER', 'console');
}

$client = new \mServer\Client();
if (\Ease\Shared::cfg('APP_DEBUG')) {
    $client->logBanner();
}
$client->addStatusMessage(_('Connection'), $client->isOnline() ? 'success' : 'error');
