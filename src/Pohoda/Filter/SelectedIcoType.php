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

namespace Pohoda\Filter;

/**
 * Class representing SelectedIcoType.
 *
 * XSD Type: selectedIcoType
 */
class SelectedIcoType
{
    /**
     * ICO.
     *
     * @var string[]
     */
    private array $ico = [
    ];

    /**
     * Adds as ico.
     *
     * ICO
     *
     * @param string $ico
     *
     * @return self
     */
    public function addToIco($ico)
    {
        $this->ico[] = $ico;

        return $this;
    }

    /**
     * isset ico.
     *
     * ICO
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetIco($index)
    {
        return isset($this->ico[$index]);
    }

    /**
     * unset ico.
     *
     * ICO
     *
     * @param int|string $index
     */
    public function unsetIco($index): void
    {
        unset($this->ico[$index]);
    }

    /**
     * Gets as ico.
     *
     * ICO
     *
     * @return string[]
     */
    public function getIco()
    {
        return $this->ico;
    }

    /**
     * Sets a new ico.
     *
     * ICO
     *
     * @param string $ico
     *
     * @return self
     */
    public function setIco(array $ico)
    {
        $this->ico = $ico;

        return $this;
    }
}
