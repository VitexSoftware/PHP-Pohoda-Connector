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
 * Class representing ListEnquiryType.
 *
 * XSD Type: listEnquiryType
 */
class ListEnquiryType extends ListVersionType
{
    /**
     * @var \Pohoda\Enquiry\EnquiryType[]
     */
    private array $enquiry = [
    ];

    /**
     * Adds as enquiry.
     *
     * @return self
     */
    public function addToEnquiry(\Pohoda\Enquiry\EnquiryType $enquiry)
    {
        $this->enquiry[] = $enquiry;

        return $this;
    }

    /**
     * isset enquiry.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetEnquiry($index)
    {
        return isset($this->enquiry[$index]);
    }

    /**
     * unset enquiry.
     *
     * @param int|string $index
     */
    public function unsetEnquiry($index): void
    {
        unset($this->enquiry[$index]);
    }

    /**
     * Gets as enquiry.
     *
     * @return \Pohoda\Enquiry\EnquiryType[]
     */
    public function getEnquiry()
    {
        return $this->enquiry;
    }

    /**
     * Sets a new enquiry.
     *
     * @param \Pohoda\Enquiry\EnquiryType[] $enquiry
     *
     * @return self
     */
    public function setEnquiry(?array $enquiry = null)
    {
        $this->enquiry = $enquiry;

        return $this;
    }
}
