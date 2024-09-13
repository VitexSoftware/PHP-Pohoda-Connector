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
 * Class representing ListIntDocType.
 *
 * XSD Type: listIntDocType
 */
class ListIntDocType extends ListVersionType
{
    /**
     * @var \Pohoda\IntDoc\IntDocType[]
     */
    private array $intDoc = [
    ];

    /**
     * Adds as intDoc.
     *
     * @return self
     */
    public function addToIntDoc(\Pohoda\IntDoc\IntDocType $intDoc)
    {
        $this->intDoc[] = $intDoc;

        return $this;
    }

    /**
     * isset intDoc.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetIntDoc($index)
    {
        return isset($this->intDoc[$index]);
    }

    /**
     * unset intDoc.
     *
     * @param int|string $index
     */
    public function unsetIntDoc($index): void
    {
        unset($this->intDoc[$index]);
    }

    /**
     * Gets as intDoc.
     *
     * @return \Pohoda\IntDoc\IntDocType[]
     */
    public function getIntDoc()
    {
        return $this->intDoc;
    }

    /**
     * Sets a new intDoc.
     *
     * @param \Pohoda\IntDoc\IntDocType[] $intDoc
     *
     * @return self
     */
    public function setIntDoc(?array $intDoc = null)
    {
        $this->intDoc = $intDoc;

        return $this;
    }
}
