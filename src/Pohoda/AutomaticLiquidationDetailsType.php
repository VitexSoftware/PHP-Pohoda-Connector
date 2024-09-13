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

namespace Pohoda;

/**
 * Class representing AutomaticLiquidationDetailsType.
 *
 * XSD Type: automaticLiquidationDetailsType
 */
class AutomaticLiquidationDetailsType
{
    /**
     * Likvidace bankovního dokladu.
     *
     * @var \Pohoda\AutomaticLiquidationDetailType[]
     */
    private array $automaticLiquidationDetail = [
    ];

    /**
     * Adds as automaticLiquidationDetail.
     *
     * Likvidace bankovního dokladu.
     *
     * @return self
     */
    public function addToAutomaticLiquidationDetail(\Pohoda\AutomaticLiquidationDetailType $automaticLiquidationDetail)
    {
        $this->automaticLiquidationDetail[] = $automaticLiquidationDetail;

        return $this;
    }

    /**
     * isset automaticLiquidationDetail.
     *
     * Likvidace bankovního dokladu.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetAutomaticLiquidationDetail($index)
    {
        return isset($this->automaticLiquidationDetail[$index]);
    }

    /**
     * unset automaticLiquidationDetail.
     *
     * Likvidace bankovního dokladu.
     *
     * @param int|string $index
     */
    public function unsetAutomaticLiquidationDetail($index): void
    {
        unset($this->automaticLiquidationDetail[$index]);
    }

    /**
     * Gets as automaticLiquidationDetail.
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
     * Sets a new automaticLiquidationDetail.
     *
     * Likvidace bankovního dokladu.
     *
     * @param \Pohoda\AutomaticLiquidationDetailType[] $automaticLiquidationDetail
     *
     * @return self
     */
    public function setAutomaticLiquidationDetail(?array $automaticLiquidationDetail = null)
    {
        $this->automaticLiquidationDetail = $automaticLiquidationDetail;

        return $this;
    }
}
