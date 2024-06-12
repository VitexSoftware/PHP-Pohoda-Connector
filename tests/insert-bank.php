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

//        $resolver->setAllowedValues('bankType', ['receipt', 'expense']);
//        $resolver->setNormalizer('symVar', $resolver->getNormalizer('string20'));
//        $resolver->setNormalizer('dateStatement', $resolver->getNormalizer('date'));
//        $resolver->setNormalizer('datePayment', $resolver->getNormalizer('date'));
//        $resolver->setNormalizer('text', $resolver->getNormalizer('string96'));
//        $resolver->setNormalizer('symConst', $resolver->getNormalizer('string4'));
//        $resolver->setNormalizer('symSpec', $resolver->getNormalizer('string16'));
//        $resolver->setNormalizer('symPar', $resolver->getNormalizer('string20'));
//        $resolver->setNormalizer('accountingPeriodMOSS', $resolver->getNormalizer('string7'));

$banker = new Bank($bankRecord);
$banker->addToPohoda();
$result = $banker->commit();

print_r($result);


