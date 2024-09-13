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

namespace Pohoda\ClassificationVAT;

/**
 * Class representing ClassificationVATType.
 *
 * XSD Type: classificationVATType
 */
class ClassificationVATType
{
    private string $version = null;
    private \Pohoda\ClassificationVAT\ClassificationVATHeaderType $classificationVATHeader = null;

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
     * Gets as classificationVATHeader.
     *
     * @return \Pohoda\ClassificationVAT\ClassificationVATHeaderType
     */
    public function getClassificationVATHeader()
    {
        return $this->classificationVATHeader;
    }

    /**
     * Sets a new classificationVATHeader.
     *
     * @return self
     */
    public function setClassificationVATHeader(?\Pohoda\ClassificationVAT\ClassificationVATHeaderType $classificationVATHeader = null)
    {
        $this->classificationVATHeader = $classificationVATHeader;

        return $this;
    }
}
