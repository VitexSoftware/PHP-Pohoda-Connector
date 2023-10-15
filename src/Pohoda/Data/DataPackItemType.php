<?php

namespace Pohoda\Data;

/**
 * Class representing DataPackItemType
 *
 *
 * XSD Type: dataPackItemType
 */
class DataPackItemType
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
     * @var \Pohoda\AddressBook\Addressbook $addressbook
     */
    private $addressbook = null;

    /**
     * @var \Pohoda\Enquiry\Enquiry $enquiry
     */
    private $enquiry = null;

    /**
     * @var \Pohoda\IntDoc\IntDoc $intDoc
     */
    private $intDoc = null;

    /**
     * @var \Pohoda\Invoice\Invoice $invoice
     */
    private $invoice = null;

    /**
     * @var \Pohoda\Offer\Offer $offer
     */
    private $offer = null;

    /**
     * @var \Pohoda\Order\Order $order
     */
    private $order = null;

    /**
     * @var \Pohoda\Prodejka\Prodejka $prodejka
     */
    private $prodejka = null;

    /**
     * @var \Pohoda\Prijemka\Prijemka $prijemka
     */
    private $prijemka = null;

    /**
     * @var \Pohoda\Prevodka\Prevodka $prevodka
     */
    private $prevodka = null;

    /**
     * @var \Pohoda\Stock\Stock $stock
     */
    private $stock = null;

    /**
     * @var \Pohoda\Voucher\Voucher $voucher
     */
    private $voucher = null;

    /**
     * @var \Pohoda\Vydejka\Vydejka $vydejka
     */
    private $vydejka = null;

    /**
     * @var \Pohoda\Vyroba\Vyroba $vyroba
     */
    private $vyroba = null;

    /**
     * @var \Pohoda\Contract\Contract $contract
     */
    private $contract = null;

    /**
     * @var \Pohoda\Store\Store $store
     */
    private $store = null;

    /**
     * @var \Pohoda\GroupStocks\GroupStocks $groupStocks
     */
    private $groupStocks = null;

    /**
     * @var \Pohoda\Storage\Storage $storage
     */
    private $storage = null;

    /**
     * @var \Pohoda\Category\CategoryDetail $categoryDetail
     */
    private $categoryDetail = null;

    /**
     * @var \Pohoda\Parameter\Parameter $parameter
     */
    private $parameter = null;

    /**
     * @var \Pohoda\IntParam\IntParamDetail $intParamDetail
     */
    private $intParamDetail = null;

    /**
     * @var \Pohoda\InventoryLists\InventoryLists $inventoryLists
     */
    private $inventoryLists = null;

    /**
     * @var \Pohoda\NumericalSeries\NumericalSeries $numericalSeries
     */
    private $numericalSeries = null;

    /**
     * @var \Pohoda\Gdpr\GDPR $gDPR
     */
    private $gDPR = null;

    /**
     * @var \Pohoda\ProductRequirement\ProductRequirement $productRequirement
     */
    private $productRequirement = null;

    /**
     * @var \Pohoda\Bank\Bank $bank
     */
    private $bank = null;

    /**
     * @var \Pohoda\BankAccount\BankAccount $bankAccount
     */
    private $bankAccount = null;

    /**
     * @var \Pohoda\RulesPairing\RulesPairing $rulesPairing
     */
    private $rulesPairing = null;

    /**
     * @var \Pohoda\Discount\Discount $discount
     */
    private $discount = null;

    /**
     * @var \Pohoda\Service\Service $service
     */
    private $service = null;

    /**
     * @var \Pohoda\List\ListAccountancyRequest $listAccountancyRequest
     */
    private $listAccountancyRequest = null;

    /**
     * @var \Pohoda\ListAddBook\ListAddressBookRequest $listAddressBookRequest
     */
    private $listAddressBookRequest = null;

    /**
     * @var \Pohoda\List\ListInvoiceRequest $listInvoiceRequest
     */
    private $listInvoiceRequest = null;

    /**
     * @var \Pohoda\List\ListEnquiryRequest $listEnquiryRequest
     */
    private $listEnquiryRequest = null;

    /**
     * @var \Pohoda\List\ListOfferRequest $listOfferRequest
     */
    private $listOfferRequest = null;

    /**
     * @var \Pohoda\List\ListOrderRequest $listOrderRequest
     */
    private $listOrderRequest = null;

    /**
     * @var \Pohoda\ListStock\ListStockRequest $listStockRequest
     */
    private $listStockRequest = null;

    /**
     * @var \Pohoda\List\ListParameterRequest $listParameterRequest
     */
    private $listParameterRequest = null;

    /**
     * @var \Pohoda\List\ListVydejkaRequest $listVydejkaRequest
     */
    private $listVydejkaRequest = null;

    /**
     * @var \Pohoda\List\ListPrijemkaRequest $listPrijemkaRequest
     */
    private $listPrijemkaRequest = null;

    /**
     * @var \Pohoda\List\ListBalanceRequest $listBalanceRequest
     */
    private $listBalanceRequest = null;

    /**
     * @var \Pohoda\List\ListProductRequirementRequest $listProductRequirementRequest
     */
    private $listProductRequirementRequest = null;

    /**
     * @var \Pohoda\List\ListBankRequest $listBankRequest
     */
    private $listBankRequest = null;

    /**
     * @var \Pohoda\List\CreateAccountingDoubleEntry $createAccountingDoubleEntry
     */
    private $createAccountingDoubleEntry = null;

    /**
     * @var \Pohoda\List\ListUserCode $listUserCode
     */
    private $listUserCode = null;

    /**
     * @var \Pohoda\Accountingunit\ListAccountingUnitRequest $listAccountingUnitRequest
     */
    private $listAccountingUnitRequest = null;

    /**
     * @var \Pohoda\List\ListAccountingDoubleEntryRequest $listAccountingDoubleEntryRequest
     */
    private $listAccountingDoubleEntryRequest = null;

    /**
     * @var \Pohoda\List\ListAccountingSingleEntryRequest $listAccountingSingleEntryRequest
     */
    private $listAccountingSingleEntryRequest = null;

    /**
     * @var \Pohoda\List\ListAccountRequest $listAccountRequest
     */
    private $listAccountRequest = null;

    /**
     * @var \Pohoda\ListActivity\ListActivityRequest $listActivityRequest
     */
    private $listActivityRequest = null;

    /**
     * @var \Pohoda\List\ListCashRequest $listCashRequest
     */
    private $listCashRequest = null;

    /**
     * @var \Pohoda\List\ListCashRegisterRequest $listCashRegisterRequest
     */
    private $listCashRegisterRequest = null;

    /**
     * @var \Pohoda\List\ListBankAccountRequest $listBankAccountRequest
     */
    private $listBankAccountRequest = null;

    /**
     * @var \Pohoda\ListContract\ListContractRequest $listContractRequest
     */
    private $listContractRequest = null;

    /**
     * @var \Pohoda\ListCentre\ListCentreRequest $listCentreRequest
     */
    private $listCentreRequest = null;

    /**
     * @var \Pohoda\List\ListNumericSeriesRequest $listNumericSeriesRequest
     */
    private $listNumericSeriesRequest = null;

    /**
     * @var \Pohoda\List\ListUserCodeRequest $listUserCodeRequest
     */
    private $listUserCodeRequest = null;

    /**
     * @var \Pohoda\List\ListStorageRequest $listStorageRequest
     */
    private $listStorageRequest = null;

    /**
     * @var \Pohoda\List\ListSellingPriceRequest $listSellingPriceRequest
     */
    private $listSellingPriceRequest = null;

    /**
     * @var \Pohoda\List\ListCategoryRequest $listCategoryRequest
     */
    private $listCategoryRequest = null;

    /**
     * @var \Pohoda\List\ListIntParamRequest $listIntParamRequest
     */
    private $listIntParamRequest = null;

    /**
     * @var \Pohoda\List\ListStoreRequest $listStoreRequest
     */
    private $listStoreRequest = null;

    /**
     * @var \Pohoda\List\ListGroupStocksRequest $listGroupStocksRequest
     */
    private $listGroupStocksRequest = null;

    /**
     * @var \Pohoda\List\ListActionPriceRequest $listActionPriceRequest
     */
    private $listActionPriceRequest = null;

    /**
     * @var \Pohoda\List\ListPaymentRequest $listPaymentRequest
     */
    private $listPaymentRequest = null;

    /**
     * @var \Pohoda\List\ListNumericalSeriesRequest $listNumericalSeriesRequest
     */
    private $listNumericalSeriesRequest = null;

    /**
     * @var \Pohoda\List\ListGDPRRequest $listGDPRRequest
     */
    private $listGDPRRequest = null;

    /**
     * @var \Pohoda\List\ListEstablishmentRequest $listEstablishmentRequest
     */
    private $listEstablishmentRequest = null;

    /**
     * @var \Pohoda\List\ListClassificationVATRequest $listClassificationVATRequest
     */
    private $listClassificationVATRequest = null;

    /**
     * @var \Pohoda\MKasa\MKasaRequest $mKasaRequest
     */
    private $mKasaRequest = null;

    /**
     * @var \Pohoda\Print\PrintXsd $print
     */
    private $print = null;

    /**
     * @var \Pohoda\Lock\Lock $lock
     */
    private $lock = null;

    /**
     * @var \Pohoda\Isdoc\Isdoc $isdoc
     */
    private $isdoc = null;

    /**
     * @var \Pohoda\SendEET\SendEET $sendEET
     */
    private $sendEET = null;

    /**
     * @var \Pohoda\AccountingSalesVouchers\AccountingSalesVouchers $accountingSalesVouchers
     */
    private $accountingSalesVouchers = null;

    /**
     * @var \Pohoda\List\ListGlobalSettingsRequest $listGlobalSettingsRequest
     */
    private $listGlobalSettingsRequest = null;

    /**
     * @var \Pohoda\List\ListRegistrationNumberRequest $listRegistrationNumberRequest
     */
    private $listRegistrationNumberRequest = null;

    /**
     * @var \Pohoda\List\ListMovementRequest $listMovementRequest
     */
    private $listMovementRequest = null;

    /**
     * @var \Pohoda\List\ListRecyclingContribRequest $listRecyclingContribRequest
     */
    private $listRecyclingContribRequest = null;

    /**
     * @var \Pohoda\List\ListIndividualPriceRequest $listIndividualPriceRequest
     */
    private $listIndividualPriceRequest = null;

    /**
     * @var \Pohoda\List\ListServiceRequest $listServiceRequest
     */
    private $listServiceRequest = null;

    /**
     * @var \Pohoda\List\ListRulesPairingRequest $listRulesPairingRequest
     */
    private $listRulesPairingRequest = null;

    /**
     * @var \Pohoda\LiquidationWithoutLink\LiquidationWithoutLink $liquidationWithoutLink
     */
    private $liquidationWithoutLink = null;

    /**
     * @var \Pohoda\AutomaticLiquidation $automaticLiquidation
     */
    private $automaticLiquidation = null;

    /**
     * @var \Pohoda\List\ListSupplierRequest $listSupplierRequest
     */
    private $listSupplierRequest = null;

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
     * Gets as addressbook
     *
     * @return \Pohoda\AddressBook\Addressbook
     */
    public function getAddressbook()
    {
        return $this->addressbook;
    }

    /**
     * Sets a new addressbook
     *
     * @param \Pohoda\AddressBook\Addressbook $addressbook
     * @return self
     */
    public function setAddressbook(\Pohoda\AddressBook\Addressbook $addressbook)
    {
        $this->addressbook = $addressbook;
        return $this;
    }

    /**
     * Gets as enquiry
     *
     * @return \Pohoda\Enquiry\Enquiry
     */
    public function getEnquiry()
    {
        return $this->enquiry;
    }

    /**
     * Sets a new enquiry
     *
     * @param \Pohoda\Enquiry\Enquiry $enquiry
     * @return self
     */
    public function setEnquiry(\Pohoda\Enquiry\Enquiry $enquiry)
    {
        $this->enquiry = $enquiry;
        return $this;
    }

    /**
     * Gets as intDoc
     *
     * @return \Pohoda\IntDoc\IntDoc
     */
    public function getIntDoc()
    {
        return $this->intDoc;
    }

    /**
     * Sets a new intDoc
     *
     * @param \Pohoda\IntDoc\IntDoc $intDoc
     * @return self
     */
    public function setIntDoc(\Pohoda\IntDoc\IntDoc $intDoc)
    {
        $this->intDoc = $intDoc;
        return $this;
    }

    /**
     * Gets as invoice
     *
     * @return \Pohoda\Invoice\Invoice
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * Sets a new invoice
     *
     * @param \Pohoda\Invoice\Invoice $invoice
     * @return self
     */
    public function setInvoice(\Pohoda\Invoice\Invoice $invoice)
    {
        $this->invoice = $invoice;
        return $this;
    }

    /**
     * Gets as offer
     *
     * @return \Pohoda\Offer\Offer
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * Sets a new offer
     *
     * @param \Pohoda\Offer\Offer $offer
     * @return self
     */
    public function setOffer(\Pohoda\Offer\Offer $offer)
    {
        $this->offer = $offer;
        return $this;
    }

    /**
     * Gets as order
     *
     * @return \Pohoda\Order\Order
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * @param \Pohoda\Order\Order $order
     * @return self
     */
    public function setOrder(\Pohoda\Order\Order $order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * Gets as prodejka
     *
     * @return \Pohoda\Prodejka\Prodejka
     */
    public function getProdejka()
    {
        return $this->prodejka;
    }

    /**
     * Sets a new prodejka
     *
     * @param \Pohoda\Prodejka\Prodejka $prodejka
     * @return self
     */
    public function setProdejka(\Pohoda\Prodejka\Prodejka $prodejka)
    {
        $this->prodejka = $prodejka;
        return $this;
    }

    /**
     * Gets as prijemka
     *
     * @return \Pohoda\Prijemka\Prijemka
     */
    public function getPrijemka()
    {
        return $this->prijemka;
    }

    /**
     * Sets a new prijemka
     *
     * @param \Pohoda\Prijemka\Prijemka $prijemka
     * @return self
     */
    public function setPrijemka(\Pohoda\Prijemka\Prijemka $prijemka)
    {
        $this->prijemka = $prijemka;
        return $this;
    }

    /**
     * Gets as prevodka
     *
     * @return \Pohoda\Prevodka\Prevodka
     */
    public function getPrevodka()
    {
        return $this->prevodka;
    }

    /**
     * Sets a new prevodka
     *
     * @param \Pohoda\Prevodka\Prevodka $prevodka
     * @return self
     */
    public function setPrevodka(\Pohoda\Prevodka\Prevodka $prevodka)
    {
        $this->prevodka = $prevodka;
        return $this;
    }

    /**
     * Gets as stock
     *
     * @return \Pohoda\Stock\Stock
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Sets a new stock
     *
     * @param \Pohoda\Stock\Stock $stock
     * @return self
     */
    public function setStock(\Pohoda\Stock\Stock $stock)
    {
        $this->stock = $stock;
        return $this;
    }

    /**
     * Gets as voucher
     *
     * @return \Pohoda\Voucher\Voucher
     */
    public function getVoucher()
    {
        return $this->voucher;
    }

    /**
     * Sets a new voucher
     *
     * @param \Pohoda\Voucher\Voucher $voucher
     * @return self
     */
    public function setVoucher(\Pohoda\Voucher\Voucher $voucher)
    {
        $this->voucher = $voucher;
        return $this;
    }

    /**
     * Gets as vydejka
     *
     * @return \Pohoda\Vydejka\Vydejka
     */
    public function getVydejka()
    {
        return $this->vydejka;
    }

    /**
     * Sets a new vydejka
     *
     * @param \Pohoda\Vydejka\Vydejka $vydejka
     * @return self
     */
    public function setVydejka(\Pohoda\Vydejka\Vydejka $vydejka)
    {
        $this->vydejka = $vydejka;
        return $this;
    }

    /**
     * Gets as vyroba
     *
     * @return \Pohoda\Vyroba\Vyroba
     */
    public function getVyroba()
    {
        return $this->vyroba;
    }

    /**
     * Sets a new vyroba
     *
     * @param \Pohoda\Vyroba\Vyroba $vyroba
     * @return self
     */
    public function setVyroba(\Pohoda\Vyroba\Vyroba $vyroba)
    {
        $this->vyroba = $vyroba;
        return $this;
    }

    /**
     * Gets as contract
     *
     * @return \Pohoda\Contract\Contract
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Sets a new contract
     *
     * @param \Pohoda\Contract\Contract $contract
     * @return self
     */
    public function setContract(\Pohoda\Contract\Contract $contract)
    {
        $this->contract = $contract;
        return $this;
    }

    /**
     * Gets as store
     *
     * @return \Pohoda\Store\Store
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * Sets a new store
     *
     * @param \Pohoda\Store\Store $store
     * @return self
     */
    public function setStore(\Pohoda\Store\Store $store)
    {
        $this->store = $store;
        return $this;
    }

    /**
     * Gets as groupStocks
     *
     * @return \Pohoda\GroupStocks\GroupStocks
     */
    public function getGroupStocks()
    {
        return $this->groupStocks;
    }

    /**
     * Sets a new groupStocks
     *
     * @param \Pohoda\GroupStocks\GroupStocks $groupStocks
     * @return self
     */
    public function setGroupStocks(\Pohoda\GroupStocks\GroupStocks $groupStocks)
    {
        $this->groupStocks = $groupStocks;
        return $this;
    }

    /**
     * Gets as storage
     *
     * @return \Pohoda\Storage\Storage
     */
    public function getStorage()
    {
        return $this->storage;
    }

    /**
     * Sets a new storage
     *
     * @param \Pohoda\Storage\Storage $storage
     * @return self
     */
    public function setStorage(\Pohoda\Storage\Storage $storage)
    {
        $this->storage = $storage;
        return $this;
    }

    /**
     * Gets as categoryDetail
     *
     * @return \Pohoda\Category\CategoryDetail
     */
    public function getCategoryDetail()
    {
        return $this->categoryDetail;
    }

    /**
     * Sets a new categoryDetail
     *
     * @param \Pohoda\Category\CategoryDetail $categoryDetail
     * @return self
     */
    public function setCategoryDetail(\Pohoda\Category\CategoryDetail $categoryDetail)
    {
        $this->categoryDetail = $categoryDetail;
        return $this;
    }

    /**
     * Gets as parameter
     *
     * @return \Pohoda\Parameter\Parameter
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Sets a new parameter
     *
     * @param \Pohoda\Parameter\Parameter $parameter
     * @return self
     */
    public function setParameter(\Pohoda\Parameter\Parameter $parameter)
    {
        $this->parameter = $parameter;
        return $this;
    }

    /**
     * Gets as intParamDetail
     *
     * @return \Pohoda\IntParam\IntParamDetail
     */
    public function getIntParamDetail()
    {
        return $this->intParamDetail;
    }

    /**
     * Sets a new intParamDetail
     *
     * @param \Pohoda\IntParam\IntParamDetail $intParamDetail
     * @return self
     */
    public function setIntParamDetail(\Pohoda\IntParam\IntParamDetail $intParamDetail)
    {
        $this->intParamDetail = $intParamDetail;
        return $this;
    }

    /**
     * Gets as inventoryLists
     *
     * @return \Pohoda\InventoryLists\InventoryLists
     */
    public function getInventoryLists()
    {
        return $this->inventoryLists;
    }

    /**
     * Sets a new inventoryLists
     *
     * @param \Pohoda\InventoryLists\InventoryLists $inventoryLists
     * @return self
     */
    public function setInventoryLists(\Pohoda\InventoryLists\InventoryLists $inventoryLists)
    {
        $this->inventoryLists = $inventoryLists;
        return $this;
    }

    /**
     * Gets as numericalSeries
     *
     * @return \Pohoda\NumericalSeries\NumericalSeries
     */
    public function getNumericalSeries()
    {
        return $this->numericalSeries;
    }

    /**
     * Sets a new numericalSeries
     *
     * @param \Pohoda\NumericalSeries\NumericalSeries $numericalSeries
     * @return self
     */
    public function setNumericalSeries(\Pohoda\NumericalSeries\NumericalSeries $numericalSeries)
    {
        $this->numericalSeries = $numericalSeries;
        return $this;
    }

    /**
     * Gets as gDPR
     *
     * @return \Pohoda\Gdpr\GDPR
     */
    public function getGDPR()
    {
        return $this->gDPR;
    }

    /**
     * Sets a new gDPR
     *
     * @param \Pohoda\Gdpr\GDPR $gDPR
     * @return self
     */
    public function setGDPR(\Pohoda\Gdpr\GDPR $gDPR)
    {
        $this->gDPR = $gDPR;
        return $this;
    }

    /**
     * Gets as productRequirement
     *
     * @return \Pohoda\ProductRequirement\ProductRequirement
     */
    public function getProductRequirement()
    {
        return $this->productRequirement;
    }

    /**
     * Sets a new productRequirement
     *
     * @param \Pohoda\ProductRequirement\ProductRequirement $productRequirement
     * @return self
     */
    public function setProductRequirement(\Pohoda\ProductRequirement\ProductRequirement $productRequirement)
    {
        $this->productRequirement = $productRequirement;
        return $this;
    }

    /**
     * Gets as bank
     *
     * @return \Pohoda\Bank\Bank
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * Sets a new bank
     *
     * @param \Pohoda\Bank\Bank $bank
     * @return self
     */
    public function setBank(\Pohoda\Bank\Bank $bank)
    {
        $this->bank = $bank;
        return $this;
    }

    /**
     * Gets as bankAccount
     *
     * @return \Pohoda\BankAccount\BankAccount
     */
    public function getBankAccount()
    {
        return $this->bankAccount;
    }

    /**
     * Sets a new bankAccount
     *
     * @param \Pohoda\BankAccount\BankAccount $bankAccount
     * @return self
     */
    public function setBankAccount(\Pohoda\BankAccount\BankAccount $bankAccount)
    {
        $this->bankAccount = $bankAccount;
        return $this;
    }

    /**
     * Gets as rulesPairing
     *
     * @return \Pohoda\RulesPairing\RulesPairing
     */
    public function getRulesPairing()
    {
        return $this->rulesPairing;
    }

    /**
     * Sets a new rulesPairing
     *
     * @param \Pohoda\RulesPairing\RulesPairing $rulesPairing
     * @return self
     */
    public function setRulesPairing(\Pohoda\RulesPairing\RulesPairing $rulesPairing)
    {
        $this->rulesPairing = $rulesPairing;
        return $this;
    }

    /**
     * Gets as discount
     *
     * @return \Pohoda\Discount\Discount
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Sets a new discount
     *
     * @param \Pohoda\Discount\Discount $discount
     * @return self
     */
    public function setDiscount(\Pohoda\Discount\Discount $discount)
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * Gets as service
     *
     * @return \Pohoda\Service\Service
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * @param \Pohoda\Service\Service $service
     * @return self
     */
    public function setService(\Pohoda\Service\Service $service)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * Gets as listAccountancyRequest
     *
     * @return \Pohoda\List\ListAccountancyRequest
     */
    public function getListAccountancyRequest()
    {
        return $this->listAccountancyRequest;
    }

    /**
     * Sets a new listAccountancyRequest
     *
     * @param \Pohoda\List\ListAccountancyRequest $listAccountancyRequest
     * @return self
     */
    public function setListAccountancyRequest(\Pohoda\List\ListAccountancyRequest $listAccountancyRequest)
    {
        $this->listAccountancyRequest = $listAccountancyRequest;
        return $this;
    }

    /**
     * Gets as listAddressBookRequest
     *
     * @return \Pohoda\ListAddBook\ListAddressBookRequest
     */
    public function getListAddressBookRequest()
    {
        return $this->listAddressBookRequest;
    }

    /**
     * Sets a new listAddressBookRequest
     *
     * @param \Pohoda\ListAddBook\ListAddressBookRequest $listAddressBookRequest
     * @return self
     */
    public function setListAddressBookRequest(\Pohoda\ListAddBook\ListAddressBookRequest $listAddressBookRequest)
    {
        $this->listAddressBookRequest = $listAddressBookRequest;
        return $this;
    }

    /**
     * Gets as listInvoiceRequest
     *
     * @return \Pohoda\List\ListInvoiceRequest
     */
    public function getListInvoiceRequest()
    {
        return $this->listInvoiceRequest;
    }

    /**
     * Sets a new listInvoiceRequest
     *
     * @param \Pohoda\List\ListInvoiceRequest $listInvoiceRequest
     * @return self
     */
    public function setListInvoiceRequest(\Pohoda\List\ListInvoiceRequest $listInvoiceRequest)
    {
        $this->listInvoiceRequest = $listInvoiceRequest;
        return $this;
    }

    /**
     * Gets as listEnquiryRequest
     *
     * @return \Pohoda\List\ListEnquiryRequest
     */
    public function getListEnquiryRequest()
    {
        return $this->listEnquiryRequest;
    }

    /**
     * Sets a new listEnquiryRequest
     *
     * @param \Pohoda\List\ListEnquiryRequest $listEnquiryRequest
     * @return self
     */
    public function setListEnquiryRequest(\Pohoda\List\ListEnquiryRequest $listEnquiryRequest)
    {
        $this->listEnquiryRequest = $listEnquiryRequest;
        return $this;
    }

    /**
     * Gets as listOfferRequest
     *
     * @return \Pohoda\List\ListOfferRequest
     */
    public function getListOfferRequest()
    {
        return $this->listOfferRequest;
    }

    /**
     * Sets a new listOfferRequest
     *
     * @param \Pohoda\List\ListOfferRequest $listOfferRequest
     * @return self
     */
    public function setListOfferRequest(\Pohoda\List\ListOfferRequest $listOfferRequest)
    {
        $this->listOfferRequest = $listOfferRequest;
        return $this;
    }

    /**
     * Gets as listOrderRequest
     *
     * @return \Pohoda\List\ListOrderRequest
     */
    public function getListOrderRequest()
    {
        return $this->listOrderRequest;
    }

    /**
     * Sets a new listOrderRequest
     *
     * @param \Pohoda\List\ListOrderRequest $listOrderRequest
     * @return self
     */
    public function setListOrderRequest(\Pohoda\List\ListOrderRequest $listOrderRequest)
    {
        $this->listOrderRequest = $listOrderRequest;
        return $this;
    }

    /**
     * Gets as listStockRequest
     *
     * @return \Pohoda\ListStock\ListStockRequest
     */
    public function getListStockRequest()
    {
        return $this->listStockRequest;
    }

    /**
     * Sets a new listStockRequest
     *
     * @param \Pohoda\ListStock\ListStockRequest $listStockRequest
     * @return self
     */
    public function setListStockRequest(\Pohoda\ListStock\ListStockRequest $listStockRequest)
    {
        $this->listStockRequest = $listStockRequest;
        return $this;
    }

    /**
     * Gets as listParameterRequest
     *
     * @return \Pohoda\List\ListParameterRequest
     */
    public function getListParameterRequest()
    {
        return $this->listParameterRequest;
    }

    /**
     * Sets a new listParameterRequest
     *
     * @param \Pohoda\List\ListParameterRequest $listParameterRequest
     * @return self
     */
    public function setListParameterRequest(\Pohoda\List\ListParameterRequest $listParameterRequest)
    {
        $this->listParameterRequest = $listParameterRequest;
        return $this;
    }

    /**
     * Gets as listVydejkaRequest
     *
     * @return \Pohoda\List\ListVydejkaRequest
     */
    public function getListVydejkaRequest()
    {
        return $this->listVydejkaRequest;
    }

    /**
     * Sets a new listVydejkaRequest
     *
     * @param \Pohoda\List\ListVydejkaRequest $listVydejkaRequest
     * @return self
     */
    public function setListVydejkaRequest(\Pohoda\List\ListVydejkaRequest $listVydejkaRequest)
    {
        $this->listVydejkaRequest = $listVydejkaRequest;
        return $this;
    }

    /**
     * Gets as listPrijemkaRequest
     *
     * @return \Pohoda\List\ListPrijemkaRequest
     */
    public function getListPrijemkaRequest()
    {
        return $this->listPrijemkaRequest;
    }

    /**
     * Sets a new listPrijemkaRequest
     *
     * @param \Pohoda\List\ListPrijemkaRequest $listPrijemkaRequest
     * @return self
     */
    public function setListPrijemkaRequest(\Pohoda\List\ListPrijemkaRequest $listPrijemkaRequest)
    {
        $this->listPrijemkaRequest = $listPrijemkaRequest;
        return $this;
    }

    /**
     * Gets as listBalanceRequest
     *
     * @return \Pohoda\List\ListBalanceRequest
     */
    public function getListBalanceRequest()
    {
        return $this->listBalanceRequest;
    }

    /**
     * Sets a new listBalanceRequest
     *
     * @param \Pohoda\List\ListBalanceRequest $listBalanceRequest
     * @return self
     */
    public function setListBalanceRequest(\Pohoda\List\ListBalanceRequest $listBalanceRequest)
    {
        $this->listBalanceRequest = $listBalanceRequest;
        return $this;
    }

    /**
     * Gets as listProductRequirementRequest
     *
     * @return \Pohoda\List\ListProductRequirementRequest
     */
    public function getListProductRequirementRequest()
    {
        return $this->listProductRequirementRequest;
    }

    /**
     * Sets a new listProductRequirementRequest
     *
     * @param \Pohoda\List\ListProductRequirementRequest $listProductRequirementRequest
     * @return self
     */
    public function setListProductRequirementRequest(\Pohoda\List\ListProductRequirementRequest $listProductRequirementRequest)
    {
        $this->listProductRequirementRequest = $listProductRequirementRequest;
        return $this;
    }

    /**
     * Gets as listBankRequest
     *
     * @return \Pohoda\List\ListBankRequest
     */
    public function getListBankRequest()
    {
        return $this->listBankRequest;
    }

    /**
     * Sets a new listBankRequest
     *
     * @param \Pohoda\List\ListBankRequest $listBankRequest
     * @return self
     */
    public function setListBankRequest(\Pohoda\List\ListBankRequest $listBankRequest)
    {
        $this->listBankRequest = $listBankRequest;
        return $this;
    }

    /**
     * Gets as createAccountingDoubleEntry
     *
     * @return \Pohoda\List\CreateAccountingDoubleEntry
     */
    public function getCreateAccountingDoubleEntry()
    {
        return $this->createAccountingDoubleEntry;
    }

    /**
     * Sets a new createAccountingDoubleEntry
     *
     * @param \Pohoda\List\CreateAccountingDoubleEntry $createAccountingDoubleEntry
     * @return self
     */
    public function setCreateAccountingDoubleEntry(\Pohoda\List\CreateAccountingDoubleEntry $createAccountingDoubleEntry)
    {
        $this->createAccountingDoubleEntry = $createAccountingDoubleEntry;
        return $this;
    }

    /**
     * Gets as listUserCode
     *
     * @return \Pohoda\List\ListUserCode
     */
    public function getListUserCode()
    {
        return $this->listUserCode;
    }

    /**
     * Sets a new listUserCode
     *
     * @param \Pohoda\List\ListUserCode $listUserCode
     * @return self
     */
    public function setListUserCode(\Pohoda\List\ListUserCode $listUserCode)
    {
        $this->listUserCode = $listUserCode;
        return $this;
    }

    /**
     * Gets as listAccountingUnitRequest
     *
     * @return \Pohoda\Accountingunit\ListAccountingUnitRequest
     */
    public function getListAccountingUnitRequest()
    {
        return $this->listAccountingUnitRequest;
    }

    /**
     * Sets a new listAccountingUnitRequest
     *
     * @param \Pohoda\Accountingunit\ListAccountingUnitRequest $listAccountingUnitRequest
     * @return self
     */
    public function setListAccountingUnitRequest(\Pohoda\Accountingunit\ListAccountingUnitRequest $listAccountingUnitRequest)
    {
        $this->listAccountingUnitRequest = $listAccountingUnitRequest;
        return $this;
    }

    /**
     * Gets as listAccountingDoubleEntryRequest
     *
     * @return \Pohoda\List\ListAccountingDoubleEntryRequest
     */
    public function getListAccountingDoubleEntryRequest()
    {
        return $this->listAccountingDoubleEntryRequest;
    }

    /**
     * Sets a new listAccountingDoubleEntryRequest
     *
     * @param \Pohoda\List\ListAccountingDoubleEntryRequest $listAccountingDoubleEntryRequest
     * @return self
     */
    public function setListAccountingDoubleEntryRequest(\Pohoda\List\ListAccountingDoubleEntryRequest $listAccountingDoubleEntryRequest)
    {
        $this->listAccountingDoubleEntryRequest = $listAccountingDoubleEntryRequest;
        return $this;
    }

    /**
     * Gets as listAccountingSingleEntryRequest
     *
     * @return \Pohoda\List\ListAccountingSingleEntryRequest
     */
    public function getListAccountingSingleEntryRequest()
    {
        return $this->listAccountingSingleEntryRequest;
    }

    /**
     * Sets a new listAccountingSingleEntryRequest
     *
     * @param \Pohoda\List\ListAccountingSingleEntryRequest $listAccountingSingleEntryRequest
     * @return self
     */
    public function setListAccountingSingleEntryRequest(\Pohoda\List\ListAccountingSingleEntryRequest $listAccountingSingleEntryRequest)
    {
        $this->listAccountingSingleEntryRequest = $listAccountingSingleEntryRequest;
        return $this;
    }

    /**
     * Gets as listAccountRequest
     *
     * @return \Pohoda\List\ListAccountRequest
     */
    public function getListAccountRequest()
    {
        return $this->listAccountRequest;
    }

    /**
     * Sets a new listAccountRequest
     *
     * @param \Pohoda\List\ListAccountRequest $listAccountRequest
     * @return self
     */
    public function setListAccountRequest(\Pohoda\List\ListAccountRequest $listAccountRequest)
    {
        $this->listAccountRequest = $listAccountRequest;
        return $this;
    }

    /**
     * Gets as listActivityRequest
     *
     * @return \Pohoda\ListActivity\ListActivityRequest
     */
    public function getListActivityRequest()
    {
        return $this->listActivityRequest;
    }

    /**
     * Sets a new listActivityRequest
     *
     * @param \Pohoda\ListActivity\ListActivityRequest $listActivityRequest
     * @return self
     */
    public function setListActivityRequest(\Pohoda\ListActivity\ListActivityRequest $listActivityRequest)
    {
        $this->listActivityRequest = $listActivityRequest;
        return $this;
    }

    /**
     * Gets as listCashRequest
     *
     * @return \Pohoda\List\ListCashRequest
     */
    public function getListCashRequest()
    {
        return $this->listCashRequest;
    }

    /**
     * Sets a new listCashRequest
     *
     * @param \Pohoda\List\ListCashRequest $listCashRequest
     * @return self
     */
    public function setListCashRequest(\Pohoda\List\ListCashRequest $listCashRequest)
    {
        $this->listCashRequest = $listCashRequest;
        return $this;
    }

    /**
     * Gets as listCashRegisterRequest
     *
     * @return \Pohoda\List\ListCashRegisterRequest
     */
    public function getListCashRegisterRequest()
    {
        return $this->listCashRegisterRequest;
    }

    /**
     * Sets a new listCashRegisterRequest
     *
     * @param \Pohoda\List\ListCashRegisterRequest $listCashRegisterRequest
     * @return self
     */
    public function setListCashRegisterRequest(\Pohoda\List\ListCashRegisterRequest $listCashRegisterRequest)
    {
        $this->listCashRegisterRequest = $listCashRegisterRequest;
        return $this;
    }

    /**
     * Gets as listBankAccountRequest
     *
     * @return \Pohoda\List\ListBankAccountRequest
     */
    public function getListBankAccountRequest()
    {
        return $this->listBankAccountRequest;
    }

    /**
     * Sets a new listBankAccountRequest
     *
     * @param \Pohoda\List\ListBankAccountRequest $listBankAccountRequest
     * @return self
     */
    public function setListBankAccountRequest(\Pohoda\List\ListBankAccountRequest $listBankAccountRequest)
    {
        $this->listBankAccountRequest = $listBankAccountRequest;
        return $this;
    }

    /**
     * Gets as listContractRequest
     *
     * @return \Pohoda\ListContract\ListContractRequest
     */
    public function getListContractRequest()
    {
        return $this->listContractRequest;
    }

    /**
     * Sets a new listContractRequest
     *
     * @param \Pohoda\ListContract\ListContractRequest $listContractRequest
     * @return self
     */
    public function setListContractRequest(\Pohoda\ListContract\ListContractRequest $listContractRequest)
    {
        $this->listContractRequest = $listContractRequest;
        return $this;
    }

    /**
     * Gets as listCentreRequest
     *
     * @return \Pohoda\ListCentre\ListCentreRequest
     */
    public function getListCentreRequest()
    {
        return $this->listCentreRequest;
    }

    /**
     * Sets a new listCentreRequest
     *
     * @param \Pohoda\ListCentre\ListCentreRequest $listCentreRequest
     * @return self
     */
    public function setListCentreRequest(\Pohoda\ListCentre\ListCentreRequest $listCentreRequest)
    {
        $this->listCentreRequest = $listCentreRequest;
        return $this;
    }

    /**
     * Gets as listNumericSeriesRequest
     *
     * @return \Pohoda\List\ListNumericSeriesRequest
     */
    public function getListNumericSeriesRequest()
    {
        return $this->listNumericSeriesRequest;
    }

    /**
     * Sets a new listNumericSeriesRequest
     *
     * @param \Pohoda\List\ListNumericSeriesRequest $listNumericSeriesRequest
     * @return self
     */
    public function setListNumericSeriesRequest(\Pohoda\List\ListNumericSeriesRequest $listNumericSeriesRequest)
    {
        $this->listNumericSeriesRequest = $listNumericSeriesRequest;
        return $this;
    }

    /**
     * Gets as listUserCodeRequest
     *
     * @return \Pohoda\List\ListUserCodeRequest
     */
    public function getListUserCodeRequest()
    {
        return $this->listUserCodeRequest;
    }

    /**
     * Sets a new listUserCodeRequest
     *
     * @param \Pohoda\List\ListUserCodeRequest $listUserCodeRequest
     * @return self
     */
    public function setListUserCodeRequest(\Pohoda\List\ListUserCodeRequest $listUserCodeRequest)
    {
        $this->listUserCodeRequest = $listUserCodeRequest;
        return $this;
    }

    /**
     * Gets as listStorageRequest
     *
     * @return \Pohoda\List\ListStorageRequest
     */
    public function getListStorageRequest()
    {
        return $this->listStorageRequest;
    }

    /**
     * Sets a new listStorageRequest
     *
     * @param \Pohoda\List\ListStorageRequest $listStorageRequest
     * @return self
     */
    public function setListStorageRequest(\Pohoda\List\ListStorageRequest $listStorageRequest)
    {
        $this->listStorageRequest = $listStorageRequest;
        return $this;
    }

    /**
     * Gets as listSellingPriceRequest
     *
     * @return \Pohoda\List\ListSellingPriceRequest
     */
    public function getListSellingPriceRequest()
    {
        return $this->listSellingPriceRequest;
    }

    /**
     * Sets a new listSellingPriceRequest
     *
     * @param \Pohoda\List\ListSellingPriceRequest $listSellingPriceRequest
     * @return self
     */
    public function setListSellingPriceRequest(\Pohoda\List\ListSellingPriceRequest $listSellingPriceRequest)
    {
        $this->listSellingPriceRequest = $listSellingPriceRequest;
        return $this;
    }

    /**
     * Gets as listCategoryRequest
     *
     * @return \Pohoda\List\ListCategoryRequest
     */
    public function getListCategoryRequest()
    {
        return $this->listCategoryRequest;
    }

    /**
     * Sets a new listCategoryRequest
     *
     * @param \Pohoda\List\ListCategoryRequest $listCategoryRequest
     * @return self
     */
    public function setListCategoryRequest(\Pohoda\List\ListCategoryRequest $listCategoryRequest)
    {
        $this->listCategoryRequest = $listCategoryRequest;
        return $this;
    }

    /**
     * Gets as listIntParamRequest
     *
     * @return \Pohoda\List\ListIntParamRequest
     */
    public function getListIntParamRequest()
    {
        return $this->listIntParamRequest;
    }

    /**
     * Sets a new listIntParamRequest
     *
     * @param \Pohoda\List\ListIntParamRequest $listIntParamRequest
     * @return self
     */
    public function setListIntParamRequest(\Pohoda\List\ListIntParamRequest $listIntParamRequest)
    {
        $this->listIntParamRequest = $listIntParamRequest;
        return $this;
    }

    /**
     * Gets as listStoreRequest
     *
     * @return \Pohoda\List\ListStoreRequest
     */
    public function getListStoreRequest()
    {
        return $this->listStoreRequest;
    }

    /**
     * Sets a new listStoreRequest
     *
     * @param \Pohoda\List\ListStoreRequest $listStoreRequest
     * @return self
     */
    public function setListStoreRequest(\Pohoda\List\ListStoreRequest $listStoreRequest)
    {
        $this->listStoreRequest = $listStoreRequest;
        return $this;
    }

    /**
     * Gets as listGroupStocksRequest
     *
     * @return \Pohoda\List\ListGroupStocksRequest
     */
    public function getListGroupStocksRequest()
    {
        return $this->listGroupStocksRequest;
    }

    /**
     * Sets a new listGroupStocksRequest
     *
     * @param \Pohoda\List\ListGroupStocksRequest $listGroupStocksRequest
     * @return self
     */
    public function setListGroupStocksRequest(\Pohoda\List\ListGroupStocksRequest $listGroupStocksRequest)
    {
        $this->listGroupStocksRequest = $listGroupStocksRequest;
        return $this;
    }

    /**
     * Gets as listActionPriceRequest
     *
     * @return \Pohoda\List\ListActionPriceRequest
     */
    public function getListActionPriceRequest()
    {
        return $this->listActionPriceRequest;
    }

    /**
     * Sets a new listActionPriceRequest
     *
     * @param \Pohoda\List\ListActionPriceRequest $listActionPriceRequest
     * @return self
     */
    public function setListActionPriceRequest(\Pohoda\List\ListActionPriceRequest $listActionPriceRequest)
    {
        $this->listActionPriceRequest = $listActionPriceRequest;
        return $this;
    }

    /**
     * Gets as listPaymentRequest
     *
     * @return \Pohoda\List\ListPaymentRequest
     */
    public function getListPaymentRequest()
    {
        return $this->listPaymentRequest;
    }

    /**
     * Sets a new listPaymentRequest
     *
     * @param \Pohoda\List\ListPaymentRequest $listPaymentRequest
     * @return self
     */
    public function setListPaymentRequest(\Pohoda\List\ListPaymentRequest $listPaymentRequest)
    {
        $this->listPaymentRequest = $listPaymentRequest;
        return $this;
    }

    /**
     * Gets as listNumericalSeriesRequest
     *
     * @return \Pohoda\List\ListNumericalSeriesRequest
     */
    public function getListNumericalSeriesRequest()
    {
        return $this->listNumericalSeriesRequest;
    }

    /**
     * Sets a new listNumericalSeriesRequest
     *
     * @param \Pohoda\List\ListNumericalSeriesRequest $listNumericalSeriesRequest
     * @return self
     */
    public function setListNumericalSeriesRequest(\Pohoda\List\ListNumericalSeriesRequest $listNumericalSeriesRequest)
    {
        $this->listNumericalSeriesRequest = $listNumericalSeriesRequest;
        return $this;
    }

    /**
     * Gets as listGDPRRequest
     *
     * @return \Pohoda\List\ListGDPRRequest
     */
    public function getListGDPRRequest()
    {
        return $this->listGDPRRequest;
    }

    /**
     * Sets a new listGDPRRequest
     *
     * @param \Pohoda\List\ListGDPRRequest $listGDPRRequest
     * @return self
     */
    public function setListGDPRRequest(\Pohoda\List\ListGDPRRequest $listGDPRRequest)
    {
        $this->listGDPRRequest = $listGDPRRequest;
        return $this;
    }

    /**
     * Gets as listEstablishmentRequest
     *
     * @return \Pohoda\List\ListEstablishmentRequest
     */
    public function getListEstablishmentRequest()
    {
        return $this->listEstablishmentRequest;
    }

    /**
     * Sets a new listEstablishmentRequest
     *
     * @param \Pohoda\List\ListEstablishmentRequest $listEstablishmentRequest
     * @return self
     */
    public function setListEstablishmentRequest(\Pohoda\List\ListEstablishmentRequest $listEstablishmentRequest)
    {
        $this->listEstablishmentRequest = $listEstablishmentRequest;
        return $this;
    }

    /**
     * Gets as listClassificationVATRequest
     *
     * @return \Pohoda\List\ListClassificationVATRequest
     */
    public function getListClassificationVATRequest()
    {
        return $this->listClassificationVATRequest;
    }

    /**
     * Sets a new listClassificationVATRequest
     *
     * @param \Pohoda\List\ListClassificationVATRequest $listClassificationVATRequest
     * @return self
     */
    public function setListClassificationVATRequest(\Pohoda\List\ListClassificationVATRequest $listClassificationVATRequest)
    {
        $this->listClassificationVATRequest = $listClassificationVATRequest;
        return $this;
    }

    /**
     * Gets as mKasaRequest
     *
     * @return \Pohoda\MKasa\MKasaRequest
     */
    public function getMKasaRequest()
    {
        return $this->mKasaRequest;
    }

    /**
     * Sets a new mKasaRequest
     *
     * @param \Pohoda\MKasa\MKasaRequest $mKasaRequest
     * @return self
     */
    public function setMKasaRequest(\Pohoda\MKasa\MKasaRequest $mKasaRequest)
    {
        $this->mKasaRequest = $mKasaRequest;
        return $this;
    }

    /**
     * Gets as print
     *
     * @return \Pohoda\Print\PrintXsd
     */
    public function getPrint()
    {
        return $this->print;
    }

    /**
     * Sets a new print
     *
     * @param \Pohoda\Print\PrintXsd $print
     * @return self
     */
    public function setPrint(\Pohoda\Print\PrintXsd $print)
    {
        $this->print = $print;
        return $this;
    }

    /**
     * Gets as lock
     *
     * @return \Pohoda\Lock\Lock
     */
    public function getLock()
    {
        return $this->lock;
    }

    /**
     * Sets a new lock
     *
     * @param \Pohoda\Lock\Lock $lock
     * @return self
     */
    public function setLock(\Pohoda\Lock\Lock $lock)
    {
        $this->lock = $lock;
        return $this;
    }

    /**
     * Gets as isdoc
     *
     * @return \Pohoda\Isdoc\Isdoc
     */
    public function getIsdoc()
    {
        return $this->isdoc;
    }

    /**
     * Sets a new isdoc
     *
     * @param \Pohoda\Isdoc\Isdoc $isdoc
     * @return self
     */
    public function setIsdoc(\Pohoda\Isdoc\Isdoc $isdoc)
    {
        $this->isdoc = $isdoc;
        return $this;
    }

    /**
     * Gets as sendEET
     *
     * @return \Pohoda\SendEET\SendEET
     */
    public function getSendEET()
    {
        return $this->sendEET;
    }

    /**
     * Sets a new sendEET
     *
     * @param \Pohoda\SendEET\SendEET $sendEET
     * @return self
     */
    public function setSendEET(\Pohoda\SendEET\SendEET $sendEET)
    {
        $this->sendEET = $sendEET;
        return $this;
    }

    /**
     * Gets as accountingSalesVouchers
     *
     * @return \Pohoda\AccountingSalesVouchers\AccountingSalesVouchers
     */
    public function getAccountingSalesVouchers()
    {
        return $this->accountingSalesVouchers;
    }

    /**
     * Sets a new accountingSalesVouchers
     *
     * @param \Pohoda\AccountingSalesVouchers\AccountingSalesVouchers $accountingSalesVouchers
     * @return self
     */
    public function setAccountingSalesVouchers(\Pohoda\AccountingSalesVouchers\AccountingSalesVouchers $accountingSalesVouchers)
    {
        $this->accountingSalesVouchers = $accountingSalesVouchers;
        return $this;
    }

    /**
     * Gets as listGlobalSettingsRequest
     *
     * @return \Pohoda\List\ListGlobalSettingsRequest
     */
    public function getListGlobalSettingsRequest()
    {
        return $this->listGlobalSettingsRequest;
    }

    /**
     * Sets a new listGlobalSettingsRequest
     *
     * @param \Pohoda\List\ListGlobalSettingsRequest $listGlobalSettingsRequest
     * @return self
     */
    public function setListGlobalSettingsRequest(\Pohoda\List\ListGlobalSettingsRequest $listGlobalSettingsRequest)
    {
        $this->listGlobalSettingsRequest = $listGlobalSettingsRequest;
        return $this;
    }

    /**
     * Gets as listRegistrationNumberRequest
     *
     * @return \Pohoda\List\ListRegistrationNumberRequest
     */
    public function getListRegistrationNumberRequest()
    {
        return $this->listRegistrationNumberRequest;
    }

    /**
     * Sets a new listRegistrationNumberRequest
     *
     * @param \Pohoda\List\ListRegistrationNumberRequest $listRegistrationNumberRequest
     * @return self
     */
    public function setListRegistrationNumberRequest(\Pohoda\List\ListRegistrationNumberRequest $listRegistrationNumberRequest)
    {
        $this->listRegistrationNumberRequest = $listRegistrationNumberRequest;
        return $this;
    }

    /**
     * Gets as listMovementRequest
     *
     * @return \Pohoda\List\ListMovementRequest
     */
    public function getListMovementRequest()
    {
        return $this->listMovementRequest;
    }

    /**
     * Sets a new listMovementRequest
     *
     * @param \Pohoda\List\ListMovementRequest $listMovementRequest
     * @return self
     */
    public function setListMovementRequest(\Pohoda\List\ListMovementRequest $listMovementRequest)
    {
        $this->listMovementRequest = $listMovementRequest;
        return $this;
    }

    /**
     * Gets as listRecyclingContribRequest
     *
     * @return \Pohoda\List\ListRecyclingContribRequest
     */
    public function getListRecyclingContribRequest()
    {
        return $this->listRecyclingContribRequest;
    }

    /**
     * Sets a new listRecyclingContribRequest
     *
     * @param \Pohoda\List\ListRecyclingContribRequest $listRecyclingContribRequest
     * @return self
     */
    public function setListRecyclingContribRequest(\Pohoda\List\ListRecyclingContribRequest $listRecyclingContribRequest)
    {
        $this->listRecyclingContribRequest = $listRecyclingContribRequest;
        return $this;
    }

    /**
     * Gets as listIndividualPriceRequest
     *
     * @return \Pohoda\List\ListIndividualPriceRequest
     */
    public function getListIndividualPriceRequest()
    {
        return $this->listIndividualPriceRequest;
    }

    /**
     * Sets a new listIndividualPriceRequest
     *
     * @param \Pohoda\List\ListIndividualPriceRequest $listIndividualPriceRequest
     * @return self
     */
    public function setListIndividualPriceRequest(\Pohoda\List\ListIndividualPriceRequest $listIndividualPriceRequest)
    {
        $this->listIndividualPriceRequest = $listIndividualPriceRequest;
        return $this;
    }

    /**
     * Gets as listServiceRequest
     *
     * @return \Pohoda\List\ListServiceRequest
     */
    public function getListServiceRequest()
    {
        return $this->listServiceRequest;
    }

    /**
     * Sets a new listServiceRequest
     *
     * @param \Pohoda\List\ListServiceRequest $listServiceRequest
     * @return self
     */
    public function setListServiceRequest(\Pohoda\List\ListServiceRequest $listServiceRequest)
    {
        $this->listServiceRequest = $listServiceRequest;
        return $this;
    }

    /**
     * Gets as listRulesPairingRequest
     *
     * @return \Pohoda\List\ListRulesPairingRequest
     */
    public function getListRulesPairingRequest()
    {
        return $this->listRulesPairingRequest;
    }

    /**
     * Sets a new listRulesPairingRequest
     *
     * @param \Pohoda\List\ListRulesPairingRequest $listRulesPairingRequest
     * @return self
     */
    public function setListRulesPairingRequest(\Pohoda\List\ListRulesPairingRequest $listRulesPairingRequest)
    {
        $this->listRulesPairingRequest = $listRulesPairingRequest;
        return $this;
    }

    /**
     * Gets as liquidationWithoutLink
     *
     * @return \Pohoda\LiquidationWithoutLink\LiquidationWithoutLink
     */
    public function getLiquidationWithoutLink()
    {
        return $this->liquidationWithoutLink;
    }

    /**
     * Sets a new liquidationWithoutLink
     *
     * @param \Pohoda\LiquidationWithoutLink\LiquidationWithoutLink $liquidationWithoutLink
     * @return self
     */
    public function setLiquidationWithoutLink(\Pohoda\LiquidationWithoutLink\LiquidationWithoutLink $liquidationWithoutLink)
    {
        $this->liquidationWithoutLink = $liquidationWithoutLink;
        return $this;
    }

    /**
     * Gets as automaticLiquidation
     *
     * @return \Pohoda\AutomaticLiquidation
     */
    public function getAutomaticLiquidation()
    {
        return $this->automaticLiquidation;
    }

    /**
     * Sets a new automaticLiquidation
     *
     * @param \Pohoda\AutomaticLiquidation $automaticLiquidation
     * @return self
     */
    public function setAutomaticLiquidation(\Pohoda\AutomaticLiquidation $automaticLiquidation)
    {
        $this->automaticLiquidation = $automaticLiquidation;
        return $this;
    }

    /**
     * Gets as listSupplierRequest
     *
     * @return \Pohoda\List\ListSupplierRequest
     */
    public function getListSupplierRequest()
    {
        return $this->listSupplierRequest;
    }

    /**
     * Sets a new listSupplierRequest
     *
     * @param \Pohoda\List\ListSupplierRequest $listSupplierRequest
     * @return self
     */
    public function setListSupplierRequest(\Pohoda\List\ListSupplierRequest $listSupplierRequest)
    {
        $this->listSupplierRequest = $listSupplierRequest;
        return $this;
    }
}
