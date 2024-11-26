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
 * Class representing ConfigurationType.
 *
 * XSD Type: configurationType
 */
class ConfigurationType
{
    private ?string $pohodaSNID = null;
    private ?int $pohodaPackNum = null;
    private ?\Pohoda\MKasa\CompanyInfoType $companyInfo = null;
    private ?\Pohoda\MKasa\KasaInfoType $kasaInfo = null;
    private ?\Pohoda\MKasa\PohodaRestrictionType $pohodaRestriction = null;
    private ?\Pohoda\MKasa\ConfigurationType\GlobalSettingsAType $globalSettings = null;

    /**
     * Gets as pohodaSNID.
     *
     * @return string
     */
    public function getPohodaSNID()
    {
        return $this->pohodaSNID;
    }

    /**
     * Sets a new pohodaSNID.
     *
     * @param string $pohodaSNID
     *
     * @return self
     */
    public function setPohodaSNID($pohodaSNID)
    {
        $this->pohodaSNID = $pohodaSNID;

        return $this;
    }

    /**
     * Gets as pohodaPackNum.
     *
     * @return int
     */
    public function getPohodaPackNum()
    {
        return $this->pohodaPackNum;
    }

    /**
     * Sets a new pohodaPackNum.
     *
     * @param int $pohodaPackNum
     *
     * @return self
     */
    public function setPohodaPackNum($pohodaPackNum)
    {
        $this->pohodaPackNum = $pohodaPackNum;

        return $this;
    }

    /**
     * Gets as companyInfo.
     *
     * @return \Pohoda\MKasa\CompanyInfoType
     */
    public function getCompanyInfo()
    {
        return $this->companyInfo;
    }

    /**
     * Sets a new companyInfo.
     *
     * @return self
     */
    public function setCompanyInfo(\Pohoda\MKasa\CompanyInfoType $companyInfo)
    {
        $this->companyInfo = $companyInfo;

        return $this;
    }

    /**
     * Gets as kasaInfo.
     *
     * @return \Pohoda\MKasa\KasaInfoType
     */
    public function getKasaInfo()
    {
        return $this->kasaInfo;
    }

    /**
     * Sets a new kasaInfo.
     *
     * @return self
     */
    public function setKasaInfo(\Pohoda\MKasa\KasaInfoType $kasaInfo)
    {
        $this->kasaInfo = $kasaInfo;

        return $this;
    }

    /**
     * Gets as pohodaRestriction.
     *
     * @return \Pohoda\MKasa\PohodaRestrictionType
     */
    public function getPohodaRestriction()
    {
        return $this->pohodaRestriction;
    }

    /**
     * Sets a new pohodaRestriction.
     *
     * @return self
     */
    public function setPohodaRestriction(\Pohoda\MKasa\PohodaRestrictionType $pohodaRestriction)
    {
        $this->pohodaRestriction = $pohodaRestriction;

        return $this;
    }

    /**
     * Gets as globalSettings.
     *
     * @return \Pohoda\MKasa\ConfigurationType\GlobalSettingsAType
     */
    public function getGlobalSettings()
    {
        return $this->globalSettings;
    }

    /**
     * Sets a new globalSettings.
     *
     * @return self
     */
    public function setGlobalSettings(\Pohoda\MKasa\ConfigurationType\GlobalSettingsAType $globalSettings)
    {
        $this->globalSettings = $globalSettings;

        return $this;
    }
}
