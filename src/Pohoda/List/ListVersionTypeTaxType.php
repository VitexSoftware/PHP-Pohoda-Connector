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
 * Class representing ListVersionTypeTaxType.
 *
 * XSD Type: listVersionTypeTax
 */
class ListVersionTypeTaxType
{
    private string $version = null;
    private \DateTime $dateTimeStamp = null;
    private \DateTime $dateValidFrom = null;
    private string $state = null;
    private string $db = null;
    private string $format = null;
    private string $contID = null;
    private string $rqFormat = null;

    /**
     * @var \Pohoda\Documentresponse\DetailType[]
     */
    private array $importDetails = null;
    private string $importData = null;

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
     * Gets as dateTimeStamp.
     *
     * @return \DateTime
     */
    public function getDateTimeStamp()
    {
        return $this->dateTimeStamp;
    }

    /**
     * Sets a new dateTimeStamp.
     *
     * @return self
     */
    public function setDateTimeStamp(\DateTime $dateTimeStamp)
    {
        $this->dateTimeStamp = $dateTimeStamp;

        return $this;
    }

    /**
     * Gets as dateValidFrom.
     *
     * @return \DateTime
     */
    public function getDateValidFrom()
    {
        return $this->dateValidFrom;
    }

    /**
     * Sets a new dateValidFrom.
     *
     * @return self
     */
    public function setDateValidFrom(\DateTime $dateValidFrom)
    {
        $this->dateValidFrom = $dateValidFrom;

        return $this;
    }

    /**
     * Gets as state.
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets a new state.
     *
     * @param string $state
     *
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Gets as db.
     *
     * @return string
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * Sets a new db.
     *
     * @param string $db
     *
     * @return self
     */
    public function setDb($db)
    {
        $this->db = $db;

        return $this;
    }

    /**
     * Gets as format.
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Sets a new format.
     *
     * @param string $format
     *
     * @return self
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Gets as contID.
     *
     * @return string
     */
    public function getContID()
    {
        return $this->contID;
    }

    /**
     * Sets a new contID.
     *
     * @param string $contID
     *
     * @return self
     */
    public function setContID($contID)
    {
        $this->contID = $contID;

        return $this;
    }

    /**
     * Gets as rqFormat.
     *
     * @return string
     */
    public function getRqFormat()
    {
        return $this->rqFormat;
    }

    /**
     * Sets a new rqFormat.
     *
     * @param string $rqFormat
     *
     * @return self
     */
    public function setRqFormat($rqFormat)
    {
        $this->rqFormat = $rqFormat;

        return $this;
    }

    /**
     * Adds as detail.
     *
     * @return self
     */
    public function addToImportDetails(\Pohoda\Documentresponse\DetailType $detail)
    {
        $this->importDetails[] = $detail;

        return $this;
    }

    /**
     * isset importDetails.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetImportDetails($index)
    {
        return isset($this->importDetails[$index]);
    }

    /**
     * unset importDetails.
     *
     * @param int|string $index
     */
    public function unsetImportDetails($index): void
    {
        unset($this->importDetails[$index]);
    }

    /**
     * Gets as importDetails.
     *
     * @return \Pohoda\Documentresponse\DetailType[]
     */
    public function getImportDetails()
    {
        return $this->importDetails;
    }

    /**
     * Sets a new importDetails.
     *
     * @param \Pohoda\Documentresponse\DetailType[] $importDetails
     *
     * @return self
     */
    public function setImportDetails(?array $importDetails = null)
    {
        $this->importDetails = $importDetails;

        return $this;
    }

    /**
     * Gets as importData.
     *
     * @return string
     */
    public function getImportData()
    {
        return $this->importData;
    }

    /**
     * Sets a new importData.
     *
     * @param string $importData
     *
     * @return self
     */
    public function setImportData($importData)
    {
        $this->importData = $importData;

        return $this;
    }
}
