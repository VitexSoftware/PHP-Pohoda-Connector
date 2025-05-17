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

require_once '../vendor/autoload.php';
\Ease\Shared::init(['POHODA_URL', 'POHODA_USERNAME', 'POHODA_PASSWORD'], \dirname(__DIR__).'/.env');
$banker = new \mServer\Bank();

$lrq = $banker->queryFilter('id=10', 'Record #10'); // Works well
$lrq = $banker->queryFilter('number like "KB0010004" ', 'Recort #10');

$lrq = $banker->queryFilter('id=10', 'Record #10');

// SELECT ID,Sel,RelTpBV,RefUcet,Cislo,RelCR,VarSym,Vypis,Datum,DatPlat,RelPk,SText,RelZpVypDPH,Kc0,Kc1,KcDPH1,Kc2,KcDPH2,Kc3,KcDPH3,KcCelkem,KcZaokr,KcU,KcMU,LikvCM,RefCM,DenEUR,CmMnoz,CmKurs,Cm0,CmCelkem,RefAD,Firma,Utvar,Jmeno,Ulice,Obec,PSC,RefZeme,DIC,ICO,RelTypDIC,Ucet,KodBanky,SpecSym,KonstSym,BankIdent,ParSym,CisloZAK,RefStr,RefCin,RelStorn,TpStorn,Pozn,Pozn2,mPohoda,DatCreate,DatSave,Oznacil,Ucetni,Creator,Lock,Lock1,Polozky,RelDruh,Labels FROM BV WHERE ((BV.RefUcet=2 OR BV.RefUcet=4) AND (id=10)) AND ((BV.DatSave IS NOT NULL) OR ((BV.DatSave IS NULL) AND (BV.DatCreate IS NULL))) ORDER BY ID

// $lrq = $banker->queryFilter("datePayment=10", 'Record #10');

// $lrq = $banker->queryFilter("BV.ParSym IS NOT NULL AND BV.ParSym <> ''", 'Matched payments');
// $lrq = $banker->queryFilter("BV.bankType = \"receipt\"", 'Income');
// print_r($banker->getListing($lrq));

print_r($banker->getBankList("BV.ParSym IS NOT NULL AND BV.ParSym <> ''"));

print_r($banker->recordExists(328));
