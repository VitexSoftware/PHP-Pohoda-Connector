<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListProdejkaType
 *
 *
 * XSD Type: listProdejkaType
 */
class ListProdejkaType extends ListVersionType
{
    /**
     * @var \Pohoda\Prodejka\ProdejkaType[] $prodejka
     */
    private $prodejka = [
    ];

    /**
     * Adds as prodejka
     *
     * @return self
     * @param \Pohoda\Prodejka\ProdejkaType $prodejka
     */
    public function addToProdejka(\Pohoda\Prodejka\ProdejkaType $prodejka)
    {
        $this->prodejka[] = $prodejka;
        return $this;
    }

    /**
     * isset prodejka
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProdejka($index)
    {
        return isset($this->prodejka[$index]);
    }

    /**
     * unset prodejka
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProdejka($index)
    {
        unset($this->prodejka[$index]);
    }

    /**
     * Gets as prodejka
     *
     * @return \Pohoda\Prodejka\ProdejkaType[]
     */
    public function getProdejka()
    {
        return $this->prodejka;
    }

    /**
     * Sets a new prodejka
     *
     * @param \Pohoda\Prodejka\ProdejkaType[] $prodejka
     * @return self
     */
    public function setProdejka(array $prodejka = null)
    {
        $this->prodejka = $prodejka;
        return $this;
    }
}
