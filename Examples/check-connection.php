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

namespace mServer;

require_once __DIR__.'/../vendor/autoload.php';

\Ease\Shared::init(['POHODA_URL', 'POHODA_USERNAME', 'POHODA_PASSWORD'], \dirname(__DIR__).'/.env');

if (\Ease\Shared::cfg('EASE_LOGGER', false) === false) {
    \define('EASE_LOGGER', 'console');
}

$client = new \mServer\Client();

if (\Ease\Shared::cfg('APP_DEBUG')) {
    $client->logBanner();
}

$client->addStatusMessage(_('Connection'), $client->isOnline() ? 'success' : 'error');
