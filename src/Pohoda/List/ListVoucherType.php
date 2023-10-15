<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\ListVersionType;

/**
 * Class representing ListVoucherType
 *
 *
 * XSD Type: listVoucherType
 */
class ListVoucherType extends ListVersionType
{
    /**
     * @var \Pohoda\Voucher\VoucherType[] $voucher
     */
    private $voucher = [
        
    ];

    /**
     * Adds as voucher
     *
     * @return self
     * @param \Pohoda\Voucher\VoucherType $voucher
     */
    public function addToVoucher(\Pohoda\Voucher\VoucherType $voucher)
    {
        $this->voucher[] = $voucher;
        return $this;
    }

    /**
     * isset voucher
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVoucher($index)
    {
        return isset($this->voucher[$index]);
    }

    /**
     * unset voucher
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVoucher($index)
    {
        unset($this->voucher[$index]);
    }

    /**
     * Gets as voucher
     *
     * @return \Pohoda\Voucher\VoucherType[]
     */
    public function getVoucher()
    {
        return $this->voucher;
    }

    /**
     * Sets a new voucher
     *
     * @param \Pohoda\Voucher\VoucherType[] $voucher
     * @return self
     */
    public function setVoucher(array $voucher = null)
    {
        $this->voucher = $voucher;
        return $this;
    }
}

