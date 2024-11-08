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

/**
 * Class representing ListGlobalSettingsRequestType.
 *
 * XSD Type: listGlobalSettingsRequestType
 */
class ListGlobalSettingsRequestType
{
    private ?string $version = null;

    /**
     * Požadovaná verze.
     */
    private ?string $globalSettingsVersion = null;

    /**
     * @var \Pohoda\List\RequestrequestGlobalSettingsType[]
     */
    private array $requestGlobalSettings = [
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
     * Gets as globalSettingsVersion.
     *
     * Požadovaná verze.
     *
     * @return string
     */
    public function getGlobalSettingsVersion()
    {
        return $this->globalSettingsVersion;
    }

    /**
     * Sets a new globalSettingsVersion.
     *
     * Požadovaná verze.
     *
     * @param string $globalSettingsVersion
     *
     * @return self
     */
    public function setGlobalSettingsVersion($globalSettingsVersion)
    {
        $this->globalSettingsVersion = $globalSettingsVersion;

        return $this;
    }

    /**
     * Adds as requestGlobalSettings.
     *
     * @return self
     */
    public function addToRequestGlobalSettings(\Pohoda\List\RequestrequestGlobalSettingsType $requestGlobalSettings)
    {
        $this->requestGlobalSettings[] = $requestGlobalSettings;

        return $this;
    }

    /**
     * isset requestGlobalSettings.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRequestGlobalSettings($index)
    {
        return isset($this->requestGlobalSettings[$index]);
    }

    /**
     * unset requestGlobalSettings.
     *
     * @param int|string $index
     */
    public function unsetRequestGlobalSettings($index): void
    {
        unset($this->requestGlobalSettings[$index]);
    }

    /**
     * Gets as requestGlobalSettings.
     *
     * @return \Pohoda\List\RequestrequestGlobalSettingsType[]
     */
    public function getRequestGlobalSettings()
    {
        return $this->requestGlobalSettings;
    }

    /**
     * Sets a new requestGlobalSettings.
     *
     * @param \Pohoda\List\RequestrequestGlobalSettingsType[] $requestGlobalSettings
     *
     * @return self
     */
    public function setRequestGlobalSettings(array $requestGlobalSettings)
    {
        $this->requestGlobalSettings = $requestGlobalSettings;

        return $this;
    }
}
