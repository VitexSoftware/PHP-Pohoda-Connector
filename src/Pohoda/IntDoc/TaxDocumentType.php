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

namespace Pohoda\IntDoc;

/**
 * Class representing TaxDocumentType.
 *
 * XSD Type: taxDocumentType
 */
class TaxDocumentType
{
    /**
     * Vazba likvidace na daňový doklad.
     */
    private \Pohoda\Type\SourceDocumentItemType $sourceLiquidation = null;

    /**
     * Gets as sourceLiquidation.
     *
     * Vazba likvidace na daňový doklad.
     *
     * @return \Pohoda\Type\SourceDocumentItemType
     */
    public function getSourceLiquidation()
    {
        return $this->sourceLiquidation;
    }

    /**
     * Sets a new sourceLiquidation.
     *
     * Vazba likvidace na daňový doklad.
     *
     * @return self
     */
    public function setSourceLiquidation(\Pohoda\Type\SourceDocumentItemType $sourceLiquidation)
    {
        $this->sourceLiquidation = $sourceLiquidation;

        return $this;
    }
}
