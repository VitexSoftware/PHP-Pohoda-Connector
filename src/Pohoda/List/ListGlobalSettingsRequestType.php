<?php

namespace Pohoda\List;

/**
 * Class representing ListGlobalSettingsRequestType
 *
 *
 * XSD Type: listGlobalSettingsRequestType
 */
class ListGlobalSettingsRequestType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * Požadovaná verze.
     *
     * @var string $globalSettingsVersion
     */
    private $globalSettingsVersion = null;

    /**
     * @var \Pohoda\List\RequestrequestGlobalSettingsType[] $requestGlobalSettings
     */
    private $requestGlobalSettings = [

    ];

    /**
     * Gets as version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as globalSettingsVersion
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
     * Sets a new globalSettingsVersion
     *
     * Požadovaná verze.
     *
     * @param string $globalSettingsVersion
     * @return self
     */
    public function setGlobalSettingsVersion($globalSettingsVersion)
    {
        $this->globalSettingsVersion = $globalSettingsVersion;
        return $this;
    }

    /**
     * Adds as requestGlobalSettings
     *
     * @return self
     * @param \Pohoda\List\RequestrequestGlobalSettingsType $requestGlobalSettings
     */
    public function addToRequestGlobalSettings(\Pohoda\List\RequestrequestGlobalSettingsType $requestGlobalSettings)
    {
        $this->requestGlobalSettings[] = $requestGlobalSettings;
        return $this;
    }

    /**
     * isset requestGlobalSettings
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestGlobalSettings($index)
    {
        return isset($this->requestGlobalSettings[$index]);
    }

    /**
     * unset requestGlobalSettings
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestGlobalSettings($index)
    {
        unset($this->requestGlobalSettings[$index]);
    }

    /**
     * Gets as requestGlobalSettings
     *
     * @return \Pohoda\List\RequestrequestGlobalSettingsType[]
     */
    public function getRequestGlobalSettings()
    {
        return $this->requestGlobalSettings;
    }

    /**
     * Sets a new requestGlobalSettings
     *
     * @param \Pohoda\List\RequestrequestGlobalSettingsType[] $requestGlobalSettings
     * @return self
     */
    public function setRequestGlobalSettings(array $requestGlobalSettings)
    {
        $this->requestGlobalSettings = $requestGlobalSettings;
        return $this;
    }
}
