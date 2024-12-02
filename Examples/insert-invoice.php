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

$invoiceRecord = [
    'invoiceType' => 'issuedInvoice',
    'date' => date('Y-m-d'),
    'accounting' => [
        'ids' => '3Fv',
    ],
    'classificationVAT' => [
        'classificationVATType' => 'inland',
    ],
    'text' => 'Faktura za zboží bez adresy',
    'paymentType' => 'draft',
    'account' => [
        'ids' => 'KB',
    ],
    'note' => 'Import XML.',
    'intNote' => 'Tento doklad byl vytvořen importem přes XML z PHP.',
    'invoiceSummary' => [
        'roundingDocument' => 'math2one',
        'homeCurrency' => [
            'priceNone' => 3018,
            'priceLow' => 60000,
            'priceHighSum' => 557,
            'round' => [
                'priceRound' => 0,
            ],
        ],
    ],
    // "accounting",
    // "activity",
    // "carrier",
    // "centre",
    // "classificationKVDPH",
    // "classificationVAT",
    // "contract",
    // "date",
    // "dateAccounting",
    // "dateApplicationVAT",
    // "dateDelivery",
    // "dateDue",
    // "dateKHDPH",
    // "dateOrder",
    // "dateTax",
    // "extId",
    // "intNote",
    // "invoiceType",
    // "myIdentity",
    // "note",
    // "number",
    // "numberKHDPH",
    // "numberOrder",
    // "order",
    // "originalDocument",
    // "originalDocumentNumber",
    // "partnerIdentity",
    // "paymentAccount",
    // "paymentTerminal",
    // "paymentType",
    // "priceLevel",
    // "regVATinEU",
    // "symConst",
    // "symPar",
    // "symSpec",
    // "symVar",
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
