<?php

namespace Pohoda\Prodejka;

/**
 * Class representing EKasaType
 *
 * Informace pro eKasu (pouze SK verze).
 * XSD Type: eKasaType
 */
class EKasaType
{
    /**
     * Unikátny identifikátor dokladu.
     *
     * @var string $eKasaID
     */
    private $eKasaID = null;

    /**
     * OKP (Overovací kód podnikateľa).
     *
     * @var string $eKasaOKP
     */
    private $eKasaOKP = null;

    /**
     * Poradové číslo paragónu.
     *
     * @var int $eKasaParNumber
     */
    private $eKasaParNumber = null;

    /**
     * Dátum a čas vytvorenia paragónu.
     *
     * @var \DateTime $eKasaDateOfPar
     */
    private $eKasaDateOfPar = null;

    /**
     * Tlač na FM.
     *
     * @var string $printFM
     */
    private $printFM = null;

    /**
     * Gets as eKasaID
     *
     * Unikátny identifikátor dokladu.
     *
     * @return string
     */
    public function getEKasaID()
    {
        return $this->eKasaID;
    }

    /**
     * Sets a new eKasaID
     *
     * Unikátny identifikátor dokladu.
     *
     * @param string $eKasaID
     * @return self
     */
    public function setEKasaID($eKasaID)
    {
        $this->eKasaID = $eKasaID;
        return $this;
    }

    /**
     * Gets as eKasaOKP
     *
     * OKP (Overovací kód podnikateľa).
     *
     * @return string
     */
    public function getEKasaOKP()
    {
        return $this->eKasaOKP;
    }

    /**
     * Sets a new eKasaOKP
     *
     * OKP (Overovací kód podnikateľa).
     *
     * @param string $eKasaOKP
     * @return self
     */
    public function setEKasaOKP($eKasaOKP)
    {
        $this->eKasaOKP = $eKasaOKP;
        return $this;
    }

    /**
     * Gets as eKasaParNumber
     *
     * Poradové číslo paragónu.
     *
     * @return int
     */
    public function getEKasaParNumber()
    {
        return $this->eKasaParNumber;
    }

    /**
     * Sets a new eKasaParNumber
     *
     * Poradové číslo paragónu.
     *
     * @param int $eKasaParNumber
     * @return self
     */
    public function setEKasaParNumber($eKasaParNumber)
    {
        $this->eKasaParNumber = $eKasaParNumber;
        return $this;
    }

    /**
     * Gets as eKasaDateOfPar
     *
     * Dátum a čas vytvorenia paragónu.
     *
     * @return \DateTime
     */
    public function getEKasaDateOfPar()
    {
        return $this->eKasaDateOfPar;
    }

    /**
     * Sets a new eKasaDateOfPar
     *
     * Dátum a čas vytvorenia paragónu.
     *
     * @param \DateTime $eKasaDateOfPar
     * @return self
     */
    public function setEKasaDateOfPar(?\DateTime $eKasaDateOfPar = null)
    {
        $this->eKasaDateOfPar = $eKasaDateOfPar;
        return $this;
    }

    /**
     * Gets as printFM
     *
     * Tlač na FM.
     *
     * @return string
     */
    public function getPrintFM()
    {
        return $this->printFM;
    }

    /**
     * Sets a new printFM
     *
     * Tlač na FM.
     *
     * @param string $printFM
     * @return self
     */
    public function setPrintFM($printFM)
    {
        $this->printFM = $printFM;
        return $this;
    }
}

