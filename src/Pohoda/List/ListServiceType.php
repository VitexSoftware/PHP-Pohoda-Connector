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
 * Class representing ListServiceType.
 *
 * XSD Type: listServiceType
 */
class ListServiceType extends ListVersionType
{
    /**
     * @var \Pohoda\Service\ServiceType[]
     */
    private array $service = [
    ];

    /**
     * Adds as service.
     *
     * @return self
     */
    public function addToService(\Pohoda\Service\ServiceType $service)
    {
        $this->service[] = $service;

        return $this;
    }

    /**
     * isset service.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetService($index)
    {
        return isset($this->service[$index]);
    }

    /**
     * unset service.
     *
     * @param int|string $index
     */
    public function unsetService($index): void
    {
        unset($this->service[$index]);
    }

    /**
     * Gets as service.
     *
     * @return \Pohoda\Service\ServiceType[]
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service.
     *
     * @param \Pohoda\Service\ServiceType[] $service
     *
     * @return self
     */
    public function setService(?array $service = null)
    {
        $this->service = $service;

        return $this;
    }
}
