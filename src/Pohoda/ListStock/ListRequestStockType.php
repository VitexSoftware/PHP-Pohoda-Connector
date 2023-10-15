<?php

namespace Pohoda\ListStock;

/**
 * Class representing ListRequestStockType
 *
 *
 * XSD Type: listRequestStockType
 */
class ListRequestStockType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Požadovaná verze dokladu.
     *
     * @var string $stockVersion
     */
    private $stockVersion = null;

    /**
     * Atributy určují filtr pro export zásob. Pokud není zadán žádný filtr, vyexportují se všechny zásoby.
     *
     * @var \Pohoda\Filter\RequestStockType[] $requestStock
     */
    private $requestStock = [
        
    ];

    /**
     * Omezení exportu dat.
     *
     * @var \Pohoda\ListStock\RestrictionDataType[] $restrictionData
     */
    private $restrictionData = [
        
    ];

    /**
     * Gets as version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as stockVersion
     *
     * Požadovaná verze dokladu.
     *
     * @return string
     */
    public function getStockVersion()
    {
        return $this->stockVersion;
    }

    /**
     * Sets a new stockVersion
     *
     * Požadovaná verze dokladu.
     *
     * @param string $stockVersion
     * @return self
     */
    public function setStockVersion($stockVersion)
    {
        $this->stockVersion = $stockVersion;
        return $this;
    }

    /**
     * Adds as requestStock
     *
     * Atributy určují filtr pro export zásob. Pokud není zadán žádný filtr, vyexportují se všechny zásoby.
     *
     * @return self
     * @param \Pohoda\Filter\RequestStockType $requestStock
     */
    public function addToRequestStock(\Pohoda\Filter\RequestStockType $requestStock)
    {
        $this->requestStock[] = $requestStock;
        return $this;
    }

    /**
     * isset requestStock
     *
     * Atributy určují filtr pro export zásob. Pokud není zadán žádný filtr, vyexportují se všechny zásoby.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestStock($index)
    {
        return isset($this->requestStock[$index]);
    }

    /**
     * unset requestStock
     *
     * Atributy určují filtr pro export zásob. Pokud není zadán žádný filtr, vyexportují se všechny zásoby.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestStock($index)
    {
        unset($this->requestStock[$index]);
    }

    /**
     * Gets as requestStock
     *
     * Atributy určují filtr pro export zásob. Pokud není zadán žádný filtr, vyexportují se všechny zásoby.
     *
     * @return \Pohoda\Filter\RequestStockType[]
     */
    public function getRequestStock()
    {
        return $this->requestStock;
    }

    /**
     * Sets a new requestStock
     *
     * Atributy určují filtr pro export zásob. Pokud není zadán žádný filtr, vyexportují se všechny zásoby.
     *
     * @param \Pohoda\Filter\RequestStockType[] $requestStock
     * @return self
     */
    public function setRequestStock(array $requestStock)
    {
        $this->requestStock = $requestStock;
        return $this;
    }

    /**
     * Adds as restrictionData
     *
     * Omezení exportu dat.
     *
     * @return self
     * @param \Pohoda\ListStock\RestrictionDataType $restrictionData
     */
    public function addToRestrictionData(\Pohoda\ListStock\RestrictionDataType $restrictionData)
    {
        $this->restrictionData[] = $restrictionData;
        return $this;
    }

    /**
     * isset restrictionData
     *
     * Omezení exportu dat.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRestrictionData($index)
    {
        return isset($this->restrictionData[$index]);
    }

    /**
     * unset restrictionData
     *
     * Omezení exportu dat.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRestrictionData($index)
    {
        unset($this->restrictionData[$index]);
    }

    /**
     * Gets as restrictionData
     *
     * Omezení exportu dat.
     *
     * @return \Pohoda\ListStock\RestrictionDataType[]
     */
    public function getRestrictionData()
    {
        return $this->restrictionData;
    }

    /**
     * Sets a new restrictionData
     *
     * Omezení exportu dat.
     *
     * @param \Pohoda\ListStock\RestrictionDataType[] $restrictionData
     * @return self
     */
    public function setRestrictionData(array $restrictionData)
    {
        $this->restrictionData = $restrictionData;
        return $this;
    }
}

