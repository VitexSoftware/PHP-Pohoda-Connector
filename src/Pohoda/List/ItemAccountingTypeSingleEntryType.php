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

namespace Pohoda\List;

/**
 * Class representing ItemAccountingTypeSingleEntryType.
 *
 * XSD Type: itemAccountingTypeSingleEntry
 */
class ItemAccountingTypeSingleEntryType extends ItemType
{
    private string $accounting = null;
    private string $agenda = null;
    private string $accountingType = null;

    /**
     * Gets as accounting.
     *
     * @return string
     */
    public function getAccounting()
    {
        return $this->accounting;
    }

    /**
     * Sets a new accounting.
     *
     * @param string $accounting
     *
     * @return self
     */
    public function setAccounting($accounting)
    {
        $this->accounting = $accounting;

        return $this;
    }

    /**
     * Gets as agenda.
     *
     * @return string
     */
    public function getAgenda()
    {
        return $this->agenda;
    }

    /**
     * Sets a new agenda.
     *
     * @param string $agenda
     *
     * @return self
     */
    public function setAgenda($agenda)
    {
        $this->agenda = $agenda;

        return $this;
    }

    /**
     * Gets as accountingType.
     *
     * @return string
     */
    public function getAccountingType()
    {
        return $this->accountingType;
    }

    /**
     * Sets a new accountingType.
     *
     * @param string $accountingType
     *
     * @return self
     */
    public function setAccountingType($accountingType)
    {
        $this->accountingType = $accountingType;

        return $this;
    }
}
