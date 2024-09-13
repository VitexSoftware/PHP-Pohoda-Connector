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

namespace Pohoda\Documentresponse\ItemType;

/**
 * Class representing ProducedItemAType.
 */
class ProducedItemAType
{
    /**
     * @var string[]
     */
    private array $id = [
    ];

    /**
     * Adds as id.
     *
     * @param string $id
     *
     * @return self
     */
    public function addToId($id)
    {
        $this->id[] = $id;

        return $this;
    }

    /**
     * isset id.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetId($index)
    {
        return isset($this->id[$index]);
    }

    /**
     * unset id.
     *
     * @param int|string $index
     */
    public function unsetId($index): void
    {
        unset($this->id[$index]);
    }

    /**
     * Gets as id.
     *
     * @return string[]
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id.
     *
     * @param string[] $id
     *
     * @return self
     */
    public function setId(?array $id = null)
    {
        $this->id = $id;

        return $this;
    }
}
