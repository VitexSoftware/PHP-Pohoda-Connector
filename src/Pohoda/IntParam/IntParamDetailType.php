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

namespace Pohoda\IntParam;

/**
 * Class representing IntParamDetailType.
 *
 * XSD Type: intParamDetailType
 */
class IntParamDetailType
{
    private ?string $version = null;

    /**
     * @var \Pohoda\IntParam\IntParamType[]
     */
    private array $intParam = [
    ];

    /**
     * Gets as version.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Adds as intParam.
     *
     * @return self
     */
    public function addToIntParam(\Pohoda\IntParam\IntParamType $intParam)
    {
        $this->intParam[] = $intParam;

        return $this;
    }

    /**
     * isset intParam.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetIntParam($index)
    {
        return isset($this->intParam[$index]);
    }

    /**
     * unset intParam.
     *
     * @param int|string $index
     */
    public function unsetIntParam($index): void
    {
        unset($this->intParam[$index]);
    }

    /**
     * Gets as intParam.
     *
     * @return \Pohoda\IntParam\IntParamType[]
     */
    public function getIntParam()
    {
        return $this->intParam;
    }

    /**
     * Sets a new intParam.
     *
     * @param \Pohoda\IntParam\IntParamType[] $intParam
     *
     * @return self
     */
    public function setIntParam(?array $intParam = null)
    {
        $this->intParam = $intParam;

        return $this;
    }
}
