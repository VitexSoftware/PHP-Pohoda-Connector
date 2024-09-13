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

namespace Pohoda\ListCentre;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListCentreType.
 *
 * XSD Type: listCentreType
 */
class ListCentreType extends ListVersionType
{
    /**
     * @var \Pohoda\Centre\CentreType[]
     */
    private array $centre = [
    ];

    /**
     * Adds as centre.
     *
     * @return self
     */
    public function addToCentre(\Pohoda\Centre\CentreType $centre)
    {
        $this->centre[] = $centre;

        return $this;
    }

    /**
     * isset centre.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetCentre($index)
    {
        return isset($this->centre[$index]);
    }

    /**
     * unset centre.
     *
     * @param int|string $index
     */
    public function unsetCentre($index): void
    {
        unset($this->centre[$index]);
    }

    /**
     * Gets as centre.
     *
     * @return \Pohoda\Centre\CentreType[]
     */
    public function getCentre()
    {
        return $this->centre;
    }

    /**
     * Sets a new centre.
     *
     * @param \Pohoda\Centre\CentreType[] $centre
     *
     * @return self
     */
    public function setCentre(?array $centre = null)
    {
        $this->centre = $centre;

        return $this;
    }
}
