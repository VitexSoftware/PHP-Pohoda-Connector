<?php
/**
 * PHPmPohoda - address import example
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2023 Vitex Software
 */

namespace mServer;

require_once __DIR__ . '/../vendor/autoload.php';
\Ease\Shared::init(['POHODA_URL', 'POHODA_USERNAME', 'POHODA_PASSWORD'], __DIR__ . '/.env');
$bankRecord = [
//    "MOSS" => ['ids' => '213'],
    'account' => 'KB',
//    "accounting",
//    "accountingPeriodMOSS",
//    "activity" => 'testing',
    'bankType' => 'receipt',
//    "centre",
//    "classificationKVDPH",
//    "classificationVAT",
    "contract" => 'n/a',
    "datePayment" => date('Y-m-d'),
    "dateStatement" => date('Y-m-d'),
//    "evidentiaryResourcesMOSS",
    "intNote" => 'Import works well',
//    "myIdentity",
    "note" => 'Automated import',
    'partnerIdentity' => ['address' => ['street' => 'dlouha'], 'shipToAddress' => ['street' => 'kratka']],
    "paymentAccount" => ['accountNo' => '1234', 'bankCode' => '5500'],
    'statementNumber' => [
        'statementNumber' => (string) time(),
    //'numberMovement' => (string) time()
    ],
//    "symConst" => 'XX',
// ?"symPar",
    "symSpec" => '23',
    "symVar" => (string) time(),
    "text" => 'Testing income ' . time(),
    'homeCurrency' => ['priceNone' => '1001']
];
$banker = new Bank($bankRecord);
$banker->addToPohoda();
