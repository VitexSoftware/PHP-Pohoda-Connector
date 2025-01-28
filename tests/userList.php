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

namespace Pohoda\RaiffeisenBank;

\define('APP_NAME', 'PohodaBankItemPresence');

require_once '../vendor/autoload.php';
/**
 * Get today's transactions list.
 */
\Ease\Shared::init(['POHODA_URL', 'POHODA_USERNAME', 'POHODA_PASSWORD', 'POHODA_ICO'], $argv[1] ?? '../.env');

$prober = new \mServer\UserList();

$move = $prober->loadFromPohoda();
print_r($move);
