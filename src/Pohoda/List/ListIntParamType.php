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

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListIntParamType.
 *
 * XSD Type: listIntParamType
 */
class ListIntParamType extends ListVersionType
{
    /**
     * @var \Pohoda\IntParam\IntParamDetailType[]
     */
    private array $intParamDetail = [
    ];

    /**
     * Adds as intParamDetail.
     *
     * @return self
     */
    public function addToIntParamDetail(\Pohoda\IntParam\IntParamDetailType $intParamDetail)
    {
        $this->intParamDetail[] = $intParamDetail;

        return $this;
    }

    /**
     * isset intParamDetail.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetIntParamDetail($index)
    {
        return isset($this->intParamDetail[$index]);
    }

    /**
     * unset intParamDetail.
     *
     * @param int|string $index
     */
    public function unsetIntParamDetail($index): void
    {
        unset($this->intParamDetail[$index]);
    }

    /**
     * Gets as intParamDetail.
     *
     * @return \Pohoda\IntParam\IntParamDetailType[]
     */
    public function getIntParamDetail()
    {
        return $this->intParamDetail;
    }

    /**
     * Sets a new intParamDetail.
     *
     * @param \Pohoda\IntParam\IntParamDetailType[] $intParamDetail
     *
     * @return self
     */
    public function setIntParamDetail(?array $intParamDetail = null)
    {
        $this->intParamDetail = $intParamDetail;

        return $this;
    }
}
