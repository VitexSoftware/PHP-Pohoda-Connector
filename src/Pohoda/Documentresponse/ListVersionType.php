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

namespace Pohoda\Documentresponse;

/**
 * Class representing ListVersionType.
 *
 * XSD Type: listVersionType
 */
class ListVersionType
{
    private ?string $version = null;
    private ?\DateTime $dateTimeStamp = null;
    private ?\DateTime $dateValidFrom = null;
    private ?string $state = null;

    /**
     * Podrobnosti (error/warning) vzniklé při zpracování.
     *
     * @var \Pohoda\Documentresponse\DetailType[]
     */
    private ?array $importDetails = null;

    /**
     * Pokud je počet exportovaných záznamů vyšší než zadaný limit, provede se rozdělení dat do více souborů. V původním souboru je uveden seznam rozdělených souborů.
     *
     * @var string[]
     */
    private ?array $parts = null;

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
     * Adds as detail.
     *
     * Podrobnosti (error/warning) vzniklé při zpracování.
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
     * Podrobnosti (error/warning) vzniklé při zpracování.
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
     * Podrobnosti (error/warning) vzniklé při zpracování.
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
     * Podrobnosti (error/warning) vzniklé při zpracování.
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
     * Podrobnosti (error/warning) vzniklé při zpracování.
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
     * Adds as part.
     *
     * Pokud je počet exportovaných záznamů vyšší než zadaný limit, provede se rozdělení dat do více souborů. V původním souboru je uveden seznam rozdělených souborů.
     *
     * @param string $part
     *
     * @return self
     */
    public function addToParts($part)
    {
        $this->parts[] = $part;

        return $this;
    }

    /**
     * isset parts.
     *
     * Pokud je počet exportovaných záznamů vyšší než zadaný limit, provede se rozdělení dat do více souborů. V původním souboru je uveden seznam rozdělených souborů.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetParts($index)
    {
        return isset($this->parts[$index]);
    }

    /**
     * unset parts.
     *
     * Pokud je počet exportovaných záznamů vyšší než zadaný limit, provede se rozdělení dat do více souborů. V původním souboru je uveden seznam rozdělených souborů.
     *
     * @param int|string $index
     */
    public function unsetParts($index): void
    {
        unset($this->parts[$index]);
    }

    /**
     * Gets as parts.
     *
     * Pokud je počet exportovaných záznamů vyšší než zadaný limit, provede se rozdělení dat do více souborů. V původním souboru je uveden seznam rozdělených souborů.
     *
     * @return string[]
     */
    public function getParts()
    {
        return $this->parts;
    }

    /**
     * Sets a new parts.
     *
     * Pokud je počet exportovaných záznamů vyšší než zadaný limit, provede se rozdělení dat do více souborů. V původním souboru je uveden seznam rozdělených souborů.
     *
     * @param string[] $parts
     *
     * @return self
     */
    public function setParts(?array $parts = null)
    {
        $this->parts = $parts;

        return $this;
    }
}
