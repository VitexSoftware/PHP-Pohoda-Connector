<?php

namespace Pohoda\MKasa\ConfigurationType;

/**
 * Class representing GlobalSettingsAType
 */
class GlobalSettingsAType
{
    /**
     * @var \Pohoda\Archive\Archive $archive
     */
    private $archive = null;

    /**
     * Gets as archive
     *
     * @return \Pohoda\Archive\Archive
     */
    public function getArchive()
    {
        return $this->archive;
    }

    /**
     * Sets a new archive
     *
     * @param \Pohoda\Archive\Archive $archive
     * @return self
     */
    public function setArchive(\Pohoda\Archive\Archive $archive)
    {
        $this->archive = $archive;
        return $this;
    }
}

