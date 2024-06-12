<?php

namespace Pohoda\List;

/**
 * Class representing ListOrderRequestType
 *
 *
 * XSD Type: listOrderRequestType
 */
class ListOrderRequestType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var string $orderType
     */
    private $orderType = null;

    /**
     * Požadovaná verze dokladu.
     *
     * @var string $orderVersion
     */
    private $orderVersion = null;

    /**
     * Označení externího systému, pro který se vyexportují identifikátory.
     *
     * @var string $extSystem
     */
    private $extSystem = null;

    /**
     * @var \Pohoda\Filter\RequestOrderType[] $requestOrder
     */
    private $requestOrder = [
    ];

    /**
     * Omezení exportu dat dokladů.
     *
     * @var \Pohoda\List\RestrictionDocParamType[] $restrictionData
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
     * Gets as orderType
     *
     * @return string
     */
    public function getOrderType()
    {
        return $this->orderType;
    }

    /**
     * Sets a new orderType
     *
     * @param string $orderType
     * @return self
     */
    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;
        return $this;
    }

    /**
     * Gets as orderVersion
     *
     * Požadovaná verze dokladu.
     *
     * @return string
     */
    public function getOrderVersion()
    {
        return $this->orderVersion;
    }

    /**
     * Sets a new orderVersion
     *
     * Požadovaná verze dokladu.
     *
     * @param string $orderVersion
     * @return self
     */
    public function setOrderVersion($orderVersion)
    {
        $this->orderVersion = $orderVersion;
        return $this;
    }

    /**
     * Gets as extSystem
     *
     * Označení externího systému, pro který se vyexportují identifikátory.
     *
     * @return string
     */
    public function getExtSystem()
    {
        return $this->extSystem;
    }

    /**
     * Sets a new extSystem
     *
     * Označení externího systému, pro který se vyexportují identifikátory.
     *
     * @param string $extSystem
     * @return self
     */
    public function setExtSystem($extSystem)
    {
        $this->extSystem = $extSystem;
        return $this;
    }

    /**
     * Adds as requestOrder
     *
     * @return self
     * @param \Pohoda\Filter\RequestOrderType $requestOrder
     */
    public function addToRequestOrder(\Pohoda\Filter\RequestOrderType $requestOrder)
    {
        $this->requestOrder[] = $requestOrder;
        return $this;
    }

    /**
     * isset requestOrder
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestOrder($index)
    {
        return isset($this->requestOrder[$index]);
    }

    /**
     * unset requestOrder
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestOrder($index)
    {
        unset($this->requestOrder[$index]);
    }

    /**
     * Gets as requestOrder
     *
     * @return \Pohoda\Filter\RequestOrderType[]
     */
    public function getRequestOrder()
    {
        return $this->requestOrder;
    }

    /**
     * Sets a new requestOrder
     *
     * @param \Pohoda\Filter\RequestOrderType[] $requestOrder
     * @return self
     */
    public function setRequestOrder(array $requestOrder)
    {
        $this->requestOrder = $requestOrder;
        return $this;
    }

    /**
     * Adds as restrictionData
     *
     * Omezení exportu dat dokladů.
     *
     * @return self
     * @param \Pohoda\List\RestrictionDocParamType $restrictionData
     */
    public function addToRestrictionData(\Pohoda\List\RestrictionDocParamType $restrictionData)
    {
        $this->restrictionData[] = $restrictionData;
        return $this;
    }

    /**
     * isset restrictionData
     *
     * Omezení exportu dat dokladů.
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
     * Omezení exportu dat dokladů.
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
     * Omezení exportu dat dokladů.
     *
     * @return \Pohoda\List\RestrictionDocParamType[]
     */
    public function getRestrictionData()
    {
        return $this->restrictionData;
    }

    /**
     * Sets a new restrictionData
     *
     * Omezení exportu dat dokladů.
     *
     * @param \Pohoda\List\RestrictionDocParamType[] $restrictionData
     * @return self
     */
    public function setRestrictionData(array $restrictionData)
    {
        $this->restrictionData = $restrictionData;
        return $this;
    }
}
