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

namespace Pohoda\AddressBook;

/**
 * Class representing AddressbookType.
 *
 * XSD Type: addressbookType
 */
class AddressbookType
{
    private ?string $version = null;

    /**
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     */
    private ?\Pohoda\AddressBook\ActionTypeType $actionType = null;
    private ?\Pohoda\AddressBook\AddressbookHeaderType $addressbookHeader = null;

    /**
     * @var \Pohoda\AddressBook\AccountItemType[]
     */
    private ?array $addressbookAccount = null;
    private ?\Pohoda\AddressBook\AddressbookGDPRType $addressbookGDPR = null;

    /**
     * Po vytvoření záznamu se provede jeho tisk.
     *
     * @var \Pohoda\Print\PrinterSettingsType[]
     */
    private ?array $print = null;

    /**
     * Gets as version.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Gets as actionType.
     *
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     *
     * @return \Pohoda\AddressBook\ActionTypeType
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * Sets a new actionType.
     *
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     *
     * @return self
     */
    public function setActionType(?\Pohoda\AddressBook\ActionTypeType $actionType = null)
    {
        $this->actionType = $actionType;

        return $this;
    }

    /**
     * Gets as addressbookHeader.
     *
     * @return \Pohoda\AddressBook\AddressbookHeaderType
     */
    public function getAddressbookHeader()
    {
        return $this->addressbookHeader;
    }

    /**
     * Sets a new addressbookHeader.
     *
     * @return self
     */
    public function setAddressbookHeader(?\Pohoda\AddressBook\AddressbookHeaderType $addressbookHeader = null)
    {
        $this->addressbookHeader = $addressbookHeader;

        return $this;
    }

    /**
     * Adds as accountItem.
     *
     * @return self
     */
    public function addToAddressbookAccount(\Pohoda\AddressBook\AccountItemType $accountItem)
    {
        $this->addressbookAccount[] = $accountItem;

        return $this;
    }

    /**
     * isset addressbookAccount.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetAddressbookAccount($index)
    {
        return isset($this->addressbookAccount[$index]);
    }

    /**
     * unset addressbookAccount.
     *
     * @param int|string $index
     */
    public function unsetAddressbookAccount($index): void
    {
        unset($this->addressbookAccount[$index]);
    }

    /**
     * Gets as addressbookAccount.
     *
     * @return \Pohoda\AddressBook\AccountItemType[]
     */
    public function getAddressbookAccount()
    {
        return $this->addressbookAccount;
    }

    /**
     * Sets a new addressbookAccount.
     *
     * @param \Pohoda\AddressBook\AccountItemType[] $addressbookAccount
     *
     * @return self
     */
    public function setAddressbookAccount(?array $addressbookAccount = null)
    {
        $this->addressbookAccount = $addressbookAccount;

        return $this;
    }

    /**
     * Gets as addressbookGDPR.
     *
     * @return \Pohoda\AddressBook\AddressbookGDPRType
     */
    public function getAddressbookGDPR()
    {
        return $this->addressbookGDPR;
    }

    /**
     * Sets a new addressbookGDPR.
     *
     * @return self
     */
    public function setAddressbookGDPR(?\Pohoda\AddressBook\AddressbookGDPRType $addressbookGDPR = null)
    {
        $this->addressbookGDPR = $addressbookGDPR;

        return $this;
    }

    /**
     * Adds as printerSettings.
     *
     * Po vytvoření záznamu se provede jeho tisk.
     *
     * @return self
     */
    public function addToPrint(\Pohoda\Print\PrinterSettingsType $printerSettings)
    {
        $this->print[] = $printerSettings;

        return $this;
    }

    /**
     * isset print.
     *
     * Po vytvoření záznamu se provede jeho tisk.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetPrint($index)
    {
        return isset($this->print[$index]);
    }

    /**
     * unset print.
     *
     * Po vytvoření záznamu se provede jeho tisk.
     *
     * @param int|string $index
     */
    public function unsetPrint($index): void
    {
        unset($this->print[$index]);
    }

    /**
     * Gets as print.
     *
     * Po vytvoření záznamu se provede jeho tisk.
     *
     * @return \Pohoda\Print\PrinterSettingsType[]
     */
    public function getPrint()
    {
        return $this->print;
    }

    /**
     * Sets a new print.
     *
     * Po vytvoření záznamu se provede jeho tisk.
     *
     * @param \Pohoda\Print\PrinterSettingsType[] $print
     *
     * @return self
     */
    public function setPrint(?array $print = null)
    {
        $this->print = $print;

        return $this;
    }
}
