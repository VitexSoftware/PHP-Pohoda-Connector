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

namespace Pohoda\Documentresponse;

/**
 * Class representing ImportDetailsType.
 *
 * XSD Type: importDetailsType
 */
class ImportDetailsType
{
    /**
     * @var \Pohoda\Documentresponse\DetailType[]
     */
    private array $detail = [
    ];

    /**
     * Adds as detail.
     *
     * @return self
     */
    public function addToDetail(\Pohoda\Documentresponse\DetailType $detail)
    {
        $this->detail[] = $detail;

        return $this;
    }

    /**
     * isset detail.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetDetail($index)
    {
        return isset($this->detail[$index]);
    }

    /**
     * unset detail.
     *
     * @param int|string $index
     */
    public function unsetDetail($index): void
    {
        unset($this->detail[$index]);
    }

    /**
     * Gets as detail.
     *
     * @return \Pohoda\Documentresponse\DetailType[]
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Sets a new detail.
     *
     * @param \Pohoda\Documentresponse\DetailType[] $detail
     *
     * @return self
     */
    public function setDetail(array $detail)
    {
        $this->detail = $detail;

        return $this;
    }
}
