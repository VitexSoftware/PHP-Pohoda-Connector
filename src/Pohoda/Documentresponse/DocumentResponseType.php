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
 * Class representing DocumentResponseType.
 *
 * XSD Type: documentResponseType
 */
class DocumentResponseType
{
    private ?string $state = null;
    private ?string $version = null;

    /**
     * Chyby a upozornění vzniklé při načtení dokladu.
     *
     * @var \Pohoda\Documentresponse\DetailType[]
     */
    private ?array $importDetails = null;

    /**
     * Informace o vytvořeném dokladu.
     */
    private ?\Pohoda\Documentresponse\ProducedDetailsType $producedDetails = null;

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
     * Adds as detail.
     *
     * Chyby a upozornění vzniklé při načtení dokladu.
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
     * Chyby a upozornění vzniklé při načtení dokladu.
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
     * Chyby a upozornění vzniklé při načtení dokladu.
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
     * Chyby a upozornění vzniklé při načtení dokladu.
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
     * Chyby a upozornění vzniklé při načtení dokladu.
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
     * Gets as producedDetails.
     *
     * Informace o vytvořeném dokladu.
     *
     * @return \Pohoda\Documentresponse\ProducedDetailsType
     */
    public function getProducedDetails()
    {
        return $this->producedDetails;
    }

    /**
     * Sets a new producedDetails.
     *
     * Informace o vytvořeném dokladu.
     *
     * @return self
     */
    public function setProducedDetails(?\Pohoda\Documentresponse\ProducedDetailsType $producedDetails = null)
    {
        $this->producedDetails = $producedDetails;

        return $this;
    }
}
