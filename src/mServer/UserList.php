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

/**
 * UserList handler.
 *
 * @author vitex
 */
class UserList extends Client
{
    /**
     * Current Object's agenda.
     */
    public ?string $agenda = 'users';

    /**
     * Request XML helper.
     */
    public ?\Riesenia\Pohoda\Agenda $requestXml = null;

    /**
     * AddressBook records name column.
     */
    public ?string $nameColumn = 'user:name';

    /**
     * Create Agenda document using given data.
     *
     * @param array<string, array> $data
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
     * @param array<string, string> $data
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
     * @param array $data
     */
    public function addSummary($data): void
    {
        $this->requestXml->addSummary($data);
    }
}
