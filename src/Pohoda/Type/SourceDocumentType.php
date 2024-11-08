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
 * Class representing SourceDocumentType.
 *
 * XSD Type: sourceDocumentType
 */
class SourceDocumentType
{
    /**
     * ID zdrojového dokladu.
     */
    private ?int $id = null;

    /**
     * Externí identifikátor dokladu (Pouze pro export).
     */
    private ?\Pohoda\Type\ExtIdType $extId = null;

    /**
     * Číslo zdrojového dokladu.
     */
    private ?string $number = null;

    /**
     * Gets as id.
     *
     * ID zdrojového dokladu.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id.
     *
     * ID zdrojového dokladu.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets as extId.
     *
     * Externí identifikátor dokladu (Pouze pro export).
     *
     * @return \Pohoda\Type\ExtIdType
     */
    public function getExtId()
    {
        return $this->extId;
    }

    /**
     * Sets a new extId.
     *
     * Externí identifikátor dokladu (Pouze pro export).
     *
     * @return self
     */
    public function setExtId(?\Pohoda\Type\ExtIdType $extId = null)
    {
        $this->extId = $extId;

        return $this;
    }

    /**
     * Gets as number.
     *
     * Číslo zdrojového dokladu.
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number.
     *
     * Číslo zdrojového dokladu.
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }
}
