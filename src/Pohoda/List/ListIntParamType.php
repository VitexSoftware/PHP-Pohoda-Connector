<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListIntParamType
 *
 *
 * XSD Type: listIntParamType
 */
class ListIntParamType extends ListVersionType
{
    /**
     * @var \Pohoda\IntParam\IntParamDetailType[] $intParamDetail
     */
    private $intParamDetail = [

    ];

    /**
     * Adds as intParamDetail
     *
     * @return self
     * @param \Pohoda\IntParam\IntParamDetailType $intParamDetail
     */
    public function addToIntParamDetail(\Pohoda\IntParam\IntParamDetailType $intParamDetail)
    {
        $this->intParamDetail[] = $intParamDetail;
        return $this;
    }

    /**
     * isset intParamDetail
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIntParamDetail($index)
    {
        return isset($this->intParamDetail[$index]);
    }

    /**
     * unset intParamDetail
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIntParamDetail($index)
    {
        unset($this->intParamDetail[$index]);
    }

    /**
     * Gets as intParamDetail
     *
     * @return \Pohoda\IntParam\IntParamDetailType[]
     */
    public function getIntParamDetail()
    {
        return $this->intParamDetail;
    }

    /**
     * Sets a new intParamDetail
     *
     * @param \Pohoda\IntParam\IntParamDetailType[] $intParamDetail
     * @return self
     */
    public function setIntParamDetail(array $intParamDetail = null)
    {
        $this->intParamDetail = $intParamDetail;
        return $this;
    }
}
