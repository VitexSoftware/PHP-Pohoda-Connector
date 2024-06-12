<?php

namespace Pohoda\Documentresponse;

/**
 * Class representing ImportDetailsType
 *
 *
 * XSD Type: importDetailsType
 */
class ImportDetailsType
{
    /**
     * @var \Pohoda\Documentresponse\DetailType[] $detail
     */
    private $detail = [
    ];

    /**
     * Adds as detail
     *
     * @return self
     * @param \Pohoda\Documentresponse\DetailType $detail
     */
    public function addToDetail(\Pohoda\Documentresponse\DetailType $detail)
    {
        $this->detail[] = $detail;
        return $this;
    }

    /**
     * isset detail
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDetail($index)
    {
        return isset($this->detail[$index]);
    }

    /**
     * unset detail
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDetail($index)
    {
        unset($this->detail[$index]);
    }

    /**
     * Gets as detail
     *
     * @return \Pohoda\Documentresponse\DetailType[]
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Sets a new detail
     *
     * @param \Pohoda\Documentresponse\DetailType[] $detail
     * @return self
     */
    public function setDetail(array $detail)
    {
        $this->detail = $detail;
        return $this;
    }
}
