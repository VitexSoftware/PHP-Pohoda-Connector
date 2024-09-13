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

use Pohoda\Documentresponse\DocumentResponseType;

/**
 * Class representing CreateAccountingDoubleEntryResponseType.
 *
 * XSD Type: createAccountingDoubleEntryResponseType
 */
class CreateAccountingDoubleEntryResponseType extends DocumentResponseType
{
    /**
     * @var \Pohoda\List\CreateAccountingResponseType[]
     */
    private array $createAccountingResponse = [
    ];

    /**
     * Adds as createAccountingResponse.
     *
     * @return self
     */
    public function addToCreateAccountingResponse(\Pohoda\List\CreateAccountingResponseType $createAccountingResponse)
    {
        $this->createAccountingResponse[] = $createAccountingResponse;

        return $this;
    }

    /**
     * isset createAccountingResponse.
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetCreateAccountingResponse($index)
    {
        return isset($this->createAccountingResponse[$index]);
    }

    /**
     * unset createAccountingResponse.
     *
     * @param int|string $index
     */
    public function unsetCreateAccountingResponse($index): void
    {
        unset($this->createAccountingResponse[$index]);
    }

    /**
     * Gets as createAccountingResponse.
     *
     * @return \Pohoda\List\CreateAccountingResponseType[]
     */
    public function getCreateAccountingResponse()
    {
        return $this->createAccountingResponse;
    }

    /**
     * Sets a new createAccountingResponse.
     *
     * @param \Pohoda\List\CreateAccountingResponseType[] $createAccountingResponse
     *
     * @return self
     */
    public function setCreateAccountingResponse(?array $createAccountingResponse = null)
    {
        $this->createAccountingResponse = $createAccountingResponse;

        return $this;
    }
}
