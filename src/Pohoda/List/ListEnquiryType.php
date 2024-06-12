<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListEnquiryType
 *
 *
 * XSD Type: listEnquiryType
 */
class ListEnquiryType extends ListVersionType
{
    /**
     * @var \Pohoda\Enquiry\EnquiryType[] $enquiry
     */
    private $enquiry = [
    ];

    /**
     * Adds as enquiry
     *
     * @return self
     * @param \Pohoda\Enquiry\EnquiryType $enquiry
     */
    public function addToEnquiry(\Pohoda\Enquiry\EnquiryType $enquiry)
    {
        $this->enquiry[] = $enquiry;
        return $this;
    }

    /**
     * isset enquiry
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEnquiry($index)
    {
        return isset($this->enquiry[$index]);
    }

    /**
     * unset enquiry
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEnquiry($index)
    {
        unset($this->enquiry[$index]);
    }

    /**
     * Gets as enquiry
     *
     * @return \Pohoda\Enquiry\EnquiryType[]
     */
    public function getEnquiry()
    {
        return $this->enquiry;
    }

    /**
     * Sets a new enquiry
     *
     * @param \Pohoda\Enquiry\EnquiryType[] $enquiry
     * @return self
     */
    public function setEnquiry(array $enquiry = null)
    {
        $this->enquiry = $enquiry;
        return $this;
    }
}
