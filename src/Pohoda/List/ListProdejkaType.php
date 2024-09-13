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
 * Class representing ListProdejkaType.
 *
 * XSD Type: listProdejkaType
 */
class ListProdejkaType extends ListVersionType
{
    /**
     * @var \Pohoda\Prodejka\ProdejkaType[]
     */
    private array $prodejka = [
    ];

    /**
     * Adds as prodejka.
     *
     * @return self
     */
    public function addToProdejka(\Pohoda\Prodejka\ProdejkaType $prodejka)
    {
        $this->prodejka[] = $prodejka;

        return $this;
    }

    /**
     * isset prodejka.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetProdejka($index)
    {
        return isset($this->prodejka[$index]);
    }

    /**
     * unset prodejka.
     *
     * @param int|string $index
     */
    public function unsetProdejka($index): void
    {
        unset($this->prodejka[$index]);
    }

    /**
     * Gets as prodejka.
     *
     * @return \Pohoda\Prodejka\ProdejkaType[]
     */
    public function getProdejka()
    {
        return $this->prodejka;
    }

    /**
     * Sets a new prodejka.
     *
     * @param \Pohoda\Prodejka\ProdejkaType[] $prodejka
     *
     * @return self
     */
    public function setProdejka(?array $prodejka = null)
    {
        $this->prodejka = $prodejka;

        return $this;
    }
}
