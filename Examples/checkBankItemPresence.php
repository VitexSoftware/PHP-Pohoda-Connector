<?php

declare(strict_types=1);

/**
 * This file is part of the PohodaRaiffeisenbank package
 *
 * https://github.com/Spoje-NET/pohoda-raiffeisenbank
 *
 * (c) Spoje.Net IT s.r.o. <https://spojenet.cz>
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

$prober = new  \mServer\Bank();
$move = $prober->loadFromPohoda(['symPar'=>'6701267669']);
print_r($move);
