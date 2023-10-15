<?php

namespace Pohoda;

/**
 * Class representing AutomaticLiquidationDetailsType
 *
 *
 * XSD Type: automaticLiquidationDetailsType
 */
class AutomaticLiquidationDetailsType
{
    /**
     * Likvidace bankovního dokladu.
     *
     * @var \Pohoda\AutomaticLiquidationDetailType[] $automaticLiquidationDetail
     */
    private $automaticLiquidationDetail = [
        
    ];

    /**
     * Adds as automaticLiquidationDetail
     *
     * Likvidace bankovního dokladu.
     *
     * @return self
     * @param \Pohoda\AutomaticLiquidationDetailType $automaticLiquidationDetail
     */
    public function addToAutomaticLiquidationDetail(\Pohoda\AutomaticLiquidationDetailType $automaticLiquidationDetail)
    {
        $this->automaticLiquidationDetail[] = $automaticLiquidationDetail;
        return $this;
    }

    /**
     * isset automaticLiquidationDetail
     *
     * Likvidace bankovního dokladu.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAutomaticLiquidationDetail($index)
    {
        return isset($this->automaticLiquidationDetail[$index]);
    }

    /**
     * unset automaticLiquidationDetail
     *
     * Likvidace bankovního dokladu.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAutomaticLiquidationDetail($index)
    {
        unset($this->automaticLiquidationDetail[$index]);
    }

    /**
     * Gets as automaticLiquidationDetail
     *
     * Likvidace bankovního dokladu.
     *
     * @return \Pohoda\AutomaticLiquidationDetailType[]
     */
    public function getAutomaticLiquidationDetail()
    {
        return $this->automaticLiquidationDetail;
    }

    /**
     * Sets a new automaticLiquidationDetail
     *
     * Likvidace bankovního dokladu.
     *
     * @param \Pohoda\AutomaticLiquidationDetailType[] $automaticLiquidationDetail
     * @return self
     */
    public function setAutomaticLiquidationDetail(array $automaticLiquidationDetail = null)
    {
        $this->automaticLiquidationDetail = $automaticLiquidationDetail;
        return $this;
    }
}

