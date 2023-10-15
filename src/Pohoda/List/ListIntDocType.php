<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListIntDocType
 *
 *
 * XSD Type: listIntDocType
 */
class ListIntDocType extends ListVersionType
{
    /**
     * @var \Pohoda\IntDoc\IntDocType[] $intDoc
     */
    private $intDoc = [
        
    ];

    /**
     * Adds as intDoc
     *
     * @return self
     * @param \Pohoda\IntDoc\IntDocType $intDoc
     */
    public function addToIntDoc(\Pohoda\IntDoc\IntDocType $intDoc)
    {
        $this->intDoc[] = $intDoc;
        return $this;
    }

    /**
     * isset intDoc
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIntDoc($index)
    {
        return isset($this->intDoc[$index]);
    }

    /**
     * unset intDoc
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIntDoc($index)
    {
        unset($this->intDoc[$index]);
    }

    /**
     * Gets as intDoc
     *
     * @return \Pohoda\IntDoc\IntDocType[]
     */
    public function getIntDoc()
    {
        return $this->intDoc;
    }

    /**
     * Sets a new intDoc
     *
     * @param \Pohoda\IntDoc\IntDocType[] $intDoc
     * @return self
     */
    public function setIntDoc(array $intDoc = null)
    {
        $this->intDoc = $intDoc;
        return $this;
    }
}

