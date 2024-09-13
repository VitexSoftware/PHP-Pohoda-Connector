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

namespace Pohoda\Type;

/**
 * Class representing DetailEETType.
 *
 * XSD Type: detailEETType
 */
class DetailEETType
{
    /**
     * Číslo dokladu.
     */
    private string $numberOfDocument = null;

    /**
     * Datum tržby (včetně časového posunu).
     */
    private \DateTime $dateOfSale = null;

    /**
     * Částka v Kč.
     */
    private float $price = null;

    /**
     * PKP.
     */
    private string $pKP = null;

    /**
     * BKP.
     */
    private string $bKP = null;

    /**
     * FIK. Nemusí být uvedeno při použití režimu 'simplified'.
     */
    private string $fIK = null;

    /**
     * Provozovna.
     */
    private string $establishment = null;

    /**
     * Pokladní zařízení.
     */
    private string $cashDevice = null;

    /**
     * Režim.
     */
    private string $mode = null;

    /**
     * Datum odeslání. Nemusí být uvedeno při použití režimu 'simplified'.
     */
    private \DateTime $dateOfSend = null;

    /**
     * Datum přijetí. Nemusí být uvedeno při použití režimu 'simplified'.
     */
    private \DateTime $dateOfAcceptance = null;

    /**
     * Testovací režim.
     */
    private string $testMode = null;

    /**
     * DIČ poplatníka.
     */
    private string $vATIdOfPayer = null;

    /**
     * DIČ pověřujícího poplatníka.
     */
    private string $vATIdOfAuthPayer = null;

    /**
     * Celková částka plnění osvobozených od DPH, ostatních plnění.
     */
    private float $priceExempt = null;

    /**
     * Celkový základ daně se základní sazbou DPH.
     */
    private float $priceBasic = null;

    /**
     * Celková DPH se základní sazbou.
     */
    private float $vATBasic = null;

    /**
     * Celkový základ daně s první sníženou sazbou DPH.
     */
    private float $priceReduced = null;

    /**
     * Celková DPH s první sníženou sazbou.
     */
    private float $vATReduced = null;

    /**
     * Celkový základ daně s druhou sníženou sazbou DPH.
     */
    private float $priceSecondReduced = null;

    /**
     * Celková DPH s druhou sníženou sazbou.
     */
    private float $vATSecondReduced = null;

    /**
     * Celková částka v režimu DPH pro cestovní službu.
     */
    private float $travelService = null;

    /**
     * Celková částka v režimu DPH pro prodej použitého zboží se základní sazbou.
     */
    private float $usedGoodsBasic = null;

    /**
     * Celková částka v režimu DPH pro prodej použitého zboží s první sníženou sazbou.
     */
    private float $usedGoodsFirstReduced = null;

    /**
     * Celková částka v režimu DPH pro prodej použitého zboží s druhou sníženou sazbou.
     */
    private float $usedGoodsSecondReduced = null;

    /**
     * Celková částka plateb určená k následnému čerpání nebo zúčtování.
     */
    private float $forApply = null;

    /**
     * Celková částka plateb, které jsou následným čerpáním nebo zúčtováním platby.
     */
    private float $apply = null;

    /**
     * První zaslání údajů o tržbě.
     */
    private bool $firstSending = null;

    /**
     * UUID datové zprávy evidované tržby, je generováno pokladním zařízením poplatníka.
     */
    private string $uUID = null;
    private int $protocolVersion = null;

    /**
     * Gets as numberOfDocument.
     *
     * Číslo dokladu.
     *
     * @return string
     */
    public function getNumberOfDocument()
    {
        return $this->numberOfDocument;
    }

    /**
     * Sets a new numberOfDocument.
     *
     * Číslo dokladu.
     *
     * @param string $numberOfDocument
     *
     * @return self
     */
    public function setNumberOfDocument($numberOfDocument)
    {
        $this->numberOfDocument = $numberOfDocument;

        return $this;
    }

    /**
     * Gets as dateOfSale.
     *
     * Datum tržby (včetně časového posunu).
     *
     * @return \DateTime
     */
    public function getDateOfSale()
    {
        return $this->dateOfSale;
    }

    /**
     * Sets a new dateOfSale.
     *
     * Datum tržby (včetně časového posunu).
     *
     * @return self
     */
    public function setDateOfSale(\DateTime $dateOfSale)
    {
        $this->dateOfSale = $dateOfSale;

        return $this;
    }

    /**
     * Gets as price.
     *
     * Částka v Kč.
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price.
     *
     * Částka v Kč.
     *
     * @param float $price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Gets as pKP.
     *
     * PKP.
     *
     * @return string
     */
    public function getPKP()
    {
        return $this->pKP;
    }

    /**
     * Sets a new pKP.
     *
     * PKP.
     *
     * @param string $pKP
     *
     * @return self
     */
    public function setPKP($pKP)
    {
        $this->pKP = $pKP;

        return $this;
    }

    /**
     * Gets as bKP.
     *
     * BKP.
     *
     * @return string
     */
    public function getBKP()
    {
        return $this->bKP;
    }

    /**
     * Sets a new bKP.
     *
     * BKP.
     *
     * @param string $bKP
     *
     * @return self
     */
    public function setBKP($bKP)
    {
        $this->bKP = $bKP;

        return $this;
    }

    /**
     * Gets as fIK.
     *
     * FIK. Nemusí být uvedeno při použití režimu 'simplified'.
     *
     * @return string
     */
    public function getFIK()
    {
        return $this->fIK;
    }

    /**
     * Sets a new fIK.
     *
     * FIK. Nemusí být uvedeno při použití režimu 'simplified'.
     *
     * @param string $fIK
     *
     * @return self
     */
    public function setFIK($fIK)
    {
        $this->fIK = $fIK;

        return $this;
    }

    /**
     * Gets as establishment.
     *
     * Provozovna.
     *
     * @return string
     */
    public function getEstablishment()
    {
        return $this->establishment;
    }

    /**
     * Sets a new establishment.
     *
     * Provozovna.
     *
     * @param string $establishment
     *
     * @return self
     */
    public function setEstablishment($establishment)
    {
        $this->establishment = $establishment;

        return $this;
    }

    /**
     * Gets as cashDevice.
     *
     * Pokladní zařízení.
     *
     * @return string
     */
    public function getCashDevice()
    {
        return $this->cashDevice;
    }

    /**
     * Sets a new cashDevice.
     *
     * Pokladní zařízení.
     *
     * @param string $cashDevice
     *
     * @return self
     */
    public function setCashDevice($cashDevice)
    {
        $this->cashDevice = $cashDevice;

        return $this;
    }

    /**
     * Gets as mode.
     *
     * Režim.
     *
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Sets a new mode.
     *
     * Režim.
     *
     * @param string $mode
     *
     * @return self
     */
    public function setMode($mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * Gets as dateOfSend.
     *
     * Datum odeslání. Nemusí být uvedeno při použití režimu 'simplified'.
     *
     * @return \DateTime
     */
    public function getDateOfSend()
    {
        return $this->dateOfSend;
    }

    /**
     * Sets a new dateOfSend.
     *
     * Datum odeslání. Nemusí být uvedeno při použití režimu 'simplified'.
     *
     * @return self
     */
    public function setDateOfSend(?\DateTime $dateOfSend = null)
    {
        $this->dateOfSend = $dateOfSend;

        return $this;
    }

    /**
     * Gets as dateOfAcceptance.
     *
     * Datum přijetí. Nemusí být uvedeno při použití režimu 'simplified'.
     *
     * @return \DateTime
     */
    public function getDateOfAcceptance()
    {
        return $this->dateOfAcceptance;
    }

    /**
     * Sets a new dateOfAcceptance.
     *
     * Datum přijetí. Nemusí být uvedeno při použití režimu 'simplified'.
     *
     * @return self
     */
    public function setDateOfAcceptance(?\DateTime $dateOfAcceptance = null)
    {
        $this->dateOfAcceptance = $dateOfAcceptance;

        return $this;
    }

    /**
     * Gets as testMode.
     *
     * Testovací režim.
     *
     * @return string
     */
    public function getTestMode()
    {
        return $this->testMode;
    }

    /**
     * Sets a new testMode.
     *
     * Testovací režim.
     *
     * @param string $testMode
     *
     * @return self
     */
    public function setTestMode($testMode)
    {
        $this->testMode = $testMode;

        return $this;
    }

    /**
     * Gets as vATIdOfPayer.
     *
     * DIČ poplatníka.
     *
     * @return string
     */
    public function getVATIdOfPayer()
    {
        return $this->vATIdOfPayer;
    }

    /**
     * Sets a new vATIdOfPayer.
     *
     * DIČ poplatníka.
     *
     * @param string $vATIdOfPayer
     *
     * @return self
     */
    public function setVATIdOfPayer($vATIdOfPayer)
    {
        $this->vATIdOfPayer = $vATIdOfPayer;

        return $this;
    }

    /**
     * Gets as vATIdOfAuthPayer.
     *
     * DIČ pověřujícího poplatníka.
     *
     * @return string
     */
    public function getVATIdOfAuthPayer()
    {
        return $this->vATIdOfAuthPayer;
    }

    /**
     * Sets a new vATIdOfAuthPayer.
     *
     * DIČ pověřujícího poplatníka.
     *
     * @param string $vATIdOfAuthPayer
     *
     * @return self
     */
    public function setVATIdOfAuthPayer($vATIdOfAuthPayer)
    {
        $this->vATIdOfAuthPayer = $vATIdOfAuthPayer;

        return $this;
    }

    /**
     * Gets as priceExempt.
     *
     * Celková částka plnění osvobozených od DPH, ostatních plnění.
     *
     * @return float
     */
    public function getPriceExempt()
    {
        return $this->priceExempt;
    }

    /**
     * Sets a new priceExempt.
     *
     * Celková částka plnění osvobozených od DPH, ostatních plnění.
     *
     * @param float $priceExempt
     *
     * @return self
     */
    public function setPriceExempt($priceExempt)
    {
        $this->priceExempt = $priceExempt;

        return $this;
    }

    /**
     * Gets as priceBasic.
     *
     * Celkový základ daně se základní sazbou DPH.
     *
     * @return float
     */
    public function getPriceBasic()
    {
        return $this->priceBasic;
    }

    /**
     * Sets a new priceBasic.
     *
     * Celkový základ daně se základní sazbou DPH.
     *
     * @param float $priceBasic
     *
     * @return self
     */
    public function setPriceBasic($priceBasic)
    {
        $this->priceBasic = $priceBasic;

        return $this;
    }

    /**
     * Gets as vATBasic.
     *
     * Celková DPH se základní sazbou.
     *
     * @return float
     */
    public function getVATBasic()
    {
        return $this->vATBasic;
    }

    /**
     * Sets a new vATBasic.
     *
     * Celková DPH se základní sazbou.
     *
     * @param float $vATBasic
     *
     * @return self
     */
    public function setVATBasic($vATBasic)
    {
        $this->vATBasic = $vATBasic;

        return $this;
    }

    /**
     * Gets as priceReduced.
     *
     * Celkový základ daně s první sníženou sazbou DPH.
     *
     * @return float
     */
    public function getPriceReduced()
    {
        return $this->priceReduced;
    }

    /**
     * Sets a new priceReduced.
     *
     * Celkový základ daně s první sníženou sazbou DPH.
     *
     * @param float $priceReduced
     *
     * @return self
     */
    public function setPriceReduced($priceReduced)
    {
        $this->priceReduced = $priceReduced;

        return $this;
    }

    /**
     * Gets as vATReduced.
     *
     * Celková DPH s první sníženou sazbou.
     *
     * @return float
     */
    public function getVATReduced()
    {
        return $this->vATReduced;
    }

    /**
     * Sets a new vATReduced.
     *
     * Celková DPH s první sníženou sazbou.
     *
     * @param float $vATReduced
     *
     * @return self
     */
    public function setVATReduced($vATReduced)
    {
        $this->vATReduced = $vATReduced;

        return $this;
    }

    /**
     * Gets as priceSecondReduced.
     *
     * Celkový základ daně s druhou sníženou sazbou DPH.
     *
     * @return float
     */
    public function getPriceSecondReduced()
    {
        return $this->priceSecondReduced;
    }

    /**
     * Sets a new priceSecondReduced.
     *
     * Celkový základ daně s druhou sníženou sazbou DPH.
     *
     * @param float $priceSecondReduced
     *
     * @return self
     */
    public function setPriceSecondReduced($priceSecondReduced)
    {
        $this->priceSecondReduced = $priceSecondReduced;

        return $this;
    }

    /**
     * Gets as vATSecondReduced.
     *
     * Celková DPH s druhou sníženou sazbou.
     *
     * @return float
     */
    public function getVATSecondReduced()
    {
        return $this->vATSecondReduced;
    }

    /**
     * Sets a new vATSecondReduced.
     *
     * Celková DPH s druhou sníženou sazbou.
     *
     * @param float $vATSecondReduced
     *
     * @return self
     */
    public function setVATSecondReduced($vATSecondReduced)
    {
        $this->vATSecondReduced = $vATSecondReduced;

        return $this;
    }

    /**
     * Gets as travelService.
     *
     * Celková částka v režimu DPH pro cestovní službu.
     *
     * @return float
     */
    public function getTravelService()
    {
        return $this->travelService;
    }

    /**
     * Sets a new travelService.
     *
     * Celková částka v režimu DPH pro cestovní službu.
     *
     * @param float $travelService
     *
     * @return self
     */
    public function setTravelService($travelService)
    {
        $this->travelService = $travelService;

        return $this;
    }

    /**
     * Gets as usedGoodsBasic.
     *
     * Celková částka v režimu DPH pro prodej použitého zboží se základní sazbou.
     *
     * @return float
     */
    public function getUsedGoodsBasic()
    {
        return $this->usedGoodsBasic;
    }

    /**
     * Sets a new usedGoodsBasic.
     *
     * Celková částka v režimu DPH pro prodej použitého zboží se základní sazbou.
     *
     * @param float $usedGoodsBasic
     *
     * @return self
     */
    public function setUsedGoodsBasic($usedGoodsBasic)
    {
        $this->usedGoodsBasic = $usedGoodsBasic;

        return $this;
    }

    /**
     * Gets as usedGoodsFirstReduced.
     *
     * Celková částka v režimu DPH pro prodej použitého zboží s první sníženou sazbou.
     *
     * @return float
     */
    public function getUsedGoodsFirstReduced()
    {
        return $this->usedGoodsFirstReduced;
    }

    /**
     * Sets a new usedGoodsFirstReduced.
     *
     * Celková částka v režimu DPH pro prodej použitého zboží s první sníženou sazbou.
     *
     * @param float $usedGoodsFirstReduced
     *
     * @return self
     */
    public function setUsedGoodsFirstReduced($usedGoodsFirstReduced)
    {
        $this->usedGoodsFirstReduced = $usedGoodsFirstReduced;

        return $this;
    }

    /**
     * Gets as usedGoodsSecondReduced.
     *
     * Celková částka v režimu DPH pro prodej použitého zboží s druhou sníženou sazbou.
     *
     * @return float
     */
    public function getUsedGoodsSecondReduced()
    {
        return $this->usedGoodsSecondReduced;
    }

    /**
     * Sets a new usedGoodsSecondReduced.
     *
     * Celková částka v režimu DPH pro prodej použitého zboží s druhou sníženou sazbou.
     *
     * @param float $usedGoodsSecondReduced
     *
     * @return self
     */
    public function setUsedGoodsSecondReduced($usedGoodsSecondReduced)
    {
        $this->usedGoodsSecondReduced = $usedGoodsSecondReduced;

        return $this;
    }

    /**
     * Gets as forApply.
     *
     * Celková částka plateb určená k následnému čerpání nebo zúčtování.
     *
     * @return float
     */
    public function getForApply()
    {
        return $this->forApply;
    }

    /**
     * Sets a new forApply.
     *
     * Celková částka plateb určená k následnému čerpání nebo zúčtování.
     *
     * @param float $forApply
     *
     * @return self
     */
    public function setForApply($forApply)
    {
        $this->forApply = $forApply;

        return $this;
    }

    /**
     * Gets as apply.
     *
     * Celková částka plateb, které jsou následným čerpáním nebo zúčtováním platby.
     *
     * @return float
     */
    public function getApply()
    {
        return $this->apply;
    }

    /**
     * Sets a new apply.
     *
     * Celková částka plateb, které jsou následným čerpáním nebo zúčtováním platby.
     *
     * @param float $apply
     *
     * @return self
     */
    public function setApply($apply)
    {
        $this->apply = $apply;

        return $this;
    }

    /**
     * Gets as firstSending.
     *
     * První zaslání údajů o tržbě.
     *
     * @return bool
     */
    public function getFirstSending()
    {
        return $this->firstSending;
    }

    /**
     * Sets a new firstSending.
     *
     * První zaslání údajů o tržbě.
     *
     * @param bool $firstSending
     *
     * @return self
     */
    public function setFirstSending($firstSending)
    {
        $this->firstSending = $firstSending;

        return $this;
    }

    /**
     * Gets as uUID.
     *
     * UUID datové zprávy evidované tržby, je generováno pokladním zařízením poplatníka.
     *
     * @return string
     */
    public function getUUID()
    {
        return $this->uUID;
    }

    /**
     * Sets a new uUID.
     *
     * UUID datové zprávy evidované tržby, je generováno pokladním zařízením poplatníka.
     *
     * @param string $uUID
     *
     * @return self
     */
    public function setUUID($uUID)
    {
        $this->uUID = $uUID;

        return $this;
    }

    /**
     * Gets as protocolVersion.
     *
     * @return int
     */
    public function getProtocolVersion()
    {
        return $this->protocolVersion;
    }

    /**
     * Sets a new protocolVersion.
     *
     * @param int $protocolVersion
     *
     * @return self
     */
    public function setProtocolVersion($protocolVersion)
    {
        $this->protocolVersion = $protocolVersion;

        return $this;
    }
}
