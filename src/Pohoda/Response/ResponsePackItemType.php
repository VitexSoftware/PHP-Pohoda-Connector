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

namespace Pohoda\Response;

/**
 * Class representing ResponsePackItemType.
 *
 * XSD Type: responsePackItemType
 */
class ResponsePackItemType
{
    private string $version = null;
    private string $id = null;
    private string $state = null;
    private string $note = null;
    private \Pohoda\AddressBook\AddressbookResponse $addressbookResponse = null;
    private \Pohoda\Invoice\InvoiceResponse $invoiceResponse = null;
    private \Pohoda\NumericalSeries\NumericalSeriesResponse $numericalSeriesResponse = null;
    private \Pohoda\Voucher\VoucherResponse $voucherResponse = null;
    private \Pohoda\IntDoc\IntDocResponse $intDocResponse = null;
    private \Pohoda\Vydejka\VydejkaResponse $vydejkaResponse = null;
    private \Pohoda\Prijemka\PrijemkaResponse $prijemkaResponse = null;
    private \Pohoda\Prodejka\ProdejkaResponse $prodejkaResponse = null;
    private \Pohoda\Stock\StockItemResponse $stockItemResponse = null;
    private \Pohoda\Order\OrderResponse $orderResponse = null;
    private \Pohoda\Enquiry\EnquiryResponse $enquiryResponse = null;
    private \Pohoda\Offer\OfferResponse $offerResponse = null;
    private \Pohoda\Vyroba\VyrobaResponse $vyrobaResponse = null;
    private \Pohoda\Prevodka\PrevodkaResponse $prevodkaResponse = null;
    private \Pohoda\Parameter\ParameterItemResponse $parameterItemResponse = null;
    private \Pohoda\Contract\ContractResponse $contractResponse = null;
    private \Pohoda\Storage\StorageResponse $storageResponse = null;
    private \Pohoda\IntParam\IntParamResponse $intParamResponse = null;
    private \Pohoda\IndividualPrice\IndividualPriceResponse $individualPriceResponse = null;
    private \Pohoda\Store\StoreResponse $storeResponse = null;
    private \Pohoda\GroupStocks\GroupStocksResponse $groupStocksResponse = null;
    private \Pohoda\Print\PrintResponse $printResponse = null;
    private \Pohoda\Lock\LockResponse $lockResponse = null;
    private \Pohoda\Isdoc\IsdocResponse $isdocResponse = null;
    private \Pohoda\SendEET\SendEETResponse $sendEETResponse = null;
    private \Pohoda\MKasa\MKasaResponse $mKasaResponse = null;
    private \Pohoda\InventoryLists\InventoryListsResponse $inventoryListsResponse = null;
    private \Pohoda\List\ListUserCodeResponse $listUserCodeResponse = null;
    private \Pohoda\Supplier\SupplierResponse $supplierResponse = null;
    private \Pohoda\Category\CategoryResponse $categoryResponse = null;
    private \Pohoda\Gdpr\GDPRResponse $gDPRResponse = null;
    private \Pohoda\AccountingSalesVouchers\AccountingSalesVouchersResponse $accountingSalesVouchersResponse = null;
    private \Pohoda\ProductRequirement\ProductRequirementResponse $productRequirementResponse = null;
    private \Pohoda\Bank\BankResponse $bankResponse = null;
    private \Pohoda\BankAccount\BankAccountResponse $bankAccountResponse = null;
    private \Pohoda\RulesPairing\RulesPairingResponse $rulesPairingResponse = null;
    private \Pohoda\LiquidationWithoutLink\LiquidationWithoutLinkResponse $liquidationWithoutLinkResponse = null;
    private \Pohoda\Discount\DiscountResponse $discountResponse = null;
    private \Pohoda\AutomaticLiquidationResponse $automaticLiquidationResponse = null;
    private \Pohoda\Service\ServiceResponse $serviceResponse = null;
    private \Pohoda\ListCentre\ListCentre $listCentre = null;
    private \Pohoda\ListActivity\ListActivity $listActivity = null;
    private \Pohoda\ListContract\ListContract $listContract = null;
    private \Pohoda\List\ListCash $listCash = null;
    private \Pohoda\List\ListCashRegister $listCashRegister = null;
    private \Pohoda\List\ListBankAccount $listBankAccount = null;
    private \Pohoda\List\ListAccountingSingleEntry $listAccountingSingleEntry = null;
    private \Pohoda\List\ListAccountingDoubleEntry $listAccountingDoubleEntry = null;
    private \Pohoda\List\ListAccount $listAccount = null;
    private \Pohoda\List\ListStorage $listStorage = null;
    private \Pohoda\List\ListSellingPrice $listSellingPrice = null;
    private \Pohoda\List\ListNumericSeries $listNumericSeries = null;
    private \Pohoda\List\CreateAccountingDoubleEntryResponse $createAccountingDoubleEntryResponse = null;
    private \Pohoda\Accountingunit\ListAccountingUnit $listAccountingUnit = null;
    private \Pohoda\ListStock\ListStock $listStock = null;
    private \Pohoda\List\ListInvoice $listInvoice = null;
    private \Pohoda\ListAddBook\ListAddressBook $listAddressBook = null;
    private \Pohoda\List\ListOrder $listOrder = null;
    private \Pohoda\List\ListEnquiry $listEnquiry = null;
    private \Pohoda\List\ListOffer $listOffer = null;
    private \Pohoda\List\ListParameter $listParameter = null;
    private \Pohoda\List\ListUserCodePack $listUserCodePack = null;
    private \Pohoda\List\ListVydejka $listVydejka = null;
    private \Pohoda\List\ListPrijemka $listPrijemka = null;
    private \Pohoda\List\ListBalance $listBalance = null;
    private \Pohoda\List\ListCategory $listCategory = null;
    private \Pohoda\List\ListIntParam $listIntParam = null;
    private \Pohoda\List\ListIntDoc $listIntDoc = null;
    private \Pohoda\List\ListProdejka $listProdejka = null;
    private \Pohoda\List\ListVoucher $listVoucher = null;
    private \Pohoda\List\ListPrevodka $listPrevodka = null;
    private \Pohoda\List\ListVyroba $listVyroba = null;
    private \Pohoda\List\TaxDataResponse $taxDataResponse = null;
    private \Pohoda\List\ListIndividualPrice $listIndividualPrice = null;
    private \Pohoda\List\ListBank $listBank = null;
    private \Pohoda\List\ListAccountancy $listAccountancy = null;
    private \Pohoda\List\ListStore $listStore = null;
    private \Pohoda\List\ListSupplier $listSupplier = null;
    private \Pohoda\List\ListGroupStocks $listGroupStocks = null;
    private \Pohoda\List\ListActionPrice $listActionPrice = null;
    private \Pohoda\List\ListInventoryLists $listInventoryLists = null;
    private \Pohoda\List\ListPayment $listPayment = null;
    private \Pohoda\List\ListNumericalSeries $listNumericalSeries = null;
    private \Pohoda\List\ListGDPR $listGDPR = null;
    private \Pohoda\List\ListEstablishment $listEstablishment = null;
    private \Pohoda\List\ListAccountingFormOfPayment $listAccountingFormOfPayment = null;
    private \Pohoda\List\ListClassificationVAT $listClassificationVAT = null;
    private \Pohoda\List\ListGlobalSettings $listGlobalSettings = null;
    private \Pohoda\List\ListRegistrationNumber $listRegistrationNumber = null;
    private \Pohoda\List\ListProductRequirement $listProductRequirement = null;
    private \Pohoda\List\ListMovement $listMovement = null;
    private \Pohoda\List\ListRecyclingContrib $listRecyclingContrib = null;
    private \Pohoda\List\ListService $listService = null;
    private \Pohoda\List\ListRulesPairing $listRulesPairing = null;

    /**
     * Gets as version.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Gets as id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets as state.
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets a new state.
     *
     * @param string $state
     *
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Gets as note.
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note.
     *
     * @param string $note
     *
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Gets as addressbookResponse.
     *
     * @return \Pohoda\AddressBook\AddressbookResponse
     */
    public function getAddressbookResponse()
    {
        return $this->addressbookResponse;
    }

    /**
     * Sets a new addressbookResponse.
     *
     * @return self
     */
    public function setAddressbookResponse(?\Pohoda\AddressBook\AddressbookResponse $addressbookResponse = null)
    {
        $this->addressbookResponse = $addressbookResponse;

        return $this;
    }

    /**
     * Gets as invoiceResponse.
     *
     * @return \Pohoda\Invoice\InvoiceResponse
     */
    public function getInvoiceResponse()
    {
        return $this->invoiceResponse;
    }

    /**
     * Sets a new invoiceResponse.
     *
     * @return self
     */
    public function setInvoiceResponse(?\Pohoda\Invoice\InvoiceResponse $invoiceResponse = null)
    {
        $this->invoiceResponse = $invoiceResponse;

        return $this;
    }

    /**
     * Gets as numericalSeriesResponse.
     *
     * @return \Pohoda\NumericalSeries\NumericalSeriesResponse
     */
    public function getNumericalSeriesResponse()
    {
        return $this->numericalSeriesResponse;
    }

    /**
     * Sets a new numericalSeriesResponse.
     *
     * @return self
     */
    public function setNumericalSeriesResponse(?\Pohoda\NumericalSeries\NumericalSeriesResponse $numericalSeriesResponse = null)
    {
        $this->numericalSeriesResponse = $numericalSeriesResponse;

        return $this;
    }

    /**
     * Gets as voucherResponse.
     *
     * @return \Pohoda\Voucher\VoucherResponse
     */
    public function getVoucherResponse()
    {
        return $this->voucherResponse;
    }

    /**
     * Sets a new voucherResponse.
     *
     * @return self
     */
    public function setVoucherResponse(?\Pohoda\Voucher\VoucherResponse $voucherResponse = null)
    {
        $this->voucherResponse = $voucherResponse;

        return $this;
    }

    /**
     * Gets as intDocResponse.
     *
     * @return \Pohoda\IntDoc\IntDocResponse
     */
    public function getIntDocResponse()
    {
        return $this->intDocResponse;
    }

    /**
     * Sets a new intDocResponse.
     *
     * @return self
     */
    public function setIntDocResponse(?\Pohoda\IntDoc\IntDocResponse $intDocResponse = null)
    {
        $this->intDocResponse = $intDocResponse;

        return $this;
    }

    /**
     * Gets as vydejkaResponse.
     *
     * @return \Pohoda\Vydejka\VydejkaResponse
     */
    public function getVydejkaResponse()
    {
        return $this->vydejkaResponse;
    }

    /**
     * Sets a new vydejkaResponse.
     *
     * @return self
     */
    public function setVydejkaResponse(?\Pohoda\Vydejka\VydejkaResponse $vydejkaResponse = null)
    {
        $this->vydejkaResponse = $vydejkaResponse;

        return $this;
    }

    /**
     * Gets as prijemkaResponse.
     *
     * @return \Pohoda\Prijemka\PrijemkaResponse
     */
    public function getPrijemkaResponse()
    {
        return $this->prijemkaResponse;
    }

    /**
     * Sets a new prijemkaResponse.
     *
     * @return self
     */
    public function setPrijemkaResponse(?\Pohoda\Prijemka\PrijemkaResponse $prijemkaResponse = null)
    {
        $this->prijemkaResponse = $prijemkaResponse;

        return $this;
    }

    /**
     * Gets as prodejkaResponse.
     *
     * @return \Pohoda\Prodejka\ProdejkaResponse
     */
    public function getProdejkaResponse()
    {
        return $this->prodejkaResponse;
    }

    /**
     * Sets a new prodejkaResponse.
     *
     * @return self
     */
    public function setProdejkaResponse(?\Pohoda\Prodejka\ProdejkaResponse $prodejkaResponse = null)
    {
        $this->prodejkaResponse = $prodejkaResponse;

        return $this;
    }

    /**
     * Gets as stockItemResponse.
     *
     * @return \Pohoda\Stock\StockItemResponse
     */
    public function getStockItemResponse()
    {
        return $this->stockItemResponse;
    }

    /**
     * Sets a new stockItemResponse.
     *
     * @return self
     */
    public function setStockItemResponse(?\Pohoda\Stock\StockItemResponse $stockItemResponse = null)
    {
        $this->stockItemResponse = $stockItemResponse;

        return $this;
    }

    /**
     * Gets as orderResponse.
     *
     * @return \Pohoda\Order\OrderResponse
     */
    public function getOrderResponse()
    {
        return $this->orderResponse;
    }

    /**
     * Sets a new orderResponse.
     *
     * @return self
     */
    public function setOrderResponse(?\Pohoda\Order\OrderResponse $orderResponse = null)
    {
        $this->orderResponse = $orderResponse;

        return $this;
    }

    /**
     * Gets as enquiryResponse.
     *
     * @return \Pohoda\Enquiry\EnquiryResponse
     */
    public function getEnquiryResponse()
    {
        return $this->enquiryResponse;
    }

    /**
     * Sets a new enquiryResponse.
     *
     * @return self
     */
    public function setEnquiryResponse(?\Pohoda\Enquiry\EnquiryResponse $enquiryResponse = null)
    {
        $this->enquiryResponse = $enquiryResponse;

        return $this;
    }

    /**
     * Gets as offerResponse.
     *
     * @return \Pohoda\Offer\OfferResponse
     */
    public function getOfferResponse()
    {
        return $this->offerResponse;
    }

    /**
     * Sets a new offerResponse.
     *
     * @return self
     */
    public function setOfferResponse(?\Pohoda\Offer\OfferResponse $offerResponse = null)
    {
        $this->offerResponse = $offerResponse;

        return $this;
    }

    /**
     * Gets as vyrobaResponse.
     *
     * @return \Pohoda\Vyroba\VyrobaResponse
     */
    public function getVyrobaResponse()
    {
        return $this->vyrobaResponse;
    }

    /**
     * Sets a new vyrobaResponse.
     *
     * @return self
     */
    public function setVyrobaResponse(?\Pohoda\Vyroba\VyrobaResponse $vyrobaResponse = null)
    {
        $this->vyrobaResponse = $vyrobaResponse;

        return $this;
    }

    /**
     * Gets as prevodkaResponse.
     *
     * @return \Pohoda\Prevodka\PrevodkaResponse
     */
    public function getPrevodkaResponse()
    {
        return $this->prevodkaResponse;
    }

    /**
     * Sets a new prevodkaResponse.
     *
     * @return self
     */
    public function setPrevodkaResponse(?\Pohoda\Prevodka\PrevodkaResponse $prevodkaResponse = null)
    {
        $this->prevodkaResponse = $prevodkaResponse;

        return $this;
    }

    /**
     * Gets as parameterItemResponse.
     *
     * @return \Pohoda\Parameter\ParameterItemResponse
     */
    public function getParameterItemResponse()
    {
        return $this->parameterItemResponse;
    }

    /**
     * Sets a new parameterItemResponse.
     *
     * @return self
     */
    public function setParameterItemResponse(?\Pohoda\Parameter\ParameterItemResponse $parameterItemResponse = null)
    {
        $this->parameterItemResponse = $parameterItemResponse;

        return $this;
    }

    /**
     * Gets as contractResponse.
     *
     * @return \Pohoda\Contract\ContractResponse
     */
    public function getContractResponse()
    {
        return $this->contractResponse;
    }

    /**
     * Sets a new contractResponse.
     *
     * @return self
     */
    public function setContractResponse(?\Pohoda\Contract\ContractResponse $contractResponse = null)
    {
        $this->contractResponse = $contractResponse;

        return $this;
    }

    /**
     * Gets as storageResponse.
     *
     * @return \Pohoda\Storage\StorageResponse
     */
    public function getStorageResponse()
    {
        return $this->storageResponse;
    }

    /**
     * Sets a new storageResponse.
     *
     * @return self
     */
    public function setStorageResponse(?\Pohoda\Storage\StorageResponse $storageResponse = null)
    {
        $this->storageResponse = $storageResponse;

        return $this;
    }

    /**
     * Gets as intParamResponse.
     *
     * @return \Pohoda\IntParam\IntParamResponse
     */
    public function getIntParamResponse()
    {
        return $this->intParamResponse;
    }

    /**
     * Sets a new intParamResponse.
     *
     * @return self
     */
    public function setIntParamResponse(?\Pohoda\IntParam\IntParamResponse $intParamResponse = null)
    {
        $this->intParamResponse = $intParamResponse;

        return $this;
    }

    /**
     * Gets as individualPriceResponse.
     *
     * @return \Pohoda\IndividualPrice\IndividualPriceResponse
     */
    public function getIndividualPriceResponse()
    {
        return $this->individualPriceResponse;
    }

    /**
     * Sets a new individualPriceResponse.
     *
     * @return self
     */
    public function setIndividualPriceResponse(?\Pohoda\IndividualPrice\IndividualPriceResponse $individualPriceResponse = null)
    {
        $this->individualPriceResponse = $individualPriceResponse;

        return $this;
    }

    /**
     * Gets as storeResponse.
     *
     * @return \Pohoda\Store\StoreResponse
     */
    public function getStoreResponse()
    {
        return $this->storeResponse;
    }

    /**
     * Sets a new storeResponse.
     *
     * @return self
     */
    public function setStoreResponse(?\Pohoda\Store\StoreResponse $storeResponse = null)
    {
        $this->storeResponse = $storeResponse;

        return $this;
    }

    /**
     * Gets as groupStocksResponse.
     *
     * @return \Pohoda\GroupStocks\GroupStocksResponse
     */
    public function getGroupStocksResponse()
    {
        return $this->groupStocksResponse;
    }

    /**
     * Sets a new groupStocksResponse.
     *
     * @return self
     */
    public function setGroupStocksResponse(?\Pohoda\GroupStocks\GroupStocksResponse $groupStocksResponse = null)
    {
        $this->groupStocksResponse = $groupStocksResponse;

        return $this;
    }

    /**
     * Gets as printResponse.
     *
     * @return \Pohoda\Print\PrintResponse
     */
    public function getPrintResponse()
    {
        return $this->printResponse;
    }

    /**
     * Sets a new printResponse.
     *
     * @return self
     */
    public function setPrintResponse(?\Pohoda\Print\PrintResponse $printResponse = null)
    {
        $this->printResponse = $printResponse;

        return $this;
    }

    /**
     * Gets as lockResponse.
     *
     * @return \Pohoda\Lock\LockResponse
     */
    public function getLockResponse()
    {
        return $this->lockResponse;
    }

    /**
     * Sets a new lockResponse.
     *
     * @return self
     */
    public function setLockResponse(?\Pohoda\Lock\LockResponse $lockResponse = null)
    {
        $this->lockResponse = $lockResponse;

        return $this;
    }

    /**
     * Gets as isdocResponse.
     *
     * @return \Pohoda\Isdoc\IsdocResponse
     */
    public function getIsdocResponse()
    {
        return $this->isdocResponse;
    }

    /**
     * Sets a new isdocResponse.
     *
     * @return self
     */
    public function setIsdocResponse(?\Pohoda\Isdoc\IsdocResponse $isdocResponse = null)
    {
        $this->isdocResponse = $isdocResponse;

        return $this;
    }

    /**
     * Gets as sendEETResponse.
     *
     * @return \Pohoda\SendEET\SendEETResponse
     */
    public function getSendEETResponse()
    {
        return $this->sendEETResponse;
    }

    /**
     * Sets a new sendEETResponse.
     *
     * @return self
     */
    public function setSendEETResponse(?\Pohoda\SendEET\SendEETResponse $sendEETResponse = null)
    {
        $this->sendEETResponse = $sendEETResponse;

        return $this;
    }

    /**
     * Gets as mKasaResponse.
     *
     * @return \Pohoda\MKasa\MKasaResponse
     */
    public function getMKasaResponse()
    {
        return $this->mKasaResponse;
    }

    /**
     * Sets a new mKasaResponse.
     *
     * @return self
     */
    public function setMKasaResponse(?\Pohoda\MKasa\MKasaResponse $mKasaResponse = null)
    {
        $this->mKasaResponse = $mKasaResponse;

        return $this;
    }

    /**
     * Gets as inventoryListsResponse.
     *
     * @return \Pohoda\InventoryLists\InventoryListsResponse
     */
    public function getInventoryListsResponse()
    {
        return $this->inventoryListsResponse;
    }

    /**
     * Sets a new inventoryListsResponse.
     *
     * @return self
     */
    public function setInventoryListsResponse(?\Pohoda\InventoryLists\InventoryListsResponse $inventoryListsResponse = null)
    {
        $this->inventoryListsResponse = $inventoryListsResponse;

        return $this;
    }

    /**
     * Gets as listUserCodeResponse.
     *
     * @return \Pohoda\List\ListUserCodeResponse
     */
    public function getListUserCodeResponse()
    {
        return $this->listUserCodeResponse;
    }

    /**
     * Sets a new listUserCodeResponse.
     *
     * @return self
     */
    public function setListUserCodeResponse(?\Pohoda\List\ListUserCodeResponse $listUserCodeResponse = null)
    {
        $this->listUserCodeResponse = $listUserCodeResponse;

        return $this;
    }

    /**
     * Gets as supplierResponse.
     *
     * @return \Pohoda\Supplier\SupplierResponse
     */
    public function getSupplierResponse()
    {
        return $this->supplierResponse;
    }

    /**
     * Sets a new supplierResponse.
     *
     * @return self
     */
    public function setSupplierResponse(?\Pohoda\Supplier\SupplierResponse $supplierResponse = null)
    {
        $this->supplierResponse = $supplierResponse;

        return $this;
    }

    /**
     * Gets as categoryResponse.
     *
     * @return \Pohoda\Category\CategoryResponse
     */
    public function getCategoryResponse()
    {
        return $this->categoryResponse;
    }

    /**
     * Sets a new categoryResponse.
     *
     * @return self
     */
    public function setCategoryResponse(?\Pohoda\Category\CategoryResponse $categoryResponse = null)
    {
        $this->categoryResponse = $categoryResponse;

        return $this;
    }

    /**
     * Gets as gDPRResponse.
     *
     * @return \Pohoda\Gdpr\GDPRResponse
     */
    public function getGDPRResponse()
    {
        return $this->gDPRResponse;
    }

    /**
     * Sets a new gDPRResponse.
     *
     * @return self
     */
    public function setGDPRResponse(?\Pohoda\Gdpr\GDPRResponse $gDPRResponse = null)
    {
        $this->gDPRResponse = $gDPRResponse;

        return $this;
    }

    /**
     * Gets as accountingSalesVouchersResponse.
     *
     * @return \Pohoda\AccountingSalesVouchers\AccountingSalesVouchersResponse
     */
    public function getAccountingSalesVouchersResponse()
    {
        return $this->accountingSalesVouchersResponse;
    }

    /**
     * Sets a new accountingSalesVouchersResponse.
     *
     * @return self
     */
    public function setAccountingSalesVouchersResponse(?\Pohoda\AccountingSalesVouchers\AccountingSalesVouchersResponse $accountingSalesVouchersResponse = null)
    {
        $this->accountingSalesVouchersResponse = $accountingSalesVouchersResponse;

        return $this;
    }

    /**
     * Gets as productRequirementResponse.
     *
     * @return \Pohoda\ProductRequirement\ProductRequirementResponse
     */
    public function getProductRequirementResponse()
    {
        return $this->productRequirementResponse;
    }

    /**
     * Sets a new productRequirementResponse.
     *
     * @return self
     */
    public function setProductRequirementResponse(?\Pohoda\ProductRequirement\ProductRequirementResponse $productRequirementResponse = null)
    {
        $this->productRequirementResponse = $productRequirementResponse;

        return $this;
    }

    /**
     * Gets as bankResponse.
     *
     * @return \Pohoda\Bank\BankResponse
     */
    public function getBankResponse()
    {
        return $this->bankResponse;
    }

    /**
     * Sets a new bankResponse.
     *
     * @return self
     */
    public function setBankResponse(?\Pohoda\Bank\BankResponse $bankResponse = null)
    {
        $this->bankResponse = $bankResponse;

        return $this;
    }

    /**
     * Gets as bankAccountResponse.
     *
     * @return \Pohoda\BankAccount\BankAccountResponse
     */
    public function getBankAccountResponse()
    {
        return $this->bankAccountResponse;
    }

    /**
     * Sets a new bankAccountResponse.
     *
     * @return self
     */
    public function setBankAccountResponse(?\Pohoda\BankAccount\BankAccountResponse $bankAccountResponse = null)
    {
        $this->bankAccountResponse = $bankAccountResponse;

        return $this;
    }

    /**
     * Gets as rulesPairingResponse.
     *
     * @return \Pohoda\RulesPairing\RulesPairingResponse
     */
    public function getRulesPairingResponse()
    {
        return $this->rulesPairingResponse;
    }

    /**
     * Sets a new rulesPairingResponse.
     *
     * @return self
     */
    public function setRulesPairingResponse(?\Pohoda\RulesPairing\RulesPairingResponse $rulesPairingResponse = null)
    {
        $this->rulesPairingResponse = $rulesPairingResponse;

        return $this;
    }

    /**
     * Gets as liquidationWithoutLinkResponse.
     *
     * @return \Pohoda\LiquidationWithoutLink\LiquidationWithoutLinkResponse
     */
    public function getLiquidationWithoutLinkResponse()
    {
        return $this->liquidationWithoutLinkResponse;
    }

    /**
     * Sets a new liquidationWithoutLinkResponse.
     *
     * @return self
     */
    public function setLiquidationWithoutLinkResponse(?\Pohoda\LiquidationWithoutLink\LiquidationWithoutLinkResponse $liquidationWithoutLinkResponse = null)
    {
        $this->liquidationWithoutLinkResponse = $liquidationWithoutLinkResponse;

        return $this;
    }

    /**
     * Gets as discountResponse.
     *
     * @return \Pohoda\Discount\DiscountResponse
     */
    public function getDiscountResponse()
    {
        return $this->discountResponse;
    }

    /**
     * Sets a new discountResponse.
     *
     * @return self
     */
    public function setDiscountResponse(?\Pohoda\Discount\DiscountResponse $discountResponse = null)
    {
        $this->discountResponse = $discountResponse;

        return $this;
    }

    /**
     * Gets as automaticLiquidationResponse.
     *
     * @return \Pohoda\AutomaticLiquidationResponse
     */
    public function getAutomaticLiquidationResponse()
    {
        return $this->automaticLiquidationResponse;
    }

    /**
     * Sets a new automaticLiquidationResponse.
     *
     * @return self
     */
    public function setAutomaticLiquidationResponse(?\Pohoda\AutomaticLiquidationResponse $automaticLiquidationResponse = null)
    {
        $this->automaticLiquidationResponse = $automaticLiquidationResponse;

        return $this;
    }

    /**
     * Gets as serviceResponse.
     *
     * @return \Pohoda\Service\ServiceResponse
     */
    public function getServiceResponse()
    {
        return $this->serviceResponse;
    }

    /**
     * Sets a new serviceResponse.
     *
     * @return self
     */
    public function setServiceResponse(?\Pohoda\Service\ServiceResponse $serviceResponse = null)
    {
        $this->serviceResponse = $serviceResponse;

        return $this;
    }

    /**
     * Gets as listCentre.
     *
     * @return \Pohoda\ListCentre\ListCentre
     */
    public function getListCentre()
    {
        return $this->listCentre;
    }

    /**
     * Sets a new listCentre.
     *
     * @return self
     */
    public function setListCentre(?\Pohoda\ListCentre\ListCentre $listCentre = null)
    {
        $this->listCentre = $listCentre;

        return $this;
    }

    /**
     * Gets as listActivity.
     *
     * @return \Pohoda\ListActivity\ListActivity
     */
    public function getListActivity()
    {
        return $this->listActivity;
    }

    /**
     * Sets a new listActivity.
     *
     * @return self
     */
    public function setListActivity(?\Pohoda\ListActivity\ListActivity $listActivity = null)
    {
        $this->listActivity = $listActivity;

        return $this;
    }

    /**
     * Gets as listContract.
     *
     * @return \Pohoda\ListContract\ListContract
     */
    public function getListContract()
    {
        return $this->listContract;
    }

    /**
     * Sets a new listContract.
     *
     * @return self
     */
    public function setListContract(?\Pohoda\ListContract\ListContract $listContract = null)
    {
        $this->listContract = $listContract;

        return $this;
    }

    /**
     * Gets as listCash.
     *
     * @return \Pohoda\List\ListCash
     */
    public function getListCash()
    {
        return $this->listCash;
    }

    /**
     * Sets a new listCash.
     *
     * @return self
     */
    public function setListCash(?\Pohoda\List\ListCash $listCash = null)
    {
        $this->listCash = $listCash;

        return $this;
    }

    /**
     * Gets as listCashRegister.
     *
     * @return \Pohoda\List\ListCashRegister
     */
    public function getListCashRegister()
    {
        return $this->listCashRegister;
    }

    /**
     * Sets a new listCashRegister.
     *
     * @return self
     */
    public function setListCashRegister(?\Pohoda\List\ListCashRegister $listCashRegister = null)
    {
        $this->listCashRegister = $listCashRegister;

        return $this;
    }

    /**
     * Gets as listBankAccount.
     *
     * @return \Pohoda\List\ListBankAccount
     */
    public function getListBankAccount()
    {
        return $this->listBankAccount;
    }

    /**
     * Sets a new listBankAccount.
     *
     * @return self
     */
    public function setListBankAccount(?\Pohoda\List\ListBankAccount $listBankAccount = null)
    {
        $this->listBankAccount = $listBankAccount;

        return $this;
    }

    /**
     * Gets as listAccountingSingleEntry.
     *
     * @return \Pohoda\List\ListAccountingSingleEntry
     */
    public function getListAccountingSingleEntry()
    {
        return $this->listAccountingSingleEntry;
    }

    /**
     * Sets a new listAccountingSingleEntry.
     *
     * @return self
     */
    public function setListAccountingSingleEntry(?\Pohoda\List\ListAccountingSingleEntry $listAccountingSingleEntry = null)
    {
        $this->listAccountingSingleEntry = $listAccountingSingleEntry;

        return $this;
    }

    /**
     * Gets as listAccountingDoubleEntry.
     *
     * @return \Pohoda\List\ListAccountingDoubleEntry
     */
    public function getListAccountingDoubleEntry()
    {
        return $this->listAccountingDoubleEntry;
    }

    /**
     * Sets a new listAccountingDoubleEntry.
     *
     * @return self
     */
    public function setListAccountingDoubleEntry(?\Pohoda\List\ListAccountingDoubleEntry $listAccountingDoubleEntry = null)
    {
        $this->listAccountingDoubleEntry = $listAccountingDoubleEntry;

        return $this;
    }

    /**
     * Gets as listAccount.
     *
     * @return \Pohoda\List\ListAccount
     */
    public function getListAccount()
    {
        return $this->listAccount;
    }

    /**
     * Sets a new listAccount.
     *
     * @return self
     */
    public function setListAccount(?\Pohoda\List\ListAccount $listAccount = null)
    {
        $this->listAccount = $listAccount;

        return $this;
    }

    /**
     * Gets as listStorage.
     *
     * @return \Pohoda\List\ListStorage
     */
    public function getListStorage()
    {
        return $this->listStorage;
    }

    /**
     * Sets a new listStorage.
     *
     * @return self
     */
    public function setListStorage(?\Pohoda\List\ListStorage $listStorage = null)
    {
        $this->listStorage = $listStorage;

        return $this;
    }

    /**
     * Gets as listSellingPrice.
     *
     * @return \Pohoda\List\ListSellingPrice
     */
    public function getListSellingPrice()
    {
        return $this->listSellingPrice;
    }

    /**
     * Sets a new listSellingPrice.
     *
     * @return self
     */
    public function setListSellingPrice(?\Pohoda\List\ListSellingPrice $listSellingPrice = null)
    {
        $this->listSellingPrice = $listSellingPrice;

        return $this;
    }

    /**
     * Gets as listNumericSeries.
     *
     * @return \Pohoda\List\ListNumericSeries
     */
    public function getListNumericSeries()
    {
        return $this->listNumericSeries;
    }

    /**
     * Sets a new listNumericSeries.
     *
     * @return self
     */
    public function setListNumericSeries(?\Pohoda\List\ListNumericSeries $listNumericSeries = null)
    {
        $this->listNumericSeries = $listNumericSeries;

        return $this;
    }

    /**
     * Gets as createAccountingDoubleEntryResponse.
     *
     * @return \Pohoda\List\CreateAccountingDoubleEntryResponse
     */
    public function getCreateAccountingDoubleEntryResponse()
    {
        return $this->createAccountingDoubleEntryResponse;
    }

    /**
     * Sets a new createAccountingDoubleEntryResponse.
     *
     * @return self
     */
    public function setCreateAccountingDoubleEntryResponse(?\Pohoda\List\CreateAccountingDoubleEntryResponse $createAccountingDoubleEntryResponse = null)
    {
        $this->createAccountingDoubleEntryResponse = $createAccountingDoubleEntryResponse;

        return $this;
    }

    /**
     * Gets as listAccountingUnit.
     *
     * @return \Pohoda\Accountingunit\ListAccountingUnit
     */
    public function getListAccountingUnit()
    {
        return $this->listAccountingUnit;
    }

    /**
     * Sets a new listAccountingUnit.
     *
     * @return self
     */
    public function setListAccountingUnit(?\Pohoda\Accountingunit\ListAccountingUnit $listAccountingUnit = null)
    {
        $this->listAccountingUnit = $listAccountingUnit;

        return $this;
    }

    /**
     * Gets as listStock.
     *
     * @return \Pohoda\ListStock\ListStock
     */
    public function getListStock()
    {
        return $this->listStock;
    }

    /**
     * Sets a new listStock.
     *
     * @return self
     */
    public function setListStock(?\Pohoda\ListStock\ListStock $listStock = null)
    {
        $this->listStock = $listStock;

        return $this;
    }

    /**
     * Gets as listInvoice.
     *
     * @return \Pohoda\List\ListInvoice
     */
    public function getListInvoice()
    {
        return $this->listInvoice;
    }

    /**
     * Sets a new listInvoice.
     *
     * @return self
     */
    public function setListInvoice(?\Pohoda\List\ListInvoice $listInvoice = null)
    {
        $this->listInvoice = $listInvoice;

        return $this;
    }

    /**
     * Gets as listAddressBook.
     *
     * @return \Pohoda\ListAddBook\ListAddressBook
     */
    public function getListAddressBook()
    {
        return $this->listAddressBook;
    }

    /**
     * Sets a new listAddressBook.
     *
     * @return self
     */
    public function setListAddressBook(?\Pohoda\ListAddBook\ListAddressBook $listAddressBook = null)
    {
        $this->listAddressBook = $listAddressBook;

        return $this;
    }

    /**
     * Gets as listOrder.
     *
     * @return \Pohoda\List\ListOrder
     */
    public function getListOrder()
    {
        return $this->listOrder;
    }

    /**
     * Sets a new listOrder.
     *
     * @return self
     */
    public function setListOrder(?\Pohoda\List\ListOrder $listOrder = null)
    {
        $this->listOrder = $listOrder;

        return $this;
    }

    /**
     * Gets as listEnquiry.
     *
     * @return \Pohoda\List\ListEnquiry
     */
    public function getListEnquiry()
    {
        return $this->listEnquiry;
    }

    /**
     * Sets a new listEnquiry.
     *
     * @return self
     */
    public function setListEnquiry(?\Pohoda\List\ListEnquiry $listEnquiry = null)
    {
        $this->listEnquiry = $listEnquiry;

        return $this;
    }

    /**
     * Gets as listOffer.
     *
     * @return \Pohoda\List\ListOffer
     */
    public function getListOffer()
    {
        return $this->listOffer;
    }

    /**
     * Sets a new listOffer.
     *
     * @return self
     */
    public function setListOffer(?\Pohoda\List\ListOffer $listOffer = null)
    {
        $this->listOffer = $listOffer;

        return $this;
    }

    /**
     * Gets as listParameter.
     *
     * @return \Pohoda\List\ListParameter
     */
    public function getListParameter()
    {
        return $this->listParameter;
    }

    /**
     * Sets a new listParameter.
     *
     * @return self
     */
    public function setListParameter(?\Pohoda\List\ListParameter $listParameter = null)
    {
        $this->listParameter = $listParameter;

        return $this;
    }

    /**
     * Gets as listUserCodePack.
     *
     * @return \Pohoda\List\ListUserCodePack
     */
    public function getListUserCodePack()
    {
        return $this->listUserCodePack;
    }

    /**
     * Sets a new listUserCodePack.
     *
     * @return self
     */
    public function setListUserCodePack(?\Pohoda\List\ListUserCodePack $listUserCodePack = null)
    {
        $this->listUserCodePack = $listUserCodePack;

        return $this;
    }

    /**
     * Gets as listVydejka.
     *
     * @return \Pohoda\List\ListVydejka
     */
    public function getListVydejka()
    {
        return $this->listVydejka;
    }

    /**
     * Sets a new listVydejka.
     *
     * @return self
     */
    public function setListVydejka(?\Pohoda\List\ListVydejka $listVydejka = null)
    {
        $this->listVydejka = $listVydejka;

        return $this;
    }

    /**
     * Gets as listPrijemka.
     *
     * @return \Pohoda\List\ListPrijemka
     */
    public function getListPrijemka()
    {
        return $this->listPrijemka;
    }

    /**
     * Sets a new listPrijemka.
     *
     * @return self
     */
    public function setListPrijemka(?\Pohoda\List\ListPrijemka $listPrijemka = null)
    {
        $this->listPrijemka = $listPrijemka;

        return $this;
    }

    /**
     * Gets as listBalance.
     *
     * @return \Pohoda\List\ListBalance
     */
    public function getListBalance()
    {
        return $this->listBalance;
    }

    /**
     * Sets a new listBalance.
     *
     * @return self
     */
    public function setListBalance(?\Pohoda\List\ListBalance $listBalance = null)
    {
        $this->listBalance = $listBalance;

        return $this;
    }

    /**
     * Gets as listCategory.
     *
     * @return \Pohoda\List\ListCategory
     */
    public function getListCategory()
    {
        return $this->listCategory;
    }

    /**
     * Sets a new listCategory.
     *
     * @return self
     */
    public function setListCategory(?\Pohoda\List\ListCategory $listCategory = null)
    {
        $this->listCategory = $listCategory;

        return $this;
    }

    /**
     * Gets as listIntParam.
     *
     * @return \Pohoda\List\ListIntParam
     */
    public function getListIntParam()
    {
        return $this->listIntParam;
    }

    /**
     * Sets a new listIntParam.
     *
     * @return self
     */
    public function setListIntParam(?\Pohoda\List\ListIntParam $listIntParam = null)
    {
        $this->listIntParam = $listIntParam;

        return $this;
    }

    /**
     * Gets as listIntDoc.
     *
     * @return \Pohoda\List\ListIntDoc
     */
    public function getListIntDoc()
    {
        return $this->listIntDoc;
    }

    /**
     * Sets a new listIntDoc.
     *
     * @return self
     */
    public function setListIntDoc(?\Pohoda\List\ListIntDoc $listIntDoc = null)
    {
        $this->listIntDoc = $listIntDoc;

        return $this;
    }

    /**
     * Gets as listProdejka.
     *
     * @return \Pohoda\List\ListProdejka
     */
    public function getListProdejka()
    {
        return $this->listProdejka;
    }

    /**
     * Sets a new listProdejka.
     *
     * @return self
     */
    public function setListProdejka(?\Pohoda\List\ListProdejka $listProdejka = null)
    {
        $this->listProdejka = $listProdejka;

        return $this;
    }

    /**
     * Gets as listVoucher.
     *
     * @return \Pohoda\List\ListVoucher
     */
    public function getListVoucher()
    {
        return $this->listVoucher;
    }

    /**
     * Sets a new listVoucher.
     *
     * @return self
     */
    public function setListVoucher(?\Pohoda\List\ListVoucher $listVoucher = null)
    {
        $this->listVoucher = $listVoucher;

        return $this;
    }

    /**
     * Gets as listPrevodka.
     *
     * @return \Pohoda\List\ListPrevodka
     */
    public function getListPrevodka()
    {
        return $this->listPrevodka;
    }

    /**
     * Sets a new listPrevodka.
     *
     * @return self
     */
    public function setListPrevodka(?\Pohoda\List\ListPrevodka $listPrevodka = null)
    {
        $this->listPrevodka = $listPrevodka;

        return $this;
    }

    /**
     * Gets as listVyroba.
     *
     * @return \Pohoda\List\ListVyroba
     */
    public function getListVyroba()
    {
        return $this->listVyroba;
    }

    /**
     * Sets a new listVyroba.
     *
     * @return self
     */
    public function setListVyroba(?\Pohoda\List\ListVyroba $listVyroba = null)
    {
        $this->listVyroba = $listVyroba;

        return $this;
    }

    /**
     * Gets as taxDataResponse.
     *
     * @return \Pohoda\List\TaxDataResponse
     */
    public function getTaxDataResponse()
    {
        return $this->taxDataResponse;
    }

    /**
     * Sets a new taxDataResponse.
     *
     * @return self
     */
    public function setTaxDataResponse(?\Pohoda\List\TaxDataResponse $taxDataResponse = null)
    {
        $this->taxDataResponse = $taxDataResponse;

        return $this;
    }

    /**
     * Gets as listIndividualPrice.
     *
     * @return \Pohoda\List\ListIndividualPrice
     */
    public function getListIndividualPrice()
    {
        return $this->listIndividualPrice;
    }

    /**
     * Sets a new listIndividualPrice.
     *
     * @return self
     */
    public function setListIndividualPrice(?\Pohoda\List\ListIndividualPrice $listIndividualPrice = null)
    {
        $this->listIndividualPrice = $listIndividualPrice;

        return $this;
    }

    /**
     * Gets as listBank.
     *
     * @return \Pohoda\List\ListBank
     */
    public function getListBank()
    {
        return $this->listBank;
    }

    /**
     * Sets a new listBank.
     *
     * @return self
     */
    public function setListBank(?\Pohoda\List\ListBank $listBank = null)
    {
        $this->listBank = $listBank;

        return $this;
    }

    /**
     * Gets as listAccountancy.
     *
     * @return \Pohoda\List\ListAccountancy
     */
    public function getListAccountancy()
    {
        return $this->listAccountancy;
    }

    /**
     * Sets a new listAccountancy.
     *
     * @return self
     */
    public function setListAccountancy(?\Pohoda\List\ListAccountancy $listAccountancy = null)
    {
        $this->listAccountancy = $listAccountancy;

        return $this;
    }

    /**
     * Gets as listStore.
     *
     * @return \Pohoda\List\ListStore
     */
    public function getListStore()
    {
        return $this->listStore;
    }

    /**
     * Sets a new listStore.
     *
     * @return self
     */
    public function setListStore(?\Pohoda\List\ListStore $listStore = null)
    {
        $this->listStore = $listStore;

        return $this;
    }

    /**
     * Gets as listSupplier.
     *
     * @return \Pohoda\List\ListSupplier
     */
    public function getListSupplier()
    {
        return $this->listSupplier;
    }

    /**
     * Sets a new listSupplier.
     *
     * @return self
     */
    public function setListSupplier(?\Pohoda\List\ListSupplier $listSupplier = null)
    {
        $this->listSupplier = $listSupplier;

        return $this;
    }

    /**
     * Gets as listGroupStocks.
     *
     * @return \Pohoda\List\ListGroupStocks
     */
    public function getListGroupStocks()
    {
        return $this->listGroupStocks;
    }

    /**
     * Sets a new listGroupStocks.
     *
     * @return self
     */
    public function setListGroupStocks(?\Pohoda\List\ListGroupStocks $listGroupStocks = null)
    {
        $this->listGroupStocks = $listGroupStocks;

        return $this;
    }

    /**
     * Gets as listActionPrice.
     *
     * @return \Pohoda\List\ListActionPrice
     */
    public function getListActionPrice()
    {
        return $this->listActionPrice;
    }

    /**
     * Sets a new listActionPrice.
     *
     * @return self
     */
    public function setListActionPrice(?\Pohoda\List\ListActionPrice $listActionPrice = null)
    {
        $this->listActionPrice = $listActionPrice;

        return $this;
    }

    /**
     * Gets as listInventoryLists.
     *
     * @return \Pohoda\List\ListInventoryLists
     */
    public function getListInventoryLists()
    {
        return $this->listInventoryLists;
    }

    /**
     * Sets a new listInventoryLists.
     *
     * @return self
     */
    public function setListInventoryLists(?\Pohoda\List\ListInventoryLists $listInventoryLists = null)
    {
        $this->listInventoryLists = $listInventoryLists;

        return $this;
    }

    /**
     * Gets as listPayment.
     *
     * @return \Pohoda\List\ListPayment
     */
    public function getListPayment()
    {
        return $this->listPayment;
    }

    /**
     * Sets a new listPayment.
     *
     * @return self
     */
    public function setListPayment(?\Pohoda\List\ListPayment $listPayment = null)
    {
        $this->listPayment = $listPayment;

        return $this;
    }

    /**
     * Gets as listNumericalSeries.
     *
     * @return \Pohoda\List\ListNumericalSeries
     */
    public function getListNumericalSeries()
    {
        return $this->listNumericalSeries;
    }

    /**
     * Sets a new listNumericalSeries.
     *
     * @return self
     */
    public function setListNumericalSeries(?\Pohoda\List\ListNumericalSeries $listNumericalSeries = null)
    {
        $this->listNumericalSeries = $listNumericalSeries;

        return $this;
    }

    /**
     * Gets as listGDPR.
     *
     * @return \Pohoda\List\ListGDPR
     */
    public function getListGDPR()
    {
        return $this->listGDPR;
    }

    /**
     * Sets a new listGDPR.
     *
     * @return self
     */
    public function setListGDPR(?\Pohoda\List\ListGDPR $listGDPR = null)
    {
        $this->listGDPR = $listGDPR;

        return $this;
    }

    /**
     * Gets as listEstablishment.
     *
     * @return \Pohoda\List\ListEstablishment
     */
    public function getListEstablishment()
    {
        return $this->listEstablishment;
    }

    /**
     * Sets a new listEstablishment.
     *
     * @return self
     */
    public function setListEstablishment(?\Pohoda\List\ListEstablishment $listEstablishment = null)
    {
        $this->listEstablishment = $listEstablishment;

        return $this;
    }

    /**
     * Gets as listAccountingFormOfPayment.
     *
     * @return \Pohoda\List\ListAccountingFormOfPayment
     */
    public function getListAccountingFormOfPayment()
    {
        return $this->listAccountingFormOfPayment;
    }

    /**
     * Sets a new listAccountingFormOfPayment.
     *
     * @return self
     */
    public function setListAccountingFormOfPayment(?\Pohoda\List\ListAccountingFormOfPayment $listAccountingFormOfPayment = null)
    {
        $this->listAccountingFormOfPayment = $listAccountingFormOfPayment;

        return $this;
    }

    /**
     * Gets as listClassificationVAT.
     *
     * @return \Pohoda\List\ListClassificationVAT
     */
    public function getListClassificationVAT()
    {
        return $this->listClassificationVAT;
    }

    /**
     * Sets a new listClassificationVAT.
     *
     * @return self
     */
    public function setListClassificationVAT(?\Pohoda\List\ListClassificationVAT $listClassificationVAT = null)
    {
        $this->listClassificationVAT = $listClassificationVAT;

        return $this;
    }

    /**
     * Gets as listGlobalSettings.
     *
     * @return \Pohoda\List\ListGlobalSettings
     */
    public function getListGlobalSettings()
    {
        return $this->listGlobalSettings;
    }

    /**
     * Sets a new listGlobalSettings.
     *
     * @return self
     */
    public function setListGlobalSettings(?\Pohoda\List\ListGlobalSettings $listGlobalSettings = null)
    {
        $this->listGlobalSettings = $listGlobalSettings;

        return $this;
    }

    /**
     * Gets as listRegistrationNumber.
     *
     * @return \Pohoda\List\ListRegistrationNumber
     */
    public function getListRegistrationNumber()
    {
        return $this->listRegistrationNumber;
    }

    /**
     * Sets a new listRegistrationNumber.
     *
     * @return self
     */
    public function setListRegistrationNumber(?\Pohoda\List\ListRegistrationNumber $listRegistrationNumber = null)
    {
        $this->listRegistrationNumber = $listRegistrationNumber;

        return $this;
    }

    /**
     * Gets as listProductRequirement.
     *
     * @return \Pohoda\List\ListProductRequirement
     */
    public function getListProductRequirement()
    {
        return $this->listProductRequirement;
    }

    /**
     * Sets a new listProductRequirement.
     *
     * @return self
     */
    public function setListProductRequirement(?\Pohoda\List\ListProductRequirement $listProductRequirement = null)
    {
        $this->listProductRequirement = $listProductRequirement;

        return $this;
    }

    /**
     * Gets as listMovement.
     *
     * @return \Pohoda\List\ListMovement
     */
    public function getListMovement()
    {
        return $this->listMovement;
    }

    /**
     * Sets a new listMovement.
     *
     * @return self
     */
    public function setListMovement(?\Pohoda\List\ListMovement $listMovement = null)
    {
        $this->listMovement = $listMovement;

        return $this;
    }

    /**
     * Gets as listRecyclingContrib.
     *
     * @return \Pohoda\List\ListRecyclingContrib
     */
    public function getListRecyclingContrib()
    {
        return $this->listRecyclingContrib;
    }

    /**
     * Sets a new listRecyclingContrib.
     *
     * @return self
     */
    public function setListRecyclingContrib(?\Pohoda\List\ListRecyclingContrib $listRecyclingContrib = null)
    {
        $this->listRecyclingContrib = $listRecyclingContrib;

        return $this;
    }

    /**
     * Gets as listService.
     *
     * @return \Pohoda\List\ListService
     */
    public function getListService()
    {
        return $this->listService;
    }

    /**
     * Sets a new listService.
     *
     * @return self
     */
    public function setListService(?\Pohoda\List\ListService $listService = null)
    {
        $this->listService = $listService;

        return $this;
    }

    /**
     * Gets as listRulesPairing.
     *
     * @return \Pohoda\List\ListRulesPairing
     */
    public function getListRulesPairing()
    {
        return $this->listRulesPairing;
    }

    /**
     * Sets a new listRulesPairing.
     *
     * @return self
     */
    public function setListRulesPairing(?\Pohoda\List\ListRulesPairing $listRulesPairing = null)
    {
        $this->listRulesPairing = $listRulesPairing;

        return $this;
    }
}
