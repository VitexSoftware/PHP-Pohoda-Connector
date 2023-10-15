<?php

namespace Pohoda\Voucher;

/**
 * Class representing LiquidationType
 *
 *
 * XSD Type: liquidationType
 */
class LiquidationType
{
    /**
     * @var string $extId
     */
    private $extId = null;

    /**
     * Gets as extId
     *
     * @return string
     */
    public function getExtId()
    {
        return $this->extId;
    }

    /**
     * Sets a new extId
     *
     * @param string $extId
     * @return self
     */
    public function setExtId($extId)
    {
        $this->extId = $extId;
        return $this;
    }
}

