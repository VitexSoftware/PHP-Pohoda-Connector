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

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListVydejkaType.
 *
 * XSD Type: listVydejkaType
 */
class ListVydejkaType extends ListVersionType
{
    /**
     * @var \Pohoda\Vydejka\VydejkaType[]
     */
    private array $vydejka = [
    ];

    /**
     * Adds as vydejka.
     *
     * @return self
     */
    public function addToVydejka(\Pohoda\Vydejka\VydejkaType $vydejka)
    {
        $this->vydejka[] = $vydejka;

        return $this;
    }

    /**
     * isset vydejka.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetVydejka($index)
    {
        return isset($this->vydejka[$index]);
    }

    /**
     * unset vydejka.
     *
     * @param int|string $index
     */
    public function unsetVydejka($index): void
    {
        unset($this->vydejka[$index]);
    }

    /**
     * Gets as vydejka.
     *
     * @return \Pohoda\Vydejka\VydejkaType[]
     */
    public function getVydejka()
    {
        return $this->vydejka;
    }

    /**
     * Sets a new vydejka.
     *
     * @param \Pohoda\Vydejka\VydejkaType[] $vydejka
     *
     * @return self
     */
    public function setVydejka(?array $vydejka = null)
    {
        $this->vydejka = $vydejka;

        return $this;
    }
}
