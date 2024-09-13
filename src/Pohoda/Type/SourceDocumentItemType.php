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
 * Class representing SourceDocumentItemType.
 *
 * XSD Type: sourceDocumentItemType
 */
class SourceDocumentItemType
{
    /**
     * ID položky dokladu.
     */
    private int $sourceItemId = null;

    /**
     * Externí identifikátor položky dokladu.
     */
    private \Pohoda\Type\ExtIdType $sourceItemExtId = null;

    /**
     * Gets as sourceItemId.
     *
     * ID položky dokladu.
     *
     * @return int
     */
    public function getSourceItemId()
    {
        return $this->sourceItemId;
    }

    /**
     * Sets a new sourceItemId.
     *
     * ID položky dokladu.
     *
     * @param int $sourceItemId
     *
     * @return self
     */
    public function setSourceItemId($sourceItemId)
    {
        $this->sourceItemId = $sourceItemId;

        return $this;
    }

    /**
     * Gets as sourceItemExtId.
     *
     * Externí identifikátor položky dokladu.
     *
     * @return \Pohoda\Type\ExtIdType
     */
    public function getSourceItemExtId()
    {
        return $this->sourceItemExtId;
    }

    /**
     * Sets a new sourceItemExtId.
     *
     * Externí identifikátor položky dokladu.
     *
     * @return self
     */
    public function setSourceItemExtId(?\Pohoda\Type\ExtIdType $sourceItemExtId = null)
    {
        $this->sourceItemExtId = $sourceItemExtId;

        return $this;
    }
}
