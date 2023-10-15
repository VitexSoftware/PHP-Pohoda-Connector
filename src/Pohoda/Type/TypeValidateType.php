<?php

namespace Pohoda\Type;

/**
 * Class representing TypeValidateType
 *
 *
 * XSD Type: typeValidate
 */
class TypeValidateType
{
    /**
     * 'true' - provede se kontrola, zda má uživatel právo položku vložit ze skladu a zda je zadané množství na skladě.
     *  'false' - neprovádí se kontrola. V případě, že požadované množství není na skladě, doklad se vytvoří s nulovým množstvím (do response se zapíše warning). 
     *  Pokud uživatel nemá právo na vložení položky do dokladu, vytvoří se z ní textová položka bez vazby na sklad.
     *
     * @var string $inStock
     */
    private $inStock = null;

    /**
     * Gets as inStock
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
     * Sets a new inStock
     *
     * 'true' - provede se kontrola, zda má uživatel právo položku vložit ze skladu a zda je zadané množství na skladě.
     *  'false' - neprovádí se kontrola. V případě, že požadované množství není na skladě, doklad se vytvoří s nulovým množstvím (do response se zapíše warning). 
     *  Pokud uživatel nemá právo na vložení položky do dokladu, vytvoří se z ní textová položka bez vazby na sklad.
     *
     * @param string $inStock
     * @return self
     */
    public function setInStock($inStock)
    {
        $this->inStock = $inStock;
        return $this;
    }
}

