<?php

namespace Pohoda\Response;

/**
 * Class representing ResponsePackItemType
 *
 *
 * XSD Type: responsePackItemType
 */
class ResponsePackItemType
{
    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $state
     */
    private $state = null;

    /**
     * @var string $note
     */
    private $note = null;

    /**
     * @var \Pohoda\AddressBook\AddressbookResponse $addressbookResponse
     */
    private $addressbookResponse = null;

    /**
     * @var \Pohoda\Invoice\InvoiceResponse $invoiceResponse
     */
    private $invoiceResponse = null;

    /**
     * @var \Pohoda\NumericalSeries\NumericalSeriesResponse $numericalSeriesResponse
     */
    private $numericalSeriesResponse = null;

    /**
     * @var \Pohoda\Voucher\VoucherResponse $voucherResponse
     */
    private $voucherResponse = null;

    /**
     * @var \Pohoda\IntDoc\IntDocResponse $intDocResponse
     */
    private $intDocResponse = null;

    /**
     * @var \Pohoda\Vydejka\VydejkaResponse $vydejkaResponse
     */
    private $vydejkaResponse = null;

    /**
     * @var \Pohoda\Prijemka\PrijemkaResponse $prijemkaResponse
     */
    private $prijemkaResponse = null;

    /**
     * @var \Pohoda\Prodejka\ProdejkaResponse $prodejkaResponse
     */
    private $prodejkaResponse = null;

    /**
     * @var \Pohoda\Stock\StockItemResponse $stockItemResponse
     */
    private $stockItemResponse = null;

    /**
     * @var \Pohoda\Order\OrderResponse $orderResponse
     */
    private $orderResponse = null;

    /**
     * @var \Pohoda\Enquiry\EnquiryResponse $enquiryResponse
     */
    private $enquiryResponse = null;

    /**
     * @var \Pohoda\Offer\OfferResponse $offerResponse
     */
    private $offerResponse = null;

    /**
     * @var \Pohoda\Vyroba\VyrobaResponse $vyrobaResponse
     */
    private $vyrobaResponse = null;

    /**
     * @var \Pohoda\Prevodka\PrevodkaResponse $prevodkaResponse
     */
    private $prevodkaResponse = null;

    /**
     * @var \Pohoda\Parameter\ParameterItemResponse $parameterItemResponse
     */
    private $parameterItemResponse = null;

    /**
     * @var \Pohoda\Contract\ContractResponse $contractResponse
     */
    private $contractResponse = null;

    /**
     * @var \Pohoda\Storage\StorageResponse $storageResponse
     */
    private $storageResponse = null;

    /**
     * @var \Pohoda\IntParam\IntParamResponse $intParamResponse
     */
    private $intParamResponse = null;

    /**
     * @var \Pohoda\IndividualPrice\IndividualPriceResponse $individualPriceResponse
     */
    private $individualPriceResponse = null;

    /**
     * @var \Pohoda\Store\StoreResponse $storeResponse
     */
    private $storeResponse = null;

    /**
     * @var \Pohoda\GroupStocks\GroupStocksResponse $groupStocksResponse
     */
    private $groupStocksResponse = null;

    /**
     * @var \Pohoda\Print\PrintResponse $printResponse
     */
    private $printResponse = null;

    /**
     * @var \Pohoda\Lock\LockResponse $lockResponse
     */
    private $lockResponse = null;

    /**
     * @var \Pohoda\Isdoc\IsdocResponse $isdocResponse
     */
    private $isdocResponse = null;

    /**
     * @var \Pohoda\SendEET\SendEETResponse $sendEETResponse
     */
    private $sendEETResponse = null;

    /**
     * @var \Pohoda\MKasa\MKasaResponse $mKasaResponse
     */
    private $mKasaResponse = null;

    /**
     * @var \Pohoda\InventoryLists\InventoryListsResponse $inventoryListsResponse
     */
    private $inventoryListsResponse = null;

    /**
     * @var \Pohoda\List\ListUserCodeResponse $listUserCodeResponse
     */
    private $listUserCodeResponse = null;

    /**
     * @var \Pohoda\Supplier\SupplierResponse $supplierResponse
     */
    private $supplierResponse = null;

    /**
     * @var \Pohoda\Category\CategoryResponse $categoryResponse
     */
    private $categoryResponse = null;

    /**
     * @var \Pohoda\Gdpr\GDPRResponse $gDPRResponse
     */
    private $gDPRResponse = null;

    /**
     * @var \Pohoda\AccountingSalesVouchers\AccountingSalesVouchersResponse $accountingSalesVouchersResponse
     */
    private $accountingSalesVouchersResponse = null;

    /**
     * @var \Pohoda\ProductRequirement\ProductRequirementResponse $productRequirementResponse
     */
    private $productRequirementResponse = null;

    /**
     * @var \Pohoda\Bank\BankResponse $bankResponse
     */
    private $bankResponse = null;

    /**
     * @var \Pohoda\BankAccount\BankAccountResponse $bankAccountResponse
     */
    private $bankAccountResponse = null;

    /**
     * @var \Pohoda\RulesPairing\RulesPairingResponse $rulesPairingResponse
     */
    private $rulesPairingResponse = null;

    /**
     * @var \Pohoda\LiquidationWithoutLink\LiquidationWithoutLinkResponse $liquidationWithoutLinkResponse
     */
    private $liquidationWithoutLinkResponse = null;

    /**
     * @var \Pohoda\Discount\DiscountResponse $discountResponse
     */
    private $discountResponse = null;

    /**
     * @var \Pohoda\AutomaticLiquidationResponse $automaticLiquidationResponse
     */
    private $automaticLiquidationResponse = null;

    /**
     * @var \Pohoda\Service\ServiceResponse $serviceResponse
     */
    private $serviceResponse = null;

    /**
     * @var \Pohoda\ListCentre\ListCentre $listCentre
     */
    private $listCentre = null;

    /**
     * @var \Pohoda\ListActivity\ListActivity $listActivity
     */
    private $listActivity = null;

    /**
     * @var \Pohoda\ListContract\ListContract $listContract
     */
    private $listContract = null;

    /**
     * @var \Pohoda\List\ListCash $listCash
     */
    private $listCash = null;

    /**
     * @var \Pohoda\List\ListCashRegister $listCashRegister
     */
    private $listCashRegister = null;

    /**
     * @var \Pohoda\List\ListBankAccount $listBankAccount
     */
    private $listBankAccount = null;

    /**
     * @var \Pohoda\List\ListAccountingSingleEntry $listAccountingSingleEntry
     */
    private $listAccountingSingleEntry = null;

    /**
     * @var \Pohoda\List\ListAccountingDoubleEntry $listAccountingDoubleEntry
     */
    private $listAccountingDoubleEntry = null;

    /**
     * @var \Pohoda\List\ListAccount $listAccount
     */
    private $listAccount = null;

    /**
     * @var \Pohoda\List\ListStorage $listStorage
     */
    private $listStorage = null;

    /**
     * @var \Pohoda\List\ListSellingPrice $listSellingPrice
     */
    private $listSellingPrice = null;

    /**
     * @var \Pohoda\List\ListNumericSeries $listNumericSeries
     */
    private $listNumericSeries = null;

    /**
     * @var \Pohoda\List\CreateAccountingDoubleEntryResponse $createAccountingDoubleEntryResponse
     */
    private $createAccountingDoubleEntryResponse = null;

    /**
     * @var \Pohoda\Accountingunit\ListAccountingUnit $listAccountingUnit
     */
    private $listAccountingUnit = null;

    /**
     * @var \Pohoda\ListStock\ListStock $listStock
     */
    private $listStock = null;

    /**
     * @var \Pohoda\List\ListInvoice $listInvoice
     */
    private $listInvoice = null;

    /**
     * @var \Pohoda\ListAddBook\ListAddressBook $listAddressBook
     */
    private $listAddressBook = null;

    /**
     * @var \Pohoda\List\ListOrder $listOrder
     */
    private $listOrder = null;

    /**
     * @var \Pohoda\List\ListEnquiry $listEnquiry
     */
    private $listEnquiry = null;

    /**
     * @var \Pohoda\List\ListOffer $listOffer
     */
    private $listOffer = null;

    /**
     * @var \Pohoda\List\ListParameter $listParameter
     */
    private $listParameter = null;

    /**
     * @var \Pohoda\List\ListUserCodePack $listUserCodePack
     */
    private $listUserCodePack = null;

    /**
     * @var \Pohoda\List\ListVydejka $listVydejka
     */
    private $listVydejka = null;

    /**
     * @var \Pohoda\List\ListPrijemka $listPrijemka
     */
    private $listPrijemka = null;

    /**
     * @var \Pohoda\List\ListBalance $listBalance
     */
    private $listBalance = null;

    /**
     * @var \Pohoda\List\ListCategory $listCategory
     */
    private $listCategory = null;

    /**
     * @var \Pohoda\List\ListIntParam $listIntParam
     */
    private $listIntParam = null;

    /**
     * @var \Pohoda\List\ListIntDoc $listIntDoc
     */
    private $listIntDoc = null;

    /**
     * @var \Pohoda\List\ListProdejka $listProdejka
     */
    private $listProdejka = null;

    /**
     * @var \Pohoda\List\ListVoucher $listVoucher
     */
    private $listVoucher = null;

    /**
     * @var \Pohoda\List\ListPrevodka $listPrevodka
     */
    private $listPrevodka = null;

    /**
     * @var \Pohoda\List\ListVyroba $listVyroba
     */
    private $listVyroba = null;

    /**
     * @var \Pohoda\List\TaxDataResponse $taxDataResponse
     */
    private $taxDataResponse = null;

    /**
     * @var \Pohoda\List\ListIndividualPrice $listIndividualPrice
     */
    private $listIndividualPrice = null;

    /**
     * @var \Pohoda\List\ListBank $listBank
     */
    private $listBank = null;

    /**
     * @var \Pohoda\List\ListAccountancy $listAccountancy
     */
    private $listAccountancy = null;

    /**
     * @var \Pohoda\List\ListStore $listStore
     */
    private $listStore = null;

    /**
     * @var \Pohoda\List\ListSupplier $listSupplier
     */
    private $listSupplier = null;

    /**
     * @var \Pohoda\List\ListGroupStocks $listGroupStocks
     */
    private $listGroupStocks = null;

    /**
     * @var \Pohoda\List\ListActionPrice $listActionPrice
     */
    private $listActionPrice = null;

    /**
     * @var \Pohoda\List\ListInventoryLists $listInventoryLists
     */
    private $listInventoryLists = null;

    /**
     * @var \Pohoda\List\ListPayment $listPayment
     */
    private $listPayment = null;

    /**
     * @var \Pohoda\List\ListNumericalSeries $listNumericalSeries
     */
    private $listNumericalSeries = null;

    /**
     * @var \Pohoda\List\ListGDPR $listGDPR
     */
    private $listGDPR = null;

    /**
     * @var \Pohoda\List\ListEstablishment $listEstablishment
     */
    private $listEstablishment = null;

    /**
     * @var \Pohoda\List\ListAccountingFormOfPayment $listAccountingFormOfPayment
     */
    private $listAccountingFormOfPayment = null;

    /**
     * @var \Pohoda\List\ListClassificationVAT $listClassificationVAT
     */
    private $listClassificationVAT = null;

    /**
     * @var \Pohoda\List\ListGlobalSettings $listGlobalSettings
     */
    private $listGlobalSettings = null;

    /**
     * @var \Pohoda\List\ListRegistrationNumber $listRegistrationNumber
     */
    private $listRegistrationNumber = null;

    /**
     * @var \Pohoda\List\ListProductRequirement $listProductRequirement
     */
    private $listProductRequirement = null;

    /**
     * @var \Pohoda\List\ListMovement $listMovement
     */
    private $listMovement = null;

    /**
     * @var \Pohoda\List\ListRecyclingContrib $listRecyclingContrib
     */
    private $listRecyclingContrib = null;

    /**
     * @var \Pohoda\List\ListService $listService
     */
    private $listService = null;

    /**
     * @var \Pohoda\List\ListRulesPairing $listRulesPairing
     */
    private $listRulesPairing = null;

    /**
     * Gets as version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets a new state
     *
     * @param string $state
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * Gets as note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * @param string $note
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as addressbookResponse
     *
     * @return \Pohoda\AddressBook\AddressbookResponse
     */
    public function getAddressbookResponse()
    {
        return $this->addressbookResponse;
    }

    /**
     * Sets a new addressbookResponse
     *
     * @param \Pohoda\AddressBook\AddressbookResponse $addressbookResponse
     * @return self
     */
    public function setAddressbookResponse(?\Pohoda\AddressBook\AddressbookResponse $addressbookResponse = null)
    {
        $this->addressbookResponse = $addressbookResponse;
        return $this;
    }

    /**
     * Gets as invoiceResponse
     *
     * @return \Pohoda\Invoice\InvoiceResponse
     */
    public function getInvoiceResponse()
    {
        return $this->invoiceResponse;
    }

    /**
     * Sets a new invoiceResponse
     *
     * @param \Pohoda\Invoice\InvoiceResponse $invoiceResponse
     * @return self
     */
    public function setInvoiceResponse(?\Pohoda\Invoice\InvoiceResponse $invoiceResponse = null)
    {
        $this->invoiceResponse = $invoiceResponse;
        return $this;
    }

    /**
     * Gets as numericalSeriesResponse
     *
     * @return \Pohoda\NumericalSeries\NumericalSeriesResponse
     */
    public function getNumericalSeriesResponse()
    {
        return $this->numericalSeriesResponse;
    }

    /**
     * Sets a new numericalSeriesResponse
     *
     * @param \Pohoda\NumericalSeries\NumericalSeriesResponse $numericalSeriesResponse
     * @return self
     */
    public function setNumericalSeriesResponse(?\Pohoda\NumericalSeries\NumericalSeriesResponse $numericalSeriesResponse = null)
    {
        $this->numericalSeriesResponse = $numericalSeriesResponse;
        return $this;
    }

    /**
     * Gets as voucherResponse
     *
     * @return \Pohoda\Voucher\VoucherResponse
     */
    public function getVoucherResponse()
    {
        return $this->voucherResponse;
    }

    /**
     * Sets a new voucherResponse
     *
     * @param \Pohoda\Voucher\VoucherResponse $voucherResponse
     * @return self
     */
    public function setVoucherResponse(?\Pohoda\Voucher\VoucherResponse $voucherResponse = null)
    {
        $this->voucherResponse = $voucherResponse;
        return $this;
    }

    /**
     * Gets as intDocResponse
     *
     * @return \Pohoda\IntDoc\IntDocResponse
     */
    public function getIntDocResponse()
    {
        return $this->intDocResponse;
    }

    /**
     * Sets a new intDocResponse
     *
     * @param \Pohoda\IntDoc\IntDocResponse $intDocResponse
     * @return self
     */
    public function setIntDocResponse(?\Pohoda\IntDoc\IntDocResponse $intDocResponse = null)
    {
        $this->intDocResponse = $intDocResponse;
        return $this;
    }

    /**
     * Gets as vydejkaResponse
     *
     * @return \Pohoda\Vydejka\VydejkaResponse
     */
    public function getVydejkaResponse()
    {
        return $this->vydejkaResponse;
    }

    /**
     * Sets a new vydejkaResponse
     *
     * @param \Pohoda\Vydejka\VydejkaResponse $vydejkaResponse
     * @return self
     */
    public function setVydejkaResponse(?\Pohoda\Vydejka\VydejkaResponse $vydejkaResponse = null)
    {
        $this->vydejkaResponse = $vydejkaResponse;
        return $this;
    }

    /**
     * Gets as prijemkaResponse
     *
     * @return \Pohoda\Prijemka\PrijemkaResponse
     */
    public function getPrijemkaResponse()
    {
        return $this->prijemkaResponse;
    }

    /**
     * Sets a new prijemkaResponse
     *
     * @param \Pohoda\Prijemka\PrijemkaResponse $prijemkaResponse
     * @return self
     */
    public function setPrijemkaResponse(?\Pohoda\Prijemka\PrijemkaResponse $prijemkaResponse = null)
    {
        $this->prijemkaResponse = $prijemkaResponse;
        return $this;
    }

    /**
     * Gets as prodejkaResponse
     *
     * @return \Pohoda\Prodejka\ProdejkaResponse
     */
    public function getProdejkaResponse()
    {
        return $this->prodejkaResponse;
    }

    /**
     * Sets a new prodejkaResponse
     *
     * @param \Pohoda\Prodejka\ProdejkaResponse $prodejkaResponse
     * @return self
     */
    public function setProdejkaResponse(?\Pohoda\Prodejka\ProdejkaResponse $prodejkaResponse = null)
    {
        $this->prodejkaResponse = $prodejkaResponse;
        return $this;
    }

    /**
     * Gets as stockItemResponse
     *
     * @return \Pohoda\Stock\StockItemResponse
     */
    public function getStockItemResponse()
    {
        return $this->stockItemResponse;
    }

    /**
     * Sets a new stockItemResponse
     *
     * @param \Pohoda\Stock\StockItemResponse $stockItemResponse
     * @return self
     */
    public function setStockItemResponse(?\Pohoda\Stock\StockItemResponse $stockItemResponse = null)
    {
        $this->stockItemResponse = $stockItemResponse;
        return $this;
    }

    /**
     * Gets as orderResponse
     *
     * @return \Pohoda\Order\OrderResponse
     */
    public function getOrderResponse()
    {
        return $this->orderResponse;
    }

    /**
     * Sets a new orderResponse
     *
     * @param \Pohoda\Order\OrderResponse $orderResponse
     * @return self
     */
    public function setOrderResponse(?\Pohoda\Order\OrderResponse $orderResponse = null)
    {
        $this->orderResponse = $orderResponse;
        return $this;
    }

    /**
     * Gets as enquiryResponse
     *
     * @return \Pohoda\Enquiry\EnquiryResponse
     */
    public function getEnquiryResponse()
    {
        return $this->enquiryResponse;
    }

    /**
     * Sets a new enquiryResponse
     *
     * @param \Pohoda\Enquiry\EnquiryResponse $enquiryResponse
     * @return self
     */
    public function setEnquiryResponse(?\Pohoda\Enquiry\EnquiryResponse $enquiryResponse = null)
    {
        $this->enquiryResponse = $enquiryResponse;
        return $this;
    }

    /**
     * Gets as offerResponse
     *
     * @return \Pohoda\Offer\OfferResponse
     */
    public function getOfferResponse()
    {
        return $this->offerResponse;
    }

    /**
     * Sets a new offerResponse
     *
     * @param \Pohoda\Offer\OfferResponse $offerResponse
     * @return self
     */
    public function setOfferResponse(?\Pohoda\Offer\OfferResponse $offerResponse = null)
    {
        $this->offerResponse = $offerResponse;
        return $this;
    }

    /**
     * Gets as vyrobaResponse
     *
     * @return \Pohoda\Vyroba\VyrobaResponse
     */
    public function getVyrobaResponse()
    {
        return $this->vyrobaResponse;
    }

    /**
     * Sets a new vyrobaResponse
     *
     * @param \Pohoda\Vyroba\VyrobaResponse $vyrobaResponse
     * @return self
     */
    public function setVyrobaResponse(?\Pohoda\Vyroba\VyrobaResponse $vyrobaResponse = null)
    {
        $this->vyrobaResponse = $vyrobaResponse;
        return $this;
    }

    /**
     * Gets as prevodkaResponse
     *
     * @return \Pohoda\Prevodka\PrevodkaResponse
     */
    public function getPrevodkaResponse()
    {
        return $this->prevodkaResponse;
    }

    /**
     * Sets a new prevodkaResponse
     *
     * @param \Pohoda\Prevodka\PrevodkaResponse $prevodkaResponse
     * @return self
     */
    public function setPrevodkaResponse(?\Pohoda\Prevodka\PrevodkaResponse $prevodkaResponse = null)
    {
        $this->prevodkaResponse = $prevodkaResponse;
        return $this;
    }

    /**
     * Gets as parameterItemResponse
     *
     * @return \Pohoda\Parameter\ParameterItemResponse
     */
    public function getParameterItemResponse()
    {
        return $this->parameterItemResponse;
    }

    /**
     * Sets a new parameterItemResponse
     *
     * @param \Pohoda\Parameter\ParameterItemResponse $parameterItemResponse
     * @return self
     */
    public function setParameterItemResponse(?\Pohoda\Parameter\ParameterItemResponse $parameterItemResponse = null)
    {
        $this->parameterItemResponse = $parameterItemResponse;
        return $this;
    }

    /**
     * Gets as contractResponse
     *
     * @return \Pohoda\Contract\ContractResponse
     */
    public function getContractResponse()
    {
        return $this->contractResponse;
    }

    /**
     * Sets a new contractResponse
     *
     * @param \Pohoda\Contract\ContractResponse $contractResponse
     * @return self
     */
    public function setContractResponse(?\Pohoda\Contract\ContractResponse $contractResponse = null)
    {
        $this->contractResponse = $contractResponse;
        return $this;
    }

    /**
     * Gets as storageResponse
     *
     * @return \Pohoda\Storage\StorageResponse
     */
    public function getStorageResponse()
    {
        return $this->storageResponse;
    }

    /**
     * Sets a new storageResponse
     *
     * @param \Pohoda\Storage\StorageResponse $storageResponse
     * @return self
     */
    public function setStorageResponse(?\Pohoda\Storage\StorageResponse $storageResponse = null)
    {
        $this->storageResponse = $storageResponse;
        return $this;
    }

    /**
     * Gets as intParamResponse
     *
     * @return \Pohoda\IntParam\IntParamResponse
     */
    public function getIntParamResponse()
    {
        return $this->intParamResponse;
    }

    /**
     * Sets a new intParamResponse
     *
     * @param \Pohoda\IntParam\IntParamResponse $intParamResponse
     * @return self
     */
    public function setIntParamResponse(?\Pohoda\IntParam\IntParamResponse $intParamResponse = null)
    {
        $this->intParamResponse = $intParamResponse;
        return $this;
    }

    /**
     * Gets as individualPriceResponse
     *
     * @return \Pohoda\IndividualPrice\IndividualPriceResponse
     */
    public function getIndividualPriceResponse()
    {
        return $this->individualPriceResponse;
    }

    /**
     * Sets a new individualPriceResponse
     *
     * @param \Pohoda\IndividualPrice\IndividualPriceResponse $individualPriceResponse
     * @return self
     */
    public function setIndividualPriceResponse(?\Pohoda\IndividualPrice\IndividualPriceResponse $individualPriceResponse = null)
    {
        $this->individualPriceResponse = $individualPriceResponse;
        return $this;
    }

    /**
     * Gets as storeResponse
     *
     * @return \Pohoda\Store\StoreResponse
     */
    public function getStoreResponse()
    {
        return $this->storeResponse;
    }

    /**
     * Sets a new storeResponse
     *
     * @param \Pohoda\Store\StoreResponse $storeResponse
     * @return self
     */
    public function setStoreResponse(?\Pohoda\Store\StoreResponse $storeResponse = null)
    {
        $this->storeResponse = $storeResponse;
        return $this;
    }

    /**
     * Gets as groupStocksResponse
     *
     * @return \Pohoda\GroupStocks\GroupStocksResponse
     */
    public function getGroupStocksResponse()
    {
        return $this->groupStocksResponse;
    }

    /**
     * Sets a new groupStocksResponse
     *
     * @param \Pohoda\GroupStocks\GroupStocksResponse $groupStocksResponse
     * @return self
     */
    public function setGroupStocksResponse(?\Pohoda\GroupStocks\GroupStocksResponse $groupStocksResponse = null)
    {
        $this->groupStocksResponse = $groupStocksResponse;
        return $this;
    }

    /**
     * Gets as printResponse
     *
     * @return \Pohoda\Print\PrintResponse
     */
    public function getPrintResponse()
    {
        return $this->printResponse;
    }

    /**
     * Sets a new printResponse
     *
     * @param \Pohoda\Print\PrintResponse $printResponse
     * @return self
     */
    public function setPrintResponse(?\Pohoda\Print\PrintResponse $printResponse = null)
    {
        $this->printResponse = $printResponse;
        return $this;
    }

    /**
     * Gets as lockResponse
     *
     * @return \Pohoda\Lock\LockResponse
     */
    public function getLockResponse()
    {
        return $this->lockResponse;
    }

    /**
     * Sets a new lockResponse
     *
     * @param \Pohoda\Lock\LockResponse $lockResponse
     * @return self
     */
    public function setLockResponse(?\Pohoda\Lock\LockResponse $lockResponse = null)
    {
        $this->lockResponse = $lockResponse;
        return $this;
    }

    /**
     * Gets as isdocResponse
     *
     * @return \Pohoda\Isdoc\IsdocResponse
     */
    public function getIsdocResponse()
    {
        return $this->isdocResponse;
    }

    /**
     * Sets a new isdocResponse
     *
     * @param \Pohoda\Isdoc\IsdocResponse $isdocResponse
     * @return self
     */
    public function setIsdocResponse(?\Pohoda\Isdoc\IsdocResponse $isdocResponse = null)
    {
        $this->isdocResponse = $isdocResponse;
        return $this;
    }

    /**
     * Gets as sendEETResponse
     *
     * @return \Pohoda\SendEET\SendEETResponse
     */
    public function getSendEETResponse()
    {
        return $this->sendEETResponse;
    }

    /**
     * Sets a new sendEETResponse
     *
     * @param \Pohoda\SendEET\SendEETResponse $sendEETResponse
     * @return self
     */
    public function setSendEETResponse(?\Pohoda\SendEET\SendEETResponse $sendEETResponse = null)
    {
        $this->sendEETResponse = $sendEETResponse;
        return $this;
    }

    /**
     * Gets as mKasaResponse
     *
     * @return \Pohoda\MKasa\MKasaResponse
     */
    public function getMKasaResponse()
    {
        return $this->mKasaResponse;
    }

    /**
     * Sets a new mKasaResponse
     *
     * @param \Pohoda\MKasa\MKasaResponse $mKasaResponse
     * @return self
     */
    public function setMKasaResponse(?\Pohoda\MKasa\MKasaResponse $mKasaResponse = null)
    {
        $this->mKasaResponse = $mKasaResponse;
        return $this;
    }

    /**
     * Gets as inventoryListsResponse
     *
     * @return \Pohoda\InventoryLists\InventoryListsResponse
     */
    public function getInventoryListsResponse()
    {
        return $this->inventoryListsResponse;
    }

    /**
     * Sets a new inventoryListsResponse
     *
     * @param \Pohoda\InventoryLists\InventoryListsResponse $inventoryListsResponse
     * @return self
     */
    public function setInventoryListsResponse(?\Pohoda\InventoryLists\InventoryListsResponse $inventoryListsResponse = null)
    {
        $this->inventoryListsResponse = $inventoryListsResponse;
        return $this;
    }

    /**
     * Gets as listUserCodeResponse
     *
     * @return \Pohoda\List\ListUserCodeResponse
     */
    public function getListUserCodeResponse()
    {
        return $this->listUserCodeResponse;
    }

    /**
     * Sets a new listUserCodeResponse
     *
     * @param \Pohoda\List\ListUserCodeResponse $listUserCodeResponse
     * @return self
     */
    public function setListUserCodeResponse(?\Pohoda\List\ListUserCodeResponse $listUserCodeResponse = null)
    {
        $this->listUserCodeResponse = $listUserCodeResponse;
        return $this;
    }

    /**
     * Gets as supplierResponse
     *
     * @return \Pohoda\Supplier\SupplierResponse
     */
    public function getSupplierResponse()
    {
        return $this->supplierResponse;
    }

    /**
     * Sets a new supplierResponse
     *
     * @param \Pohoda\Supplier\SupplierResponse $supplierResponse
     * @return self
     */
    public function setSupplierResponse(?\Pohoda\Supplier\SupplierResponse $supplierResponse = null)
    {
        $this->supplierResponse = $supplierResponse;
        return $this;
    }

    /**
     * Gets as categoryResponse
     *
     * @return \Pohoda\Category\CategoryResponse
     */
    public function getCategoryResponse()
    {
        return $this->categoryResponse;
    }

    /**
     * Sets a new categoryResponse
     *
     * @param \Pohoda\Category\CategoryResponse $categoryResponse
     * @return self
     */
    public function setCategoryResponse(?\Pohoda\Category\CategoryResponse $categoryResponse = null)
    {
        $this->categoryResponse = $categoryResponse;
        return $this;
    }

    /**
     * Gets as gDPRResponse
     *
     * @return \Pohoda\Gdpr\GDPRResponse
     */
    public function getGDPRResponse()
    {
        return $this->gDPRResponse;
    }

    /**
     * Sets a new gDPRResponse
     *
     * @param \Pohoda\Gdpr\GDPRResponse $gDPRResponse
     * @return self
     */
    public function setGDPRResponse(?\Pohoda\Gdpr\GDPRResponse $gDPRResponse = null)
    {
        $this->gDPRResponse = $gDPRResponse;
        return $this;
    }

    /**
     * Gets as accountingSalesVouchersResponse
     *
     * @return \Pohoda\AccountingSalesVouchers\AccountingSalesVouchersResponse
     */
    public function getAccountingSalesVouchersResponse()
    {
        return $this->accountingSalesVouchersResponse;
    }

    /**
     * Sets a new accountingSalesVouchersResponse
     *
     * @param \Pohoda\AccountingSalesVouchers\AccountingSalesVouchersResponse $accountingSalesVouchersResponse
     * @return self
     */
    public function setAccountingSalesVouchersResponse(?\Pohoda\AccountingSalesVouchers\AccountingSalesVouchersResponse $accountingSalesVouchersResponse = null)
    {
        $this->accountingSalesVouchersResponse = $accountingSalesVouchersResponse;
        return $this;
    }

    /**
     * Gets as productRequirementResponse
     *
     * @return \Pohoda\ProductRequirement\ProductRequirementResponse
     */
    public function getProductRequirementResponse()
    {
        return $this->productRequirementResponse;
    }

    /**
     * Sets a new productRequirementResponse
     *
     * @param \Pohoda\ProductRequirement\ProductRequirementResponse $productRequirementResponse
     * @return self
     */
    public function setProductRequirementResponse(?\Pohoda\ProductRequirement\ProductRequirementResponse $productRequirementResponse = null)
    {
        $this->productRequirementResponse = $productRequirementResponse;
        return $this;
    }

    /**
     * Gets as bankResponse
     *
     * @return \Pohoda\Bank\BankResponse
     */
    public function getBankResponse()
    {
        return $this->bankResponse;
    }

    /**
     * Sets a new bankResponse
     *
     * @param \Pohoda\Bank\BankResponse $bankResponse
     * @return self
     */
    public function setBankResponse(?\Pohoda\Bank\BankResponse $bankResponse = null)
    {
        $this->bankResponse = $bankResponse;
        return $this;
    }

    /**
     * Gets as bankAccountResponse
     *
     * @return \Pohoda\BankAccount\BankAccountResponse
     */
    public function getBankAccountResponse()
    {
        return $this->bankAccountResponse;
    }

    /**
     * Sets a new bankAccountResponse
     *
     * @param \Pohoda\BankAccount\BankAccountResponse $bankAccountResponse
     * @return self
     */
    public function setBankAccountResponse(?\Pohoda\BankAccount\BankAccountResponse $bankAccountResponse = null)
    {
        $this->bankAccountResponse = $bankAccountResponse;
        return $this;
    }

    /**
     * Gets as rulesPairingResponse
     *
     * @return \Pohoda\RulesPairing\RulesPairingResponse
     */
    public function getRulesPairingResponse()
    {
        return $this->rulesPairingResponse;
    }

    /**
     * Sets a new rulesPairingResponse
     *
     * @param \Pohoda\RulesPairing\RulesPairingResponse $rulesPairingResponse
     * @return self
     */
    public function setRulesPairingResponse(?\Pohoda\RulesPairing\RulesPairingResponse $rulesPairingResponse = null)
    {
        $this->rulesPairingResponse = $rulesPairingResponse;
        return $this;
    }

    /**
     * Gets as liquidationWithoutLinkResponse
     *
     * @return \Pohoda\LiquidationWithoutLink\LiquidationWithoutLinkResponse
     */
    public function getLiquidationWithoutLinkResponse()
    {
        return $this->liquidationWithoutLinkResponse;
    }

    /**
     * Sets a new liquidationWithoutLinkResponse
     *
     * @param \Pohoda\LiquidationWithoutLink\LiquidationWithoutLinkResponse $liquidationWithoutLinkResponse
     * @return self
     */
    public function setLiquidationWithoutLinkResponse(?\Pohoda\LiquidationWithoutLink\LiquidationWithoutLinkResponse $liquidationWithoutLinkResponse = null)
    {
        $this->liquidationWithoutLinkResponse = $liquidationWithoutLinkResponse;
        return $this;
    }

    /**
     * Gets as discountResponse
     *
     * @return \Pohoda\Discount\DiscountResponse
     */
    public function getDiscountResponse()
    {
        return $this->discountResponse;
    }

    /**
     * Sets a new discountResponse
     *
     * @param \Pohoda\Discount\DiscountResponse $discountResponse
     * @return self
     */
    public function setDiscountResponse(?\Pohoda\Discount\DiscountResponse $discountResponse = null)
    {
        $this->discountResponse = $discountResponse;
        return $this;
    }

    /**
     * Gets as automaticLiquidationResponse
     *
     * @return \Pohoda\AutomaticLiquidationResponse
     */
    public function getAutomaticLiquidationResponse()
    {
        return $this->automaticLiquidationResponse;
    }

    /**
     * Sets a new automaticLiquidationResponse
     *
     * @param \Pohoda\AutomaticLiquidationResponse $automaticLiquidationResponse
     * @return self
     */
    public function setAutomaticLiquidationResponse(?\Pohoda\AutomaticLiquidationResponse $automaticLiquidationResponse = null)
    {
        $this->automaticLiquidationResponse = $automaticLiquidationResponse;
        return $this;
    }

    /**
     * Gets as serviceResponse
     *
     * @return \Pohoda\Service\ServiceResponse
     */
    public function getServiceResponse()
    {
        return $this->serviceResponse;
    }

    /**
     * Sets a new serviceResponse
     *
     * @param \Pohoda\Service\ServiceResponse $serviceResponse
     * @return self
     */
    public function setServiceResponse(?\Pohoda\Service\ServiceResponse $serviceResponse = null)
    {
        $this->serviceResponse = $serviceResponse;
        return $this;
    }

    /**
     * Gets as listCentre
     *
     * @return \Pohoda\ListCentre\ListCentre
     */
    public function getListCentre()
    {
        return $this->listCentre;
    }

    /**
     * Sets a new listCentre
     *
     * @param \Pohoda\ListCentre\ListCentre $listCentre
     * @return self
     */
    public function setListCentre(?\Pohoda\ListCentre\ListCentre $listCentre = null)
    {
        $this->listCentre = $listCentre;
        return $this;
    }

    /**
     * Gets as listActivity
     *
     * @return \Pohoda\ListActivity\ListActivity
     */
    public function getListActivity()
    {
        return $this->listActivity;
    }

    /**
     * Sets a new listActivity
     *
     * @param \Pohoda\ListActivity\ListActivity $listActivity
     * @return self
     */
    public function setListActivity(?\Pohoda\ListActivity\ListActivity $listActivity = null)
    {
        $this->listActivity = $listActivity;
        return $this;
    }

    /**
     * Gets as listContract
     *
     * @return \Pohoda\ListContract\ListContract
     */
    public function getListContract()
    {
        return $this->listContract;
    }

    /**
     * Sets a new listContract
     *
     * @param \Pohoda\ListContract\ListContract $listContract
     * @return self
     */
    public function setListContract(?\Pohoda\ListContract\ListContract $listContract = null)
    {
        $this->listContract = $listContract;
        return $this;
    }

    /**
     * Gets as listCash
     *
     * @return \Pohoda\List\ListCash
     */
    public function getListCash()
    {
        return $this->listCash;
    }

    /**
     * Sets a new listCash
     *
     * @param \Pohoda\List\ListCash $listCash
     * @return self
     */
    public function setListCash(?\Pohoda\List\ListCash $listCash = null)
    {
        $this->listCash = $listCash;
        return $this;
    }

    /**
     * Gets as listCashRegister
     *
     * @return \Pohoda\List\ListCashRegister
     */
    public function getListCashRegister()
    {
        return $this->listCashRegister;
    }

    /**
     * Sets a new listCashRegister
     *
     * @param \Pohoda\List\ListCashRegister $listCashRegister
     * @return self
     */
    public function setListCashRegister(?\Pohoda\List\ListCashRegister $listCashRegister = null)
    {
        $this->listCashRegister = $listCashRegister;
        return $this;
    }

    /**
     * Gets as listBankAccount
     *
     * @return \Pohoda\List\ListBankAccount
     */
    public function getListBankAccount()
    {
        return $this->listBankAccount;
    }

    /**
     * Sets a new listBankAccount
     *
     * @param \Pohoda\List\ListBankAccount $listBankAccount
     * @return self
     */
    public function setListBankAccount(?\Pohoda\List\ListBankAccount $listBankAccount = null)
    {
        $this->listBankAccount = $listBankAccount;
        return $this;
    }

    /**
     * Gets as listAccountingSingleEntry
     *
     * @return \Pohoda\List\ListAccountingSingleEntry
     */
    public function getListAccountingSingleEntry()
    {
        return $this->listAccountingSingleEntry;
    }

    /**
     * Sets a new listAccountingSingleEntry
     *
     * @param \Pohoda\List\ListAccountingSingleEntry $listAccountingSingleEntry
     * @return self
     */
    public function setListAccountingSingleEntry(?\Pohoda\List\ListAccountingSingleEntry $listAccountingSingleEntry = null)
    {
        $this->listAccountingSingleEntry = $listAccountingSingleEntry;
        return $this;
    }

    /**
     * Gets as listAccountingDoubleEntry
     *
     * @return \Pohoda\List\ListAccountingDoubleEntry
     */
    public function getListAccountingDoubleEntry()
    {
        return $this->listAccountingDoubleEntry;
    }

    /**
     * Sets a new listAccountingDoubleEntry
     *
     * @param \Pohoda\List\ListAccountingDoubleEntry $listAccountingDoubleEntry
     * @return self
     */
    public function setListAccountingDoubleEntry(?\Pohoda\List\ListAccountingDoubleEntry $listAccountingDoubleEntry = null)
    {
        $this->listAccountingDoubleEntry = $listAccountingDoubleEntry;
        return $this;
    }

    /**
     * Gets as listAccount
     *
     * @return \Pohoda\List\ListAccount
     */
    public function getListAccount()
    {
        return $this->listAccount;
    }

    /**
     * Sets a new listAccount
     *
     * @param \Pohoda\List\ListAccount $listAccount
     * @return self
     */
    public function setListAccount(?\Pohoda\List\ListAccount $listAccount = null)
    {
        $this->listAccount = $listAccount;
        return $this;
    }

    /**
     * Gets as listStorage
     *
     * @return \Pohoda\List\ListStorage
     */
    public function getListStorage()
    {
        return $this->listStorage;
    }

    /**
     * Sets a new listStorage
     *
     * @param \Pohoda\List\ListStorage $listStorage
     * @return self
     */
    public function setListStorage(?\Pohoda\List\ListStorage $listStorage = null)
    {
        $this->listStorage = $listStorage;
        return $this;
    }

    /**
     * Gets as listSellingPrice
     *
     * @return \Pohoda\List\ListSellingPrice
     */
    public function getListSellingPrice()
    {
        return $this->listSellingPrice;
    }

    /**
     * Sets a new listSellingPrice
     *
     * @param \Pohoda\List\ListSellingPrice $listSellingPrice
     * @return self
     */
    public function setListSellingPrice(?\Pohoda\List\ListSellingPrice $listSellingPrice = null)
    {
        $this->listSellingPrice = $listSellingPrice;
        return $this;
    }

    /**
     * Gets as listNumericSeries
     *
     * @return \Pohoda\List\ListNumericSeries
     */
    public function getListNumericSeries()
    {
        return $this->listNumericSeries;
    }

    /**
     * Sets a new listNumericSeries
     *
     * @param \Pohoda\List\ListNumericSeries $listNumericSeries
     * @return self
     */
    public function setListNumericSeries(?\Pohoda\List\ListNumericSeries $listNumericSeries = null)
    {
        $this->listNumericSeries = $listNumericSeries;
        return $this;
    }

    /**
     * Gets as createAccountingDoubleEntryResponse
     *
     * @return \Pohoda\List\CreateAccountingDoubleEntryResponse
     */
    public function getCreateAccountingDoubleEntryResponse()
    {
        return $this->createAccountingDoubleEntryResponse;
    }

    /**
     * Sets a new createAccountingDoubleEntryResponse
     *
     * @param \Pohoda\List\CreateAccountingDoubleEntryResponse $createAccountingDoubleEntryResponse
     * @return self
     */
    public function setCreateAccountingDoubleEntryResponse(?\Pohoda\List\CreateAccountingDoubleEntryResponse $createAccountingDoubleEntryResponse = null)
    {
        $this->createAccountingDoubleEntryResponse = $createAccountingDoubleEntryResponse;
        return $this;
    }

    /**
     * Gets as listAccountingUnit
     *
     * @return \Pohoda\Accountingunit\ListAccountingUnit
     */
    public function getListAccountingUnit()
    {
        return $this->listAccountingUnit;
    }

    /**
     * Sets a new listAccountingUnit
     *
     * @param \Pohoda\Accountingunit\ListAccountingUnit $listAccountingUnit
     * @return self
     */
    public function setListAccountingUnit(?\Pohoda\Accountingunit\ListAccountingUnit $listAccountingUnit = null)
    {
        $this->listAccountingUnit = $listAccountingUnit;
        return $this;
    }

    /**
     * Gets as listStock
     *
     * @return \Pohoda\ListStock\ListStock
     */
    public function getListStock()
    {
        return $this->listStock;
    }

    /**
     * Sets a new listStock
     *
     * @param \Pohoda\ListStock\ListStock $listStock
     * @return self
     */
    public function setListStock(?\Pohoda\ListStock\ListStock $listStock = null)
    {
        $this->listStock = $listStock;
        return $this;
    }

    /**
     * Gets as listInvoice
     *
     * @return \Pohoda\List\ListInvoice
     */
    public function getListInvoice()
    {
        return $this->listInvoice;
    }

    /**
     * Sets a new listInvoice
     *
     * @param \Pohoda\List\ListInvoice $listInvoice
     * @return self
     */
    public function setListInvoice(?\Pohoda\List\ListInvoice $listInvoice = null)
    {
        $this->listInvoice = $listInvoice;
        return $this;
    }

    /**
     * Gets as listAddressBook
     *
     * @return \Pohoda\ListAddBook\ListAddressBook
     */
    public function getListAddressBook()
    {
        return $this->listAddressBook;
    }

    /**
     * Sets a new listAddressBook
     *
     * @param \Pohoda\ListAddBook\ListAddressBook $listAddressBook
     * @return self
     */
    public function setListAddressBook(?\Pohoda\ListAddBook\ListAddressBook $listAddressBook = null)
    {
        $this->listAddressBook = $listAddressBook;
        return $this;
    }

    /**
     * Gets as listOrder
     *
     * @return \Pohoda\List\ListOrder
     */
    public function getListOrder()
    {
        return $this->listOrder;
    }

    /**
     * Sets a new listOrder
     *
     * @param \Pohoda\List\ListOrder $listOrder
     * @return self
     */
    public function setListOrder(?\Pohoda\List\ListOrder $listOrder = null)
    {
        $this->listOrder = $listOrder;
        return $this;
    }

    /**
     * Gets as listEnquiry
     *
     * @return \Pohoda\List\ListEnquiry
     */
    public function getListEnquiry()
    {
        return $this->listEnquiry;
    }

    /**
     * Sets a new listEnquiry
     *
     * @param \Pohoda\List\ListEnquiry $listEnquiry
     * @return self
     */
    public function setListEnquiry(?\Pohoda\List\ListEnquiry $listEnquiry = null)
    {
        $this->listEnquiry = $listEnquiry;
        return $this;
    }

    /**
     * Gets as listOffer
     *
     * @return \Pohoda\List\ListOffer
     */
    public function getListOffer()
    {
        return $this->listOffer;
    }

    /**
     * Sets a new listOffer
     *
     * @param \Pohoda\List\ListOffer $listOffer
     * @return self
     */
    public function setListOffer(?\Pohoda\List\ListOffer $listOffer = null)
    {
        $this->listOffer = $listOffer;
        return $this;
    }

    /**
     * Gets as listParameter
     *
     * @return \Pohoda\List\ListParameter
     */
    public function getListParameter()
    {
        return $this->listParameter;
    }

    /**
     * Sets a new listParameter
     *
     * @param \Pohoda\List\ListParameter $listParameter
     * @return self
     */
    public function setListParameter(?\Pohoda\List\ListParameter $listParameter = null)
    {
        $this->listParameter = $listParameter;
        return $this;
    }

    /**
     * Gets as listUserCodePack
     *
     * @return \Pohoda\List\ListUserCodePack
     */
    public function getListUserCodePack()
    {
        return $this->listUserCodePack;
    }

    /**
     * Sets a new listUserCodePack
     *
     * @param \Pohoda\List\ListUserCodePack $listUserCodePack
     * @return self
     */
    public function setListUserCodePack(?\Pohoda\List\ListUserCodePack $listUserCodePack = null)
    {
        $this->listUserCodePack = $listUserCodePack;
        return $this;
    }

    /**
     * Gets as listVydejka
     *
     * @return \Pohoda\List\ListVydejka
     */
    public function getListVydejka()
    {
        return $this->listVydejka;
    }

    /**
     * Sets a new listVydejka
     *
     * @param \Pohoda\List\ListVydejka $listVydejka
     * @return self
     */
    public function setListVydejka(?\Pohoda\List\ListVydejka $listVydejka = null)
    {
        $this->listVydejka = $listVydejka;
        return $this;
    }

    /**
     * Gets as listPrijemka
     *
     * @return \Pohoda\List\ListPrijemka
     */
    public function getListPrijemka()
    {
        return $this->listPrijemka;
    }

    /**
     * Sets a new listPrijemka
     *
     * @param \Pohoda\List\ListPrijemka $listPrijemka
     * @return self
     */
    public function setListPrijemka(?\Pohoda\List\ListPrijemka $listPrijemka = null)
    {
        $this->listPrijemka = $listPrijemka;
        return $this;
    }

    /**
     * Gets as listBalance
     *
     * @return \Pohoda\List\ListBalance
     */
    public function getListBalance()
    {
        return $this->listBalance;
    }

    /**
     * Sets a new listBalance
     *
     * @param \Pohoda\List\ListBalance $listBalance
     * @return self
     */
    public function setListBalance(?\Pohoda\List\ListBalance $listBalance = null)
    {
        $this->listBalance = $listBalance;
        return $this;
    }

    /**
     * Gets as listCategory
     *
     * @return \Pohoda\List\ListCategory
     */
    public function getListCategory()
    {
        return $this->listCategory;
    }

    /**
     * Sets a new listCategory
     *
     * @param \Pohoda\List\ListCategory $listCategory
     * @return self
     */
    public function setListCategory(?\Pohoda\List\ListCategory $listCategory = null)
    {
        $this->listCategory = $listCategory;
        return $this;
    }

    /**
     * Gets as listIntParam
     *
     * @return \Pohoda\List\ListIntParam
     */
    public function getListIntParam()
    {
        return $this->listIntParam;
    }

    /**
     * Sets a new listIntParam
     *
     * @param \Pohoda\List\ListIntParam $listIntParam
     * @return self
     */
    public function setListIntParam(?\Pohoda\List\ListIntParam $listIntParam = null)
    {
        $this->listIntParam = $listIntParam;
        return $this;
    }

    /**
     * Gets as listIntDoc
     *
     * @return \Pohoda\List\ListIntDoc
     */
    public function getListIntDoc()
    {
        return $this->listIntDoc;
    }

    /**
     * Sets a new listIntDoc
     *
     * @param \Pohoda\List\ListIntDoc $listIntDoc
     * @return self
     */
    public function setListIntDoc(?\Pohoda\List\ListIntDoc $listIntDoc = null)
    {
        $this->listIntDoc = $listIntDoc;
        return $this;
    }

    /**
     * Gets as listProdejka
     *
     * @return \Pohoda\List\ListProdejka
     */
    public function getListProdejka()
    {
        return $this->listProdejka;
    }

    /**
     * Sets a new listProdejka
     *
     * @param \Pohoda\List\ListProdejka $listProdejka
     * @return self
     */
    public function setListProdejka(?\Pohoda\List\ListProdejka $listProdejka = null)
    {
        $this->listProdejka = $listProdejka;
        return $this;
    }

    /**
     * Gets as listVoucher
     *
     * @return \Pohoda\List\ListVoucher
     */
    public function getListVoucher()
    {
        return $this->listVoucher;
    }

    /**
     * Sets a new listVoucher
     *
     * @param \Pohoda\List\ListVoucher $listVoucher
     * @return self
     */
    public function setListVoucher(?\Pohoda\List\ListVoucher $listVoucher = null)
    {
        $this->listVoucher = $listVoucher;
        return $this;
    }

    /**
     * Gets as listPrevodka
     *
     * @return \Pohoda\List\ListPrevodka
     */
    public function getListPrevodka()
    {
        return $this->listPrevodka;
    }

    /**
     * Sets a new listPrevodka
     *
     * @param \Pohoda\List\ListPrevodka $listPrevodka
     * @return self
     */
    public function setListPrevodka(?\Pohoda\List\ListPrevodka $listPrevodka = null)
    {
        $this->listPrevodka = $listPrevodka;
        return $this;
    }

    /**
     * Gets as listVyroba
     *
     * @return \Pohoda\List\ListVyroba
     */
    public function getListVyroba()
    {
        return $this->listVyroba;
    }

    /**
     * Sets a new listVyroba
     *
     * @param \Pohoda\List\ListVyroba $listVyroba
     * @return self
     */
    public function setListVyroba(?\Pohoda\List\ListVyroba $listVyroba = null)
    {
        $this->listVyroba = $listVyroba;
        return $this;
    }

    /**
     * Gets as taxDataResponse
     *
     * @return \Pohoda\List\TaxDataResponse
     */
    public function getTaxDataResponse()
    {
        return $this->taxDataResponse;
    }

    /**
     * Sets a new taxDataResponse
     *
     * @param \Pohoda\List\TaxDataResponse $taxDataResponse
     * @return self
     */
    public function setTaxDataResponse(?\Pohoda\List\TaxDataResponse $taxDataResponse = null)
    {
        $this->taxDataResponse = $taxDataResponse;
        return $this;
    }

    /**
     * Gets as listIndividualPrice
     *
     * @return \Pohoda\List\ListIndividualPrice
     */
    public function getListIndividualPrice()
    {
        return $this->listIndividualPrice;
    }

    /**
     * Sets a new listIndividualPrice
     *
     * @param \Pohoda\List\ListIndividualPrice $listIndividualPrice
     * @return self
     */
    public function setListIndividualPrice(?\Pohoda\List\ListIndividualPrice $listIndividualPrice = null)
    {
        $this->listIndividualPrice = $listIndividualPrice;
        return $this;
    }

    /**
     * Gets as listBank
     *
     * @return \Pohoda\List\ListBank
     */
    public function getListBank()
    {
        return $this->listBank;
    }

    /**
     * Sets a new listBank
     *
     * @param \Pohoda\List\ListBank $listBank
     * @return self
     */
    public function setListBank(?\Pohoda\List\ListBank $listBank = null)
    {
        $this->listBank = $listBank;
        return $this;
    }

    /**
     * Gets as listAccountancy
     *
     * @return \Pohoda\List\ListAccountancy
     */
    public function getListAccountancy()
    {
        return $this->listAccountancy;
    }

    /**
     * Sets a new listAccountancy
     *
     * @param \Pohoda\List\ListAccountancy $listAccountancy
     * @return self
     */
    public function setListAccountancy(?\Pohoda\List\ListAccountancy $listAccountancy = null)
    {
        $this->listAccountancy = $listAccountancy;
        return $this;
    }

    /**
     * Gets as listStore
     *
     * @return \Pohoda\List\ListStore
     */
    public function getListStore()
    {
        return $this->listStore;
    }

    /**
     * Sets a new listStore
     *
     * @param \Pohoda\List\ListStore $listStore
     * @return self
     */
    public function setListStore(?\Pohoda\List\ListStore $listStore = null)
    {
        $this->listStore = $listStore;
        return $this;
    }

    /**
     * Gets as listSupplier
     *
     * @return \Pohoda\List\ListSupplier
     */
    public function getListSupplier()
    {
        return $this->listSupplier;
    }

    /**
     * Sets a new listSupplier
     *
     * @param \Pohoda\List\ListSupplier $listSupplier
     * @return self
     */
    public function setListSupplier(?\Pohoda\List\ListSupplier $listSupplier = null)
    {
        $this->listSupplier = $listSupplier;
        return $this;
    }

    /**
     * Gets as listGroupStocks
     *
     * @return \Pohoda\List\ListGroupStocks
     */
    public function getListGroupStocks()
    {
        return $this->listGroupStocks;
    }

    /**
     * Sets a new listGroupStocks
     *
     * @param \Pohoda\List\ListGroupStocks $listGroupStocks
     * @return self
     */
    public function setListGroupStocks(?\Pohoda\List\ListGroupStocks $listGroupStocks = null)
    {
        $this->listGroupStocks = $listGroupStocks;
        return $this;
    }

    /**
     * Gets as listActionPrice
     *
     * @return \Pohoda\List\ListActionPrice
     */
    public function getListActionPrice()
    {
        return $this->listActionPrice;
    }

    /**
     * Sets a new listActionPrice
     *
     * @param \Pohoda\List\ListActionPrice $listActionPrice
     * @return self
     */
    public function setListActionPrice(?\Pohoda\List\ListActionPrice $listActionPrice = null)
    {
        $this->listActionPrice = $listActionPrice;
        return $this;
    }

    /**
     * Gets as listInventoryLists
     *
     * @return \Pohoda\List\ListInventoryLists
     */
    public function getListInventoryLists()
    {
        return $this->listInventoryLists;
    }

    /**
     * Sets a new listInventoryLists
     *
     * @param \Pohoda\List\ListInventoryLists $listInventoryLists
     * @return self
     */
    public function setListInventoryLists(?\Pohoda\List\ListInventoryLists $listInventoryLists = null)
    {
        $this->listInventoryLists = $listInventoryLists;
        return $this;
    }

    /**
     * Gets as listPayment
     *
     * @return \Pohoda\List\ListPayment
     */
    public function getListPayment()
    {
        return $this->listPayment;
    }

    /**
     * Sets a new listPayment
     *
     * @param \Pohoda\List\ListPayment $listPayment
     * @return self
     */
    public function setListPayment(?\Pohoda\List\ListPayment $listPayment = null)
    {
        $this->listPayment = $listPayment;
        return $this;
    }

    /**
     * Gets as listNumericalSeries
     *
     * @return \Pohoda\List\ListNumericalSeries
     */
    public function getListNumericalSeries()
    {
        return $this->listNumericalSeries;
    }

    /**
     * Sets a new listNumericalSeries
     *
     * @param \Pohoda\List\ListNumericalSeries $listNumericalSeries
     * @return self
     */
    public function setListNumericalSeries(?\Pohoda\List\ListNumericalSeries $listNumericalSeries = null)
    {
        $this->listNumericalSeries = $listNumericalSeries;
        return $this;
    }

    /**
     * Gets as listGDPR
     *
     * @return \Pohoda\List\ListGDPR
     */
    public function getListGDPR()
    {
        return $this->listGDPR;
    }

    /**
     * Sets a new listGDPR
     *
     * @param \Pohoda\List\ListGDPR $listGDPR
     * @return self
     */
    public function setListGDPR(?\Pohoda\List\ListGDPR $listGDPR = null)
    {
        $this->listGDPR = $listGDPR;
        return $this;
    }

    /**
     * Gets as listEstablishment
     *
     * @return \Pohoda\List\ListEstablishment
     */
    public function getListEstablishment()
    {
        return $this->listEstablishment;
    }

    /**
     * Sets a new listEstablishment
     *
     * @param \Pohoda\List\ListEstablishment $listEstablishment
     * @return self
     */
    public function setListEstablishment(?\Pohoda\List\ListEstablishment $listEstablishment = null)
    {
        $this->listEstablishment = $listEstablishment;
        return $this;
    }

    /**
     * Gets as listAccountingFormOfPayment
     *
     * @return \Pohoda\List\ListAccountingFormOfPayment
     */
    public function getListAccountingFormOfPayment()
    {
        return $this->listAccountingFormOfPayment;
    }

    /**
     * Sets a new listAccountingFormOfPayment
     *
     * @param \Pohoda\List\ListAccountingFormOfPayment $listAccountingFormOfPayment
     * @return self
     */
    public function setListAccountingFormOfPayment(?\Pohoda\List\ListAccountingFormOfPayment $listAccountingFormOfPayment = null)
    {
        $this->listAccountingFormOfPayment = $listAccountingFormOfPayment;
        return $this;
    }

    /**
     * Gets as listClassificationVAT
     *
     * @return \Pohoda\List\ListClassificationVAT
     */
    public function getListClassificationVAT()
    {
        return $this->listClassificationVAT;
    }

    /**
     * Sets a new listClassificationVAT
     *
     * @param \Pohoda\List\ListClassificationVAT $listClassificationVAT
     * @return self
     */
    public function setListClassificationVAT(?\Pohoda\List\ListClassificationVAT $listClassificationVAT = null)
    {
        $this->listClassificationVAT = $listClassificationVAT;
        return $this;
    }

    /**
     * Gets as listGlobalSettings
     *
     * @return \Pohoda\List\ListGlobalSettings
     */
    public function getListGlobalSettings()
    {
        return $this->listGlobalSettings;
    }

    /**
     * Sets a new listGlobalSettings
     *
     * @param \Pohoda\List\ListGlobalSettings $listGlobalSettings
     * @return self
     */
    public function setListGlobalSettings(?\Pohoda\List\ListGlobalSettings $listGlobalSettings = null)
    {
        $this->listGlobalSettings = $listGlobalSettings;
        return $this;
    }

    /**
     * Gets as listRegistrationNumber
     *
     * @return \Pohoda\List\ListRegistrationNumber
     */
    public function getListRegistrationNumber()
    {
        return $this->listRegistrationNumber;
    }

    /**
     * Sets a new listRegistrationNumber
     *
     * @param \Pohoda\List\ListRegistrationNumber $listRegistrationNumber
     * @return self
     */
    public function setListRegistrationNumber(?\Pohoda\List\ListRegistrationNumber $listRegistrationNumber = null)
    {
        $this->listRegistrationNumber = $listRegistrationNumber;
        return $this;
    }

    /**
     * Gets as listProductRequirement
     *
     * @return \Pohoda\List\ListProductRequirement
     */
    public function getListProductRequirement()
    {
        return $this->listProductRequirement;
    }

    /**
     * Sets a new listProductRequirement
     *
     * @param \Pohoda\List\ListProductRequirement $listProductRequirement
     * @return self
     */
    public function setListProductRequirement(?\Pohoda\List\ListProductRequirement $listProductRequirement = null)
    {
        $this->listProductRequirement = $listProductRequirement;
        return $this;
    }

    /**
     * Gets as listMovement
     *
     * @return \Pohoda\List\ListMovement
     */
    public function getListMovement()
    {
        return $this->listMovement;
    }

    /**
     * Sets a new listMovement
     *
     * @param \Pohoda\List\ListMovement $listMovement
     * @return self
     */
    public function setListMovement(?\Pohoda\List\ListMovement $listMovement = null)
    {
        $this->listMovement = $listMovement;
        return $this;
    }

    /**
     * Gets as listRecyclingContrib
     *
     * @return \Pohoda\List\ListRecyclingContrib
     */
    public function getListRecyclingContrib()
    {
        return $this->listRecyclingContrib;
    }

    /**
     * Sets a new listRecyclingContrib
     *
     * @param \Pohoda\List\ListRecyclingContrib $listRecyclingContrib
     * @return self
     */
    public function setListRecyclingContrib(?\Pohoda\List\ListRecyclingContrib $listRecyclingContrib = null)
    {
        $this->listRecyclingContrib = $listRecyclingContrib;
        return $this;
    }

    /**
     * Gets as listService
     *
     * @return \Pohoda\List\ListService
     */
    public function getListService()
    {
        return $this->listService;
    }

    /**
     * Sets a new listService
     *
     * @param \Pohoda\List\ListService $listService
     * @return self
     */
    public function setListService(?\Pohoda\List\ListService $listService = null)
    {
        $this->listService = $listService;
        return $this;
    }

    /**
     * Gets as listRulesPairing
     *
     * @return \Pohoda\List\ListRulesPairing
     */
    public function getListRulesPairing()
    {
        return $this->listRulesPairing;
    }

    /**
     * Sets a new listRulesPairing
     *
     * @param \Pohoda\List\ListRulesPairing $listRulesPairing
     * @return self
     */
    public function setListRulesPairing(?\Pohoda\List\ListRulesPairing $listRulesPairing = null)
    {
        $this->listRulesPairing = $listRulesPairing;
        return $this;
    }
}

