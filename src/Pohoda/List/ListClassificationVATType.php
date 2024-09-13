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
 * Class representing ListClassificationVATType.
 *
 * XSD Type: listClassificationVATType
 */
class ListClassificationVATType extends ListVersionType
{
    /**
     * @var \Pohoda\ClassificationVAT\ClassificationVATType[]
     */
    private array $classificationVAT = [
    ];

    /**
     * Adds as classificationVAT.
     *
     * @return self
     */
    public function addToClassificationVAT(\Pohoda\ClassificationVAT\ClassificationVATType $classificationVAT)
    {
        $this->classificationVAT[] = $classificationVAT;

        return $this;
    }

    /**
     * isset classificationVAT.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetClassificationVAT($index)
    {
        return isset($this->classificationVAT[$index]);
    }

    /**
     * unset classificationVAT.
     *
     * @param int|string $index
     */
    public function unsetClassificationVAT($index): void
    {
        unset($this->classificationVAT[$index]);
    }

    /**
     * Gets as classificationVAT.
     *
     * @return \Pohoda\ClassificationVAT\ClassificationVATType[]
     */
    public function getClassificationVAT()
    {
        return $this->classificationVAT;
    }

    /**
     * Sets a new classificationVAT.
     *
     * @param \Pohoda\ClassificationVAT\ClassificationVATType[] $classificationVAT
     *
     * @return self
     */
    public function setClassificationVAT(?array $classificationVAT = null)
    {
        $this->classificationVAT = $classificationVAT;

        return $this;
    }
}
