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

use Pohoda\Bank\Bank as PohodaBank;

/**
 * Address Adresa.
 *
 * @author vitex
 */
class Bank extends Client implements smart
{
    public string $sqlTable = 'BV';

    /**
     * SQL Columns for Bank agenda.
     *
     * @var array<string, string>
     */
    public static array $sqlColumns = [
        'ID' => 'int(10,0)',
        'UsrOrder' => 'int(10,0)',
        'RefCin' => 'int(10,0)',
        'RefStr' => 'int(10,0)',
        'CisloZAK' => 'varchar(12)',
        'RefUcet' => 'int(10,0)',
        'RefZeme' => 'int(10,0)',
        'RelPk' => 'int(10,0)',
        'RelTpDPH' => 'int(10,0)',
        'RelTpBV' => 'int(10,0)',
        'RelObDPH' => 'int(10,0)',
        'RelObSH' => 'int(10,0)',
        'RelObKH' => 'int(10,0)',
        'RelMobch' => 'int(10,0)',
        'RelDruh' => 'int(10,0)',
        'Sel' => 'bit',
        'Labels' => 'varchar(255)',
        'Polozky' => 'bit',
        'Cislo' => 'varchar(33)',
        'RelCR' => 'int(10,0)',
        'Vypis' => 'varchar(11)',
        'VarSym' => 'varchar(20)',
        'ParSym' => 'varchar(20)',
        'SText' => 'varchar(96)',
        'Datum' => 'datetime',
        'DatPlat' => 'datetime',
        'RelStorn' => 'int(10,0)',
        'TpStorn' => 'bit',
        'HistSzDPH' => 'bit',
        'DICRegDPHEU' => 'varchar(18)',
        'MOSS' => 'varchar(2)',
        'MOSSDukaz' => 'varchar(32)',
        'RelObMOSS' => 'int(10,0)',
        'RelZpVypDPH' => 'int(10,0)',
        'RelTpCalcDPH' => 'int(10,0)',
        'Kc0' => 'money(19,4)',
        'Kc1' => 'money(19,4)',
        'KcDPH1' => 'money(19,4)',
        'Kc2' => 'money(19,4)',
        'KcDPH2' => 'money(19,4)',
        'Kc3' => 'money(19,4)',
        'KcDPH3' => 'money(19,4)',
        'KcCelkem' => 'money(19,4)',
        'KcZaokr' => 'money(19,4)',
        'KcU' => 'money(19,4)',
        'KcMU' => 'money(19,4)',
        'LikvCM' => 'bit',
        'RefCM' => 'int(10,0)',
        'DenEUR' => 'bit',
        'CmMnoz' => 'int(10,0)',
        'CmKurs' => 'float(53)',
        'Cm0' => 'money(19,4)',
        'CmCelkem' => 'money(19,4)',
        'RefAD' => 'int(10,0)',
        'Firma' => 'varchar(255)',
        'Utvar' => 'varchar(32)',
        'Jmeno' => 'varchar(64)',
        'Ulice' => 'varchar(64)',
        'PSC' => 'varchar(15)',
        'Obec' => 'varchar(45)',
        'ICO' => 'varchar(15)',
        'DIC' => 'varchar(18)',
        'ICDPH' => 'varchar(18)',
        'RelTypDIC' => 'int(10,0)',
        'Ucet' => 'varchar(34)',
        'KodBanky' => 'varchar(11)',
        'SpecSym' => 'varchar(20)',
        'KonstSym' => 'varchar(4)',
        'BankIdent' => 'varchar(255)',
        'mPohoda' => 'bit',
        'DatCreate' => 'datetime',
        'DatSave' => 'datetime',
        'Oznacil' => 'varchar(2)',
        'Ucetni' => 'varchar(2)',
        'Creator' => 'varchar(2)',
        'Lock' => 'bit',
        'Lock1' => 'bit',
        'Pozn' => 'text(2147483647)',
        'Pozn2' => 'text(2147483647)',
    ];

    /**
     * Current Object's agenda.
     */
    public ?string $agenda = 'bank';

    /**
     * AddressBook records name column.
     */
    public ?string $nameColumn = 'address:company';

    public function __construct($init = null, array $options = [])
    {
        parent::__construct($init, $options);
    }

    /**
     * Create Agenda document using given data.
     *
     * @param array<string, array<string, string>|string> $data
     */
    #[\Override]
    public function create(array $data): int
    {
        $this->requestXml = $this->pohoda->createBank($data);

        return 1;
    }

    /**
     * Take data into XML.
     *
     * @param array<string, array<string, string>|string> $data
     */
    public function takeData($data): int
    {
        $summaryData = [];
        \Ease\Functions::divDataArray($data, $summaryData, 'roundingDocument');
        \Ease\Functions::divDataArray($data, $summaryData, 'roundingVAT');
        \Ease\Functions::divDataArray($data, $summaryData, 'homeCurrency');
        \Ease\Functions::divDataArray($data, $summaryData, 'foreignCurrency');
        $taken = parent::takeData($data);
        $this->addSummary($summaryData);

        return $taken;
    }

    /**
     * {@inheritDoc}
     */
    #[\Override]
    public function setObjectName($forceName = '')
    {
        return parent::setObjectName($forceName ?: $this->getDataValue('account').'@'.$this->getObjectName());
    }

    /**
     * Add Summary part of bnk:bank item.
     *
     * @param array<string, string> $data
     */
    public function addSummary(array $data): void
    {
        // @phpstan-ignore method.notFound
        $this->requestXml->addSummary($data);
    }

    public function getFromPohoda($filter): ?PohodaBank
    {
        $pohodaObject = $this->getPohodaObject($filter);

        return $pohodaObject ? new PohodaBank($pohodaObject) : null;
    }

    #[\Override]
    public function populate(array $data): smart
    {
        $this->takeData($data);
        return $this;
    }

    public function getBankList(string $query = ''): ?array
    {
        return $this->getListing($this->queryFilter($query));
    }

    /**
     * Convert array of conditions to SQL query string.
     *
     * @param array<string, array<int, array<int, string>|string>|string> $conditions
     */
    public function array2query(array $conditions): string
    {
        $query = '';

        foreach ($this->completeColumns($conditions) as $key => $value) {
            if (!empty($query)) {
                $query .= ' AND ';
            }

            if (\is_array($value)) {
                $query .= "{$key} IN ('".implode("','", $value)."')";
            } else {
                $query .= "{$key} = '{$value}'";
            }
        }

        return $query;
    }

    /**
     * Complete columns with table name.
     *
     * @param array<string, string> $conditions
     *
     * @return array<string, string>
     */
    public function completeColumns(array $conditions): array
    {
        $columns = [];

        foreach ($conditions as $key => $value) {
            if (\array_key_exists($key, self::$sqlColumns)) {
                $columns[$this->sqlTable.'.'.$key] = $value;
            } else {
                $columns[$key] = $value;
            }
        }

        return $columns;
    }
}
