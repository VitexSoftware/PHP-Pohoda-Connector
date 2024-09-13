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
 * Class representing ListGDPRType.
 *
 * XSD Type: listGDPRType
 */
class ListGDPRType extends ListVersionType
{
    /**
     * @var \Pohoda\Gdpr\GDPRType[]
     */
    private array $gDPR = [
    ];

    /**
     * Adds as gDPR.
     *
     * @return self
     */
    public function addToGDPR(\Pohoda\Gdpr\GDPRType $gDPR)
    {
        $this->gDPR[] = $gDPR;

        return $this;
    }

    /**
     * isset gDPR.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetGDPR($index)
    {
        return isset($this->gDPR[$index]);
    }

    /**
     * unset gDPR.
     *
     * @param int|string $index
     */
    public function unsetGDPR($index): void
    {
        unset($this->gDPR[$index]);
    }

    /**
     * Gets as gDPR.
     *
     * @return \Pohoda\Gdpr\GDPRType[]
     */
    public function getGDPR()
    {
        return $this->gDPR;
    }

    /**
     * Sets a new gDPR.
     *
     * @param \Pohoda\Gdpr\GDPRType[] $gDPR
     *
     * @return self
     */
    public function setGDPR(?array $gDPR = null)
    {
        $this->gDPR = $gDPR;

        return $this;
    }
}
