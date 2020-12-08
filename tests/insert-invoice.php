<?php

/**
 * PHPmPohoda - address import example
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Vitex Software
 */

namespace mServer;

require_once __DIR__ . '/../vendor/autoload.php';

$invoiceRecord = [
    'invoiceType' => 'issuedInvoice',
    'date' => date('Y-m-d'),
    'accounting' => [
        'ids' => '3Fv'
    ],
    'classificationVAT' => [
        'classificationVATType' => 'inland'
    ],
    'text' => 'Faktura za zboží bez adresy',
    'paymentType' => 'draft',
    'account' => [
        'ids' => 'KB'
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
                'priceRound' => 0
            ]
        ]
    ]
//"accounting", 
//"activity", 
//"carrier", 
//"centre", 
//"classificationKVDPH", 
//"classificationVAT", 
//"contract", 
//"date", 
//"dateAccounting", 
//"dateApplicationVAT", 
//"dateDelivery", 
//"dateDue", 
//"dateKHDPH", 
//"dateOrder", 
//"dateTax", 
//"extId", 
//"intNote", 
//"invoiceType", 
//"myIdentity", 
//"note", 
//"number", 
//"numberKHDPH", 
//"numberOrder", 
//"order", 
//"originalDocument", 
//"originalDocumentNumber", 
//"partnerIdentity", 
//"paymentAccount", 
//"paymentTerminal", 
//"paymentType", 
//"priceLevel", 
//"regVATinEU", 
//"symConst", 
//"symPar", 
//"symSpec", 
//"symVar", 
//"text".    
];

$invoicer = new Invoice($invoiceRecord, \Ease\Shared::instanced()->loadConfig(__DIR__ . '/.env'));

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
        'priceSum' => 2381.28
    ],
    'code' => 'Z220',
    'stockItemIDS' => 'Z220'
];


$invoicer->addItem($itemRecord);

$invoicer->insertToPohoda();


