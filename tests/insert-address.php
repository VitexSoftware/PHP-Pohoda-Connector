<?php

/**
 * PHPmPohoda - address import example
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  (C) 2020 Vitex Software
 */

namespace mServer;

require_once __DIR__ . '/../vendor/autoload.php';



$addressBookRecord = [
    'GPS' => '', // GPS souřadnice.
    'ICQ' => '', // ICQ adresa.
    'Skype' => '', // Skype adresa.
    'activity' => '', // Činnost.
    'agreement' => '', // Číslo obchodní smlouvy (nesmí být povoleno v Globálním nastavení - Číslování zákazníků).
    'centre' => '', // Středisko.
    'contract' => '', // Zakázka.
    'credit' => '', // Kredit, tolerovaná výše pohledávek odběratele.
    'email' => '', // Email.
    'fax' => '', // Fax.
    'identity' => [// Základní údaje
//        'id' => '', //  
        'address' => [// Adresa.
            'company' => 'Vitex Software', //  
            'division' => '', //  
            'name' => 'Vítězslav Dvořák', //  
            'city' => 'Prague', //  
            'street' => 'Long', //  
            'zip' => '15800', //  
            'ico' => '69438676', //  
            'dic' => 'CZ7808072811', //  
            'VATPayerType' => '', //Typ plátce DPH: payer Plátce DPH., non-payer Neplátce DPH., "" Neuvedeno (výchozí hodnota)
            'icDph' => '', //  
            'country' => '', //  
        ], // 
        'addressLinkToAddress' => '', // 
//        'extId' => '', // 
        'shipToAddress' => [// Dodací adresa.
//            'actionType' => '', //Typ práce s dodací adresou. Výchozí hodnota je přidání nového dodací adresy.
//            'extId' => '', //
            'company' => '', //
            'division' => '', //
            'name' => '', //
            'city' => '', //
            'street' => '', //
            'zip' => '', //
            'country' => '', //
            'defaultShipAddress' => '', //Výchozí dodací adresa.</xsd:documentation>
        ],
    ],
    'intNote' => 'maybe duplicated', // Interní poznámka.
    'maturity' => '', // Splatno. Počet dnů splatnosti faktur. Při vložení adresy do faktury se nastaví datum splatnosti přičtením zde uvedeného počtu dnů k datu vystavení faktury.
    'message' => 'message for ', // Zpráva.
    'mobil' => '739 778 202', // Mobil.
    'note' => 'note', // Poznámka.
    'number' => '', // Číslo dodavatele/odběratele dle zvolené číselné řady (musí být povoleno v Globálním nastavení - Číslování zákazníků).
    'ost1' => '', // Ostatní.
    'ost2' => '', // Ostatní. Používá se také u kontaktní osoby.
//    'funkce' => '', //Název funkce. Používá se jen u kontaktní osoby. 
    'p1' => false, // Klíč P1 / Dodavatel.
    'p2' => true, // Klíč P2 / Odběratel.
    'p3' => false, // Klíč P3.
    'p4' => false, // Klíč P4.
    'p5' => false, // Klíč P5.
    'p6' => false, // Klíč P6.
    'paymentType' => 'cash', // Forma úhrady: draft, cash, postal, delivery, creditcard, advance, encashment, cheque, compensation
    'phone' => '', // Telefon.
    'priceIDS' => '', // Cenová hladina odběratele.
    'region' => '', // Název kraje.
    'web' => 'https://www.vitexsoftware.cz', //Adresa www stránek.
];






$addresser = new Adressbook($addressBookRecord, \Ease\Shared::instanced()->loadConfig(__DIR__ . '/.env'));
$addresser->insertToPohoda();


