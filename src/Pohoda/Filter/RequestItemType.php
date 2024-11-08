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
 * Class representing RequestItemType.
 *
 * XSD Type: requestItemType
 */
class RequestItemType
{
    /**
     * Seznam polí podle kterých se bude filtrovat.
     */
    private ?\Pohoda\Filter\FilterExtIdType $filter = null;

    /**
     * Gets as filter.
     *
     * Seznam polí podle kterých se bude filtrovat.
     *
     * @return \Pohoda\Filter\FilterExtIdType
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Sets a new filter.
     *
     * Seznam polí podle kterých se bude filtrovat.
     *
     * @return self
     */
    public function setFilter(?\Pohoda\Filter\FilterExtIdType $filter = null)
    {
        $this->filter = $filter;

        return $this;
    }
}
