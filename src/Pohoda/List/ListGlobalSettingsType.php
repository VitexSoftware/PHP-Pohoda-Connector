<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListGlobalSettingsType
 *
 *
 * XSD Type: listGlobalSettingsType
 */
class ListGlobalSettingsType extends ListVersionType
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
    public function setArchive(?\Pohoda\Archive\Archive $archive = null)
    {
        $this->archive = $archive;
        return $this;
    }
}

