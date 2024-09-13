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

namespace Pohoda\Prodejka;

/**
 * Class representing EKasaType.
 *
 * Informace pro eKasu (pouze SK verze).
 * XSD Type: eKasaType
 */
class EKasaType
{
    /**
     * Unikátny identifikátor dokladu.
     */
    private string $eKasaID = null;

    /**
     * OKP (Overovací kód podnikateľa).
     */
    private string $eKasaOKP = null;

    /**
     * Poradové číslo paragónu.
     */
    private int $eKasaParNumber = null;

    /**
     * Dátum a čas vytvorenia paragónu.
     */
    private \DateTime $eKasaDateOfPar = null;

    /**
     * Tlač na FM.
     */
    private string $printFM = null;

    /**
     * Gets as eKasaID.
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
     * Sets a new eKasaID.
     *
     * Unikátny identifikátor dokladu.
     *
     * @param string $eKasaID
     *
     * @return self
     */
    public function setEKasaID($eKasaID)
    {
        $this->eKasaID = $eKasaID;

        return $this;
    }

    /**
     * Gets as eKasaOKP.
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
     * Sets a new eKasaOKP.
     *
     * OKP (Overovací kód podnikateľa).
     *
     * @param string $eKasaOKP
     *
     * @return self
     */
    public function setEKasaOKP($eKasaOKP)
    {
        $this->eKasaOKP = $eKasaOKP;

        return $this;
    }

    /**
     * Gets as eKasaParNumber.
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
     * Sets a new eKasaParNumber.
     *
     * Poradové číslo paragónu.
     *
     * @param int $eKasaParNumber
     *
     * @return self
     */
    public function setEKasaParNumber($eKasaParNumber)
    {
        $this->eKasaParNumber = $eKasaParNumber;

        return $this;
    }

    /**
     * Gets as eKasaDateOfPar.
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
     * Sets a new eKasaDateOfPar.
     *
     * Dátum a čas vytvorenia paragónu.
     *
     * @return self
     */
    public function setEKasaDateOfPar(?\DateTime $eKasaDateOfPar = null)
    {
        $this->eKasaDateOfPar = $eKasaDateOfPar;

        return $this;
    }

    /**
     * Gets as printFM.
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
     * Sets a new printFM.
     *
     * Tlač na FM.
     *
     * @param string $printFM
     *
     * @return self
     */
    public function setPrintFM($printFM)
    {
        $this->printFM = $printFM;

        return $this;
    }
}
