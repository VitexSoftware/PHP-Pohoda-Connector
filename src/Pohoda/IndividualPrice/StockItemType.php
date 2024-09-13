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

namespace Pohoda\IndividualPrice;

/**
 * Class representing StockItemType.
 *
 * XSD Type: stockItemType
 */
class StockItemType
{
    /**
     * ID skladové zásoby.
     */
    private int $id = null;

    /**
     * Kód skladové zásoby.
     */
    private string $ids = null;

    /**
     * Název skladové zásoby.
     */
    private string $name = null;

    /**
     * Členění skladu.
     */
    private \Pohoda\Type\RefTypeStorageType $storage = null;

    /**
     * Cena skladové zásoby.
     */
    private float $price = null;

    /**
     * Sleva v procentech.
     */
    private float $discountPercentage = null;

    /**
     * Individuální cena skladové zásoby.
     */
    private float $individualPrice = null;

    /**
     * ID - odkaz na cizí měnu, IDS - kod měny.
     */
    private \Pohoda\Type\RefType $currency = null;

    /**
     * Cena je uvedena: bez DPH, včetně DPH.
     */
    private string $payVAT = null;

    /**
     * Gets as id.
     *
     * ID skladové zásoby.
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
     * ID skladové zásoby.
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
     * Gets as ids.
     *
     * Kód skladové zásoby.
     *
     * @return string
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * Sets a new ids.
     *
     * Kód skladové zásoby.
     *
     * @param string $ids
     *
     * @return self
     */
    public function setIds($ids)
    {
        $this->ids = $ids;

        return $this;
    }

    /**
     * Gets as name.
     *
     * Název skladové zásoby.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name.
     *
     * Název skladové zásoby.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as storage.
     *
     * Členění skladu.
     *
     * @return \Pohoda\Type\RefTypeStorageType
     */
    public function getStorage()
    {
        return $this->storage;
    }

    /**
     * Sets a new storage.
     *
     * Členění skladu.
     *
     * @return self
     */
    public function setStorage(?\Pohoda\Type\RefTypeStorageType $storage = null)
    {
        $this->storage = $storage;

        return $this;
    }

    /**
     * Gets as price.
     *
     * Cena skladové zásoby.
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price.
     *
     * Cena skladové zásoby.
     *
     * @param float $price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Gets as discountPercentage.
     *
     * Sleva v procentech.
     *
     * @return float
     */
    public function getDiscountPercentage()
    {
        return $this->discountPercentage;
    }

    /**
     * Sets a new discountPercentage.
     *
     * Sleva v procentech.
     *
     * @param float $discountPercentage
     *
     * @return self
     */
    public function setDiscountPercentage($discountPercentage)
    {
        $this->discountPercentage = $discountPercentage;

        return $this;
    }

    /**
     * Gets as individualPrice.
     *
     * Individuální cena skladové zásoby.
     *
     * @return float
     */
    public function getIndividualPrice()
    {
        return $this->individualPrice;
    }

    /**
     * Sets a new individualPrice.
     *
     * Individuální cena skladové zásoby.
     *
     * @param float $individualPrice
     *
     * @return self
     */
    public function setIndividualPrice($individualPrice)
    {
        $this->individualPrice = $individualPrice;

        return $this;
    }

    /**
     * Gets as currency.
     *
     * ID - odkaz na cizí měnu, IDS - kod měny.
     *
     * @return \Pohoda\Type\RefType
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets a new currency.
     *
     * ID - odkaz na cizí měnu, IDS - kod měny.
     *
     * @return self
     */
    public function setCurrency(?\Pohoda\Type\RefType $currency = null)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Gets as payVAT.
     *
     * Cena je uvedena: bez DPH, včetně DPH.
     *
     * @return string
     */
    public function getPayVAT()
    {
        return $this->payVAT;
    }

    /**
     * Sets a new payVAT.
     *
     * Cena je uvedena: bez DPH, včetně DPH.
     *
     * @param string $payVAT
     *
     * @return self
     */
    public function setPayVAT($payVAT)
    {
        $this->payVAT = $payVAT;

        return $this;
    }
}
