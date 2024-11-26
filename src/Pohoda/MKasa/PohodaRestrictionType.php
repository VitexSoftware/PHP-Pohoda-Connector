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

namespace Pohoda\MKasa;

/**
 * Class representing PohodaRestrictionType.
 *
 * XSD Type: pohodaRestrictionType
 */
class PohodaRestrictionType
{
    private ?string $lockPin = null;
    private ?string $administration = null;
    private ?string $administrationPass = null;
    private ?bool $createCustomer = null;
    private ?string $changePrize = null;
    private ?string $textItems = null;
    private ?string $depositsWithdrawals = null;
    private ?string $delayedDocument = null;
    private ?string $agendaHistory = null;
    private ?string $createSKPV = null;
    private ?string $changeEet = null;
    private ?string $deleteRecords = null;
    private ?string $exportXml = null;
    private ?string $createBackup = null;
    private ?string $restoreBackup = null;
    private ?string $createCashRegisterDoc = null;
    private ?string $refund = null;
    private ?bool $accountDayByDay = null;
    private ?bool $canDoDiffExport = null;

    /**
     * Gets as lockPin.
     *
     * @return string
     */
    public function getLockPin()
    {
        return $this->lockPin;
    }

    /**
     * Sets a new lockPin.
     *
     * @param string $lockPin
     *
     * @return self
     */
    public function setLockPin($lockPin)
    {
        $this->lockPin = $lockPin;

        return $this;
    }

    /**
     * Gets as administration.
     *
     * @return string
     */
    public function getAdministration()
    {
        return $this->administration;
    }

    /**
     * Sets a new administration.
     *
     * @param string $administration
     *
     * @return self
     */
    public function setAdministration($administration)
    {
        $this->administration = $administration;

        return $this;
    }

    /**
     * Gets as administrationPass.
     *
     * @return string
     */
    public function getAdministrationPass()
    {
        return $this->administrationPass;
    }

    /**
     * Sets a new administrationPass.
     *
     * @param string $administrationPass
     *
     * @return self
     */
    public function setAdministrationPass($administrationPass)
    {
        $this->administrationPass = $administrationPass;

        return $this;
    }

    /**
     * Gets as createCustomer.
     *
     * @return bool
     */
    public function getCreateCustomer()
    {
        return $this->createCustomer;
    }

    /**
     * Sets a new createCustomer.
     *
     * @param bool $createCustomer
     *
     * @return self
     */
    public function setCreateCustomer($createCustomer)
    {
        $this->createCustomer = $createCustomer;

        return $this;
    }

    /**
     * Gets as changePrize.
     *
     * @return string
     */
    public function getChangePrize()
    {
        return $this->changePrize;
    }

    /**
     * Sets a new changePrize.
     *
     * @param string $changePrize
     *
     * @return self
     */
    public function setChangePrize($changePrize)
    {
        $this->changePrize = $changePrize;

        return $this;
    }

    /**
     * Gets as textItems.
     *
     * @return string
     */
    public function getTextItems()
    {
        return $this->textItems;
    }

    /**
     * Sets a new textItems.
     *
     * @param string $textItems
     *
     * @return self
     */
    public function setTextItems($textItems)
    {
        $this->textItems = $textItems;

        return $this;
    }

    /**
     * Gets as depositsWithdrawals.
     *
     * @return string
     */
    public function getDepositsWithdrawals()
    {
        return $this->depositsWithdrawals;
    }

    /**
     * Sets a new depositsWithdrawals.
     *
     * @param string $depositsWithdrawals
     *
     * @return self
     */
    public function setDepositsWithdrawals($depositsWithdrawals)
    {
        $this->depositsWithdrawals = $depositsWithdrawals;

        return $this;
    }

    /**
     * Gets as delayedDocument.
     *
     * @return string
     */
    public function getDelayedDocument()
    {
        return $this->delayedDocument;
    }

    /**
     * Sets a new delayedDocument.
     *
     * @param string $delayedDocument
     *
     * @return self
     */
    public function setDelayedDocument($delayedDocument)
    {
        $this->delayedDocument = $delayedDocument;

        return $this;
    }

    /**
     * Gets as agendaHistory.
     *
     * @return string
     */
    public function getAgendaHistory()
    {
        return $this->agendaHistory;
    }

    /**
     * Sets a new agendaHistory.
     *
     * @param string $agendaHistory
     *
     * @return self
     */
    public function setAgendaHistory($agendaHistory)
    {
        $this->agendaHistory = $agendaHistory;

        return $this;
    }

    /**
     * Gets as createSKPV.
     *
     * @return string
     */
    public function getCreateSKPV()
    {
        return $this->createSKPV;
    }

    /**
     * Sets a new createSKPV.
     *
     * @param string $createSKPV
     *
     * @return self
     */
    public function setCreateSKPV($createSKPV)
    {
        $this->createSKPV = $createSKPV;

        return $this;
    }

    /**
     * Gets as changeEet.
     *
     * @return string
     */
    public function getChangeEet()
    {
        return $this->changeEet;
    }

    /**
     * Sets a new changeEet.
     *
     * @param string $changeEet
     *
     * @return self
     */
    public function setChangeEet($changeEet)
    {
        $this->changeEet = $changeEet;

        return $this;
    }

    /**
     * Gets as deleteRecords.
     *
     * @return string
     */
    public function getDeleteRecords()
    {
        return $this->deleteRecords;
    }

    /**
     * Sets a new deleteRecords.
     *
     * @param string $deleteRecords
     *
     * @return self
     */
    public function setDeleteRecords($deleteRecords)
    {
        $this->deleteRecords = $deleteRecords;

        return $this;
    }

    /**
     * Gets as exportXml.
     *
     * @return string
     */
    public function getExportXml()
    {
        return $this->exportXml;
    }

    /**
     * Sets a new exportXml.
     *
     * @param string $exportXml
     *
     * @return self
     */
    public function setExportXml($exportXml)
    {
        $this->exportXml = $exportXml;

        return $this;
    }

    /**
     * Gets as createBackup.
     *
     * @return string
     */
    public function getCreateBackup()
    {
        return $this->createBackup;
    }

    /**
     * Sets a new createBackup.
     *
     * @param string $createBackup
     *
     * @return self
     */
    public function setCreateBackup($createBackup)
    {
        $this->createBackup = $createBackup;

        return $this;
    }

    /**
     * Gets as restoreBackup.
     *
     * @return string
     */
    public function getRestoreBackup()
    {
        return $this->restoreBackup;
    }

    /**
     * Sets a new restoreBackup.
     *
     * @param string $restoreBackup
     *
     * @return self
     */
    public function setRestoreBackup($restoreBackup)
    {
        $this->restoreBackup = $restoreBackup;

        return $this;
    }

    /**
     * Gets as createCashRegisterDoc.
     *
     * @return string
     */
    public function getCreateCashRegisterDoc()
    {
        return $this->createCashRegisterDoc;
    }

    /**
     * Sets a new createCashRegisterDoc.
     *
     * @param string $createCashRegisterDoc
     *
     * @return self
     */
    public function setCreateCashRegisterDoc($createCashRegisterDoc)
    {
        $this->createCashRegisterDoc = $createCashRegisterDoc;

        return $this;
    }

    /**
     * Gets as refund.
     *
     * @return string
     */
    public function getRefund()
    {
        return $this->refund;
    }

    /**
     * Sets a new refund.
     *
     * @param string $refund
     *
     * @return self
     */
    public function setRefund($refund)
    {
        $this->refund = $refund;

        return $this;
    }

    /**
     * Gets as accountDayByDay.
     *
     * @return bool
     */
    public function getAccountDayByDay()
    {
        return $this->accountDayByDay;
    }

    /**
     * Sets a new accountDayByDay.
     *
     * @param bool $accountDayByDay
     *
     * @return self
     */
    public function setAccountDayByDay($accountDayByDay)
    {
        $this->accountDayByDay = $accountDayByDay;

        return $this;
    }

    /**
     * Gets as canDoDiffExport.
     *
     * @return bool
     */
    public function getCanDoDiffExport()
    {
        return $this->canDoDiffExport;
    }

    /**
     * Sets a new canDoDiffExport.
     *
     * @param bool $canDoDiffExport
     *
     * @return self
     */
    public function setCanDoDiffExport($canDoDiffExport)
    {
        $this->canDoDiffExport = $canDoDiffExport;

        return $this;
    }
}
