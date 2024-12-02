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
    'contract' => 'n/a',
    'datePayment' => date('Y-m-d'),
    'dateStatement' => date('Y-m-d'),
    //    "evidentiaryResourcesMOSS",
    'intNote' => 'Import works well',
    //    "myIdentity",
    'note' => 'Automated import',
    'partnerIdentity' => ['address' => ['street' => 'dlouha'], 'shipToAddress' => ['street' => 'kratka']],
    'paymentAccount' => ['accountNo' => '1234', 'bankCode' => '5500'],
    'statementNumber' => [
        'statementNumber' => (string) time(),
        // 'numberMovement' => (string) time()
    ],
    //    "symConst" => 'XX',
    // ?"symPar",
    'symSpec' => '23',
    'symVar' => (string) time(),
    'text' => 'Testing income '.time(),
    'homeCurrency' => ['priceNone' => '1001'],
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

if ($banker->commit()) {
    print_r($banker->response->producedDetails);
}
