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
 * Class representing ListPrijemkaType.
 *
 * XSD Type: listPrijemkaType
 */
class ListPrijemkaType extends ListVersionType
{
    /**
     * @var \Pohoda\Prijemka\PrijemkaType[]
     */
    private array $prijemka = [
    ];

    /**
     * Adds as prijemka.
     *
     * @return self
     */
    public function addToPrijemka(\Pohoda\Prijemka\PrijemkaType $prijemka)
    {
        $this->prijemka[] = $prijemka;

        return $this;
    }

    /**
     * isset prijemka.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetPrijemka($index)
    {
        return isset($this->prijemka[$index]);
    }

    /**
     * unset prijemka.
     *
     * @param int|string $index
     */
    public function unsetPrijemka($index): void
    {
        unset($this->prijemka[$index]);
    }

    /**
     * Gets as prijemka.
     *
     * @return \Pohoda\Prijemka\PrijemkaType[]
     */
    public function getPrijemka()
    {
        return $this->prijemka;
    }

    /**
     * Sets a new prijemka.
     *
     * @param \Pohoda\Prijemka\PrijemkaType[] $prijemka
     *
     * @return self
     */
    public function setPrijemka(?array $prijemka = null)
    {
        $this->prijemka = $prijemka;

        return $this;
    }
}
