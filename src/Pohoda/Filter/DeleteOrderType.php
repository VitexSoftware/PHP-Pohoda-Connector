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

namespace Pohoda\Filter;

/**
 * Class representing DeleteOrderType.
 *
 * XSD Type: deleteOrderType
 */
class DeleteOrderType
{
    /**
     * Filtr pro výběr dokladu ke smazání.
     */
    private \Pohoda\Filter\FilterDocsDeleteType $filter = null;

    /**
     * Gets as filter.
     *
     * Filtr pro výběr dokladu ke smazání.
     *
     * @return \Pohoda\Filter\FilterDocsDeleteType
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Sets a new filter.
     *
     * Filtr pro výběr dokladu ke smazání.
     *
     * @return self
     */
    public function setFilter(?\Pohoda\Filter\FilterDocsDeleteType $filter = null)
    {
        $this->filter = $filter;

        return $this;
    }
}
