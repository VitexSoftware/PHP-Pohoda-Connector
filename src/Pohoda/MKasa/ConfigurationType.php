<?php

namespace Pohoda\MKasa;

/**
 * Class representing ConfigurationType
 *
 *
 * XSD Type: configurationType
 */
class ConfigurationType
{
    /**
     * @var string $pohodaSNID
     */
    private $pohodaSNID = null;

    /**
     * @var int $pohodaPackNum
     */
    private $pohodaPackNum = null;

    /**
     * @var \Pohoda\MKasa\CompanyInfoType $companyInfo
     */
    private $companyInfo = null;

    /**
     * @var \Pohoda\MKasa\KasaInfoType $kasaInfo
     */
    private $kasaInfo = null;

    /**
     * @var \Pohoda\MKasa\PohodaRestrictionType $pohodaRestriction
     */
    private $pohodaRestriction = null;

    /**
     * @var \Pohoda\MKasa\ConfigurationType\GlobalSettingsAType $globalSettings
     */
    private $globalSettings = null;

    /**
     * Gets as pohodaSNID
     *
     * @return string
     */
    public function getPohodaSNID()
    {
        return $this->pohodaSNID;
    }

    /**
     * Sets a new pohodaSNID
     *
     * @param string $pohodaSNID
     * @return self
     */
    public function setPohodaSNID($pohodaSNID)
    {
        $this->pohodaSNID = $pohodaSNID;
        return $this;
    }

    /**
     * Gets as pohodaPackNum
     *
     * @return int
     */
    public function getPohodaPackNum()
    {
        return $this->pohodaPackNum;
    }

    /**
     * Sets a new pohodaPackNum
     *
     * @param int $pohodaPackNum
     * @return self
     */
    public function setPohodaPackNum($pohodaPackNum)
    {
        $this->pohodaPackNum = $pohodaPackNum;
        return $this;
    }

    /**
     * Gets as companyInfo
     *
     * @return \Pohoda\MKasa\CompanyInfoType
     */
    public function getCompanyInfo()
    {
        return $this->companyInfo;
    }

    /**
     * Sets a new companyInfo
     *
     * @param \Pohoda\MKasa\CompanyInfoType $companyInfo
     * @return self
     */
    public function setCompanyInfo(\Pohoda\MKasa\CompanyInfoType $companyInfo)
    {
        $this->companyInfo = $companyInfo;
        return $this;
    }

    /**
     * Gets as kasaInfo
     *
     * @return \Pohoda\MKasa\KasaInfoType
     */
    public function getKasaInfo()
    {
        return $this->kasaInfo;
    }

    /**
     * Sets a new kasaInfo
     *
     * @param \Pohoda\MKasa\KasaInfoType $kasaInfo
     * @return self
     */
    public function setKasaInfo(\Pohoda\MKasa\KasaInfoType $kasaInfo)
    {
        $this->kasaInfo = $kasaInfo;
        return $this;
    }

    /**
     * Gets as pohodaRestriction
     *
     * @return \Pohoda\MKasa\PohodaRestrictionType
     */
    public function getPohodaRestriction()
    {
        return $this->pohodaRestriction;
    }

    /**
     * Sets a new pohodaRestriction
     *
     * @param \Pohoda\MKasa\PohodaRestrictionType $pohodaRestriction
     * @return self
     */
    public function setPohodaRestriction(\Pohoda\MKasa\PohodaRestrictionType $pohodaRestriction)
    {
        $this->pohodaRestriction = $pohodaRestriction;
        return $this;
    }

    /**
     * Gets as globalSettings
     *
     * @return \Pohoda\MKasa\ConfigurationType\GlobalSettingsAType
     */
    public function getGlobalSettings()
    {
        return $this->globalSettings;
    }

    /**
     * Sets a new globalSettings
     *
     * @param \Pohoda\MKasa\ConfigurationType\GlobalSettingsAType $globalSettings
     * @return self
     */
    public function setGlobalSettings(\Pohoda\MKasa\ConfigurationType\GlobalSettingsAType $globalSettings)
    {
        $this->globalSettings = $globalSettings;
        return $this;
    }
}
