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
 * Class representing PartsType.
 *
 * Název rozděleného souboru.
 * XSD Type: partsType
 */
class PartsType
{
    /**
     * @var string[]
     */
    private array $part = [
    ];

    /**
     * Adds as part.
     *
     * @param string $part
     *
     * @return self
     */
    public function addToPart($part)
    {
        $this->part[] = $part;

        return $this;
    }

    /**
     * isset part.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetPart($index)
    {
        return isset($this->part[$index]);
    }

    /**
     * unset part.
     *
     * @param int|string $index
     */
    public function unsetPart($index): void
    {
        unset($this->part[$index]);
    }

    /**
     * Gets as part.
     *
     * @return string[]
     */
    public function getPart()
    {
        return $this->part;
    }

    /**
     * Sets a new part.
     *
     * @param string[] $part
     *
     * @return self
     */
    public function setPart(?array $part = null)
    {
        $this->part = $part;

        return $this;
    }
}
