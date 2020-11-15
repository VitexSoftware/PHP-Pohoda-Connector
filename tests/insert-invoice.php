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

$addresser = new Invoice($invoiceRecord, \Ease\Shared::instanced()->loadConfig(__DIR__ . '/.env'));
$addresser->insertToPohoda();


