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
 * Class representing ResourcesMOSStypeType.
 *
 * XSD Type: resourcesMOSStype
 */
class ResourcesMOSStypeType
{
    /**
     * @var string[]
     */
    private array $ids = [
    ];

    /**
     * Adds as ids.
     *
     * @param string $ids
     *
     * @return self
     */
    public function addToIds($ids)
    {
        $this->ids[] = $ids;

        return $this;
    }

    /**
     * isset ids.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetIds($index)
    {
        return isset($this->ids[$index]);
    }

    /**
     * unset ids.
     *
     * @param int|string $index
     */
    public function unsetIds($index): void
    {
        unset($this->ids[$index]);
    }

    /**
     * Gets as ids.
     *
     * @return string[]
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * Sets a new ids.
     *
     * @param string[] $ids
     *
     * @return self
     */
    public function setIds(array $ids)
    {
        $this->ids = $ids;

        return $this;
    }
}
