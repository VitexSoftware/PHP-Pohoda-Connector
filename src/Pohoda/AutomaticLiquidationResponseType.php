<?php

namespace Pohoda;

use Pohoda\Documentresponse\DocumentResponseType;

/**
 * Class representing AutomaticLiquidationResponseType
 *
 *
 * XSD Type: automaticLiquidationResponseType
 */
class AutomaticLiquidationResponseType extends DocumentResponseType
{
    /**
     * Vytvořené likvidace bankovních dokladů.
     *
     * @var \Pohoda\AutomaticLiquidationDetailType[] $automaticLiquidationDetails
     */
    private $automaticLiquidationDetails = null;

    /**
     * Adds as automaticLiquidationDetail
     *
     * Vytvořené likvidace bankovních dokladů.
     *
     * @return self
     * @param \Pohoda\AutomaticLiquidationDetailType $automaticLiquidationDetail
     */
    public function addToAutomaticLiquidationDetails(\Pohoda\AutomaticLiquidationDetailType $automaticLiquidationDetail)
    {
        $this->automaticLiquidationDetails[] = $automaticLiquidationDetail;
        return $this;
    }

    /**
     * isset automaticLiquidationDetails
     *
     * Vytvořené likvidace bankovních dokladů.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAutomaticLiquidationDetails($index)
    {
        return isset($this->automaticLiquidationDetails[$index]);
    }

    /**
     * unset automaticLiquidationDetails
     *
     * Vytvořené likvidace bankovních dokladů.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAutomaticLiquidationDetails($index)
    {
        unset($this->automaticLiquidationDetails[$index]);
    }

    /**
     * Gets as automaticLiquidationDetails
     *
     * Vytvořené likvidace bankovních dokladů.
     *
     * @return \Pohoda\AutomaticLiquidationDetailType[]
     */
    public function getAutomaticLiquidationDetails()
    {
        return $this->automaticLiquidationDetails;
    }

    /**
     * Sets a new automaticLiquidationDetails
     *
     * Vytvořené likvidace bankovních dokladů.
     *
     * @param \Pohoda\AutomaticLiquidationDetailType[] $automaticLiquidationDetails
     * @return self
     */
    public function setAutomaticLiquidationDetails(array $automaticLiquidationDetails = null)
    {
        $this->automaticLiquidationDetails = $automaticLiquidationDetails;
        return $this;
    }
}
