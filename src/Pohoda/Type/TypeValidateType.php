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
 * Class representing TypeValidateType.
 *
 * XSD Type: typeValidate
 */
class TypeValidateType
{
    /**
     * 'true' - provede se kontrola, zda má uživatel právo položku vložit ze skladu a zda je zadané množství na skladě.
     *  'false' - neprovádí se kontrola. V případě, že požadované množství není na skladě, doklad se vytvoří s nulovým množstvím (do response se zapíše warning).
     *  Pokud uživatel nemá právo na vložení položky do dokladu, vytvoří se z ní textová položka bez vazby na sklad.
     */
    private ?string $inStock = null;

    /**
     * Gets as inStock.
     *
     * 'true' - provede se kontrola, zda má uživatel právo položku vložit ze skladu a zda je zadané množství na skladě.
     *  'false' - neprovádí se kontrola. V případě, že požadované množství není na skladě, doklad se vytvoří s nulovým množstvím (do response se zapíše warning).
     *  Pokud uživatel nemá právo na vložení položky do dokladu, vytvoří se z ní textová položka bez vazby na sklad.
     *
     * @return string
     */
    public function getInStock()
    {
        return $this->inStock;
    }

    /**
     * Sets a new inStock.
     *
     * 'true' - provede se kontrola, zda má uživatel právo položku vložit ze skladu a zda je zadané množství na skladě.
     *  'false' - neprovádí se kontrola. V případě, že požadované množství není na skladě, doklad se vytvoří s nulovým množstvím (do response se zapíše warning).
     *  Pokud uživatel nemá právo na vložení položky do dokladu, vytvoří se z ní textová položka bez vazby na sklad.
     *
     * @param string $inStock
     *
     * @return self
     */
    public function setInStock($inStock)
    {
        $this->inStock = $inStock;

        return $this;
    }
}
