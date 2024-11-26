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

namespace Pohoda\MKasa\ConfigurationType;

/**
 * Class representing GlobalSettingsAType.
 */
class GlobalSettingsAType
{
    private ?\Pohoda\Archive\Archive $archive = null;

    /**
     * Gets as archive.
     *
     * @return \Pohoda\Archive\Archive
     */
    public function getArchive()
    {
        return $this->archive;
    }

    /**
     * Sets a new archive.
     *
     * @return self
     */
    public function setArchive(\Pohoda\Archive\Archive $archive)
    {
        $this->archive = $archive;

        return $this;
    }
}
