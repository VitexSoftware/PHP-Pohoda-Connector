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
 * Class representing ListVoucherType.
 *
 * XSD Type: listVoucherType
 */
class ListVoucherType extends ListVersionType
{
    /**
     * @var \Pohoda\Voucher\VoucherType[]
     */
    private array $voucher = [
    ];

    /**
     * Adds as voucher.
     *
     * @return self
     */
    public function addToVoucher(\Pohoda\Voucher\VoucherType $voucher)
    {
        $this->voucher[] = $voucher;

        return $this;
    }

    /**
     * isset voucher.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetVoucher($index)
    {
        return isset($this->voucher[$index]);
    }

    /**
     * unset voucher.
     *
     * @param int|string $index
     */
    public function unsetVoucher($index): void
    {
        unset($this->voucher[$index]);
    }

    /**
     * Gets as voucher.
     *
     * @return \Pohoda\Voucher\VoucherType[]
     */
    public function getVoucher()
    {
        return $this->voucher;
    }

    /**
     * Sets a new voucher.
     *
     * @param \Pohoda\Voucher\VoucherType[] $voucher
     *
     * @return self
     */
    public function setVoucher(?array $voucher = null)
    {
        $this->voucher = $voucher;

        return $this;
    }
}
