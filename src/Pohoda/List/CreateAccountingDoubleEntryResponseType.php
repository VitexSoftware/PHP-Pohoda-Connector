<?php

namespace Pohoda\List;

use Pohoda\Documentresponse\DocumentResponseType;

/**
 * Class representing CreateAccountingDoubleEntryResponseType
 *
 *
 * XSD Type: createAccountingDoubleEntryResponseType
 */
class CreateAccountingDoubleEntryResponseType extends DocumentResponseType
{
    /**
     * @var \Pohoda\List\CreateAccountingResponseType[] $createAccountingResponse
     */
    private $createAccountingResponse = [
        
    ];

    /**
     * Adds as createAccountingResponse
     *
     * @return self
     * @param \Pohoda\List\CreateAccountingResponseType $createAccountingResponse
     */
    public function addToCreateAccountingResponse(\Pohoda\List\CreateAccountingResponseType $createAccountingResponse)
    {
        $this->createAccountingResponse[] = $createAccountingResponse;
        return $this;
    }

    /**
     * isset createAccountingResponse
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCreateAccountingResponse($index)
    {
        return isset($this->createAccountingResponse[$index]);
    }

    /**
     * unset createAccountingResponse
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCreateAccountingResponse($index)
    {
        unset($this->createAccountingResponse[$index]);
    }

    /**
     * Gets as createAccountingResponse
     *
     * @return \Pohoda\List\CreateAccountingResponseType[]
     */
    public function getCreateAccountingResponse()
    {
        return $this->createAccountingResponse;
    }

    /**
     * Sets a new createAccountingResponse
     *
     * @param \Pohoda\List\CreateAccountingResponseType[] $createAccountingResponse
     * @return self
     */
    public function setCreateAccountingResponse(array $createAccountingResponse = null)
    {
        $this->createAccountingResponse = $createAccountingResponse;
        return $this;
    }
}

