<?php

namespace Pohoda\AddressBook;

/**
 * Class representing AddressbookType
 *
 *
 * XSD Type: addressbookType
 */
class AddressbookType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     *
     * @var \Pohoda\AddressBook\ActionTypeType $actionType
     */
    private $actionType = null;

    /**
     * @var \Pohoda\AddressBook\AddressbookHeaderType $addressbookHeader
     */
    private $addressbookHeader = null;

    /**
     * @var \Pohoda\AddressBook\AccountItemType[] $addressbookAccount
     */
    private $addressbookAccount = null;

    /**
     * @var \Pohoda\AddressBook\AddressbookGDPRType $addressbookGDPR
     */
    private $addressbookGDPR = null;

    /**
     * Po vytvoření záznamu se provede jeho tisk.
     *
     * @var \Pohoda\Print\PrinterSettingsType[] $print
     */
    private $print = null;

    /**
     * Gets as version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as actionType
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
     * Sets a new actionType
     *
     * Typ práce s dokladem. Výchozí hodnota je přidání nového dokladu.
     *
     * @param \Pohoda\AddressBook\ActionTypeType $actionType
     * @return self
     */
    public function setActionType(?\Pohoda\AddressBook\ActionTypeType $actionType = null)
    {
        $this->actionType = $actionType;
        return $this;
    }

    /**
     * Gets as addressbookHeader
     *
     * @return \Pohoda\AddressBook\AddressbookHeaderType
     */
    public function getAddressbookHeader()
    {
        return $this->addressbookHeader;
    }

    /**
     * Sets a new addressbookHeader
     *
     * @param \Pohoda\AddressBook\AddressbookHeaderType $addressbookHeader
     * @return self
     */
    public function setAddressbookHeader(?\Pohoda\AddressBook\AddressbookHeaderType $addressbookHeader = null)
    {
        $this->addressbookHeader = $addressbookHeader;
        return $this;
    }

    /**
     * Adds as accountItem
     *
     * @return self
     * @param \Pohoda\AddressBook\AccountItemType $accountItem
     */
    public function addToAddressbookAccount(\Pohoda\AddressBook\AccountItemType $accountItem)
    {
        $this->addressbookAccount[] = $accountItem;
        return $this;
    }

    /**
     * isset addressbookAccount
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddressbookAccount($index)
    {
        return isset($this->addressbookAccount[$index]);
    }

    /**
     * unset addressbookAccount
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddressbookAccount($index)
    {
        unset($this->addressbookAccount[$index]);
    }

    /**
     * Gets as addressbookAccount
     *
     * @return \Pohoda\AddressBook\AccountItemType[]
     */
    public function getAddressbookAccount()
    {
        return $this->addressbookAccount;
    }

    /**
     * Sets a new addressbookAccount
     *
     * @param \Pohoda\AddressBook\AccountItemType[] $addressbookAccount
     * @return self
     */
    public function setAddressbookAccount(array $addressbookAccount = null)
    {
        $this->addressbookAccount = $addressbookAccount;
        return $this;
    }

    /**
     * Gets as addressbookGDPR
     *
     * @return \Pohoda\AddressBook\AddressbookGDPRType
     */
    public function getAddressbookGDPR()
    {
        return $this->addressbookGDPR;
    }

    /**
     * Sets a new addressbookGDPR
     *
     * @param \Pohoda\AddressBook\AddressbookGDPRType $addressbookGDPR
     * @return self
     */
    public function setAddressbookGDPR(?\Pohoda\AddressBook\AddressbookGDPRType $addressbookGDPR = null)
    {
        $this->addressbookGDPR = $addressbookGDPR;
        return $this;
    }

    /**
     * Adds as printerSettings
     *
     * Po vytvoření záznamu se provede jeho tisk.
     *
     * @return self
     * @param \Pohoda\Print\PrinterSettingsType $printerSettings
     */
    public function addToPrint(\Pohoda\Print\PrinterSettingsType $printerSettings)
    {
        $this->print[] = $printerSettings;
        return $this;
    }

    /**
     * isset print
     *
     * Po vytvoření záznamu se provede jeho tisk.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrint($index)
    {
        return isset($this->print[$index]);
    }

    /**
     * unset print
     *
     * Po vytvoření záznamu se provede jeho tisk.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrint($index)
    {
        unset($this->print[$index]);
    }

    /**
     * Gets as print
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
     * Sets a new print
     *
     * Po vytvoření záznamu se provede jeho tisk.
     *
     * @param \Pohoda\Print\PrinterSettingsType[] $print
     * @return self
     */
    public function setPrint(array $print = null)
    {
        $this->print = $print;
        return $this;
    }
}
