<?php

namespace Rouda\OpenProviderAPI\Model;

class OrderSslOrder
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string
     */
    protected $activeDate;
    /**
     * 
     *
     * @var OrderSslOrderAdditionalData[]
     */
    protected $additionalData;
    /**
     * 
     *
     * @var string
     */
    protected $administrativeHandle;
    /**
     * 
     *
     * @var string
     */
    protected $autorenew;
    /**
     * 
     *
     * @var string
     */
    protected $billingHandle;
    /**
     * 
     *
     * @var string
     */
    protected $brandName;
    /**
     * 
     *
     * @var string
     */
    protected $certificate;
    /**
     * 
     *
     * @var string
     */
    protected $commonName;
    /**
     * 
     *
     * @var string
     */
    protected $csr;
    /**
     * 
     *
     * @var OrderSslOrderDomainValidationMethods[]
     */
    protected $domainValidationMethods;
    /**
     * 
     *
     * @var OrderSslOrderDomainValidationStatuses
     */
    protected $domainValidationStatuses;
    /**
     * 
     *
     * @var string
     */
    protected $emailApprover;
    /**
     * 
     *
     * @var string
     */
    protected $emailReissue;
    /**
     * 
     *
     * @var string
     */
    protected $expirationDate;
    /**
     * 
     *
     * @var string
     */
    protected $features;
    /**
     * 
     *
     * @var string[]
     */
    protected $hostNames;
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $intermediateCertificate;
    /**
     * 
     *
     * @var OrderSslOrderOptions
     */
    protected $options;
    /**
     * 
     *
     * @var string
     */
    protected $orderDate;
    /**
     * 
     *
     * @var string
     */
    protected $orderEndsAt;
    /**
     * 
     *
     * @var string
     */
    protected $organizationHandle;
    /**
     * 
     *
     * @var int
     */
    protected $period;
    /**
     * 
     *
     * @var int
     */
    protected $productId;
    /**
     * 
     *
     * @var string
     */
    protected $productName;
    /**
     * 
     *
     * @var string
     */
    protected $reissueAt;
    /**
     * 
     *
     * @var string
     */
    protected $rootCertificate;
    /**
     * 
     *
     * @var string
     */
    protected $software;
    /**
     * 
     *
     * @var string
     */
    protected $sslinhvaOrderId;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var string
     */
    protected $technicalHandle;
    /**
     * 
     *
     * @var string
     */
    protected $validationMethod;
    /**
     * 
     *
     * @var string
     */
    protected $vendorOrderId;
    /**
     * 
     *
     * @var string
     */
    protected $vendorReferenceId;
    /**
     * 
     *
     * @return string
     */
    public function getActiveDate() : string
    {
        return $this->activeDate;
    }
    /**
     * 
     *
     * @param string $activeDate
     *
     * @return self
     */
    public function setActiveDate(string $activeDate) : self
    {
        $this->initialized['activeDate'] = true;
        $this->activeDate = $activeDate;
        return $this;
    }
    /**
     * 
     *
     * @return OrderSslOrderAdditionalData[]
     */
    public function getAdditionalData() : array
    {
        return $this->additionalData;
    }
    /**
     * 
     *
     * @param OrderSslOrderAdditionalData[] $additionalData
     *
     * @return self
     */
    public function setAdditionalData(array $additionalData) : self
    {
        $this->initialized['additionalData'] = true;
        $this->additionalData = $additionalData;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAdministrativeHandle() : string
    {
        return $this->administrativeHandle;
    }
    /**
     * 
     *
     * @param string $administrativeHandle
     *
     * @return self
     */
    public function setAdministrativeHandle(string $administrativeHandle) : self
    {
        $this->initialized['administrativeHandle'] = true;
        $this->administrativeHandle = $administrativeHandle;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAutorenew() : string
    {
        return $this->autorenew;
    }
    /**
     * 
     *
     * @param string $autorenew
     *
     * @return self
     */
    public function setAutorenew(string $autorenew) : self
    {
        $this->initialized['autorenew'] = true;
        $this->autorenew = $autorenew;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBillingHandle() : string
    {
        return $this->billingHandle;
    }
    /**
     * 
     *
     * @param string $billingHandle
     *
     * @return self
     */
    public function setBillingHandle(string $billingHandle) : self
    {
        $this->initialized['billingHandle'] = true;
        $this->billingHandle = $billingHandle;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBrandName() : string
    {
        return $this->brandName;
    }
    /**
     * 
     *
     * @param string $brandName
     *
     * @return self
     */
    public function setBrandName(string $brandName) : self
    {
        $this->initialized['brandName'] = true;
        $this->brandName = $brandName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCertificate() : string
    {
        return $this->certificate;
    }
    /**
     * 
     *
     * @param string $certificate
     *
     * @return self
     */
    public function setCertificate(string $certificate) : self
    {
        $this->initialized['certificate'] = true;
        $this->certificate = $certificate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCommonName() : string
    {
        return $this->commonName;
    }
    /**
     * 
     *
     * @param string $commonName
     *
     * @return self
     */
    public function setCommonName(string $commonName) : self
    {
        $this->initialized['commonName'] = true;
        $this->commonName = $commonName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCsr() : string
    {
        return $this->csr;
    }
    /**
     * 
     *
     * @param string $csr
     *
     * @return self
     */
    public function setCsr(string $csr) : self
    {
        $this->initialized['csr'] = true;
        $this->csr = $csr;
        return $this;
    }
    /**
     * 
     *
     * @return OrderSslOrderDomainValidationMethods[]
     */
    public function getDomainValidationMethods() : array
    {
        return $this->domainValidationMethods;
    }
    /**
     * 
     *
     * @param OrderSslOrderDomainValidationMethods[] $domainValidationMethods
     *
     * @return self
     */
    public function setDomainValidationMethods(array $domainValidationMethods) : self
    {
        $this->initialized['domainValidationMethods'] = true;
        $this->domainValidationMethods = $domainValidationMethods;
        return $this;
    }
    /**
     * 
     *
     * @return OrderSslOrderDomainValidationStatuses
     */
    public function getDomainValidationStatuses() : OrderSslOrderDomainValidationStatuses
    {
        return $this->domainValidationStatuses;
    }
    /**
     * 
     *
     * @param OrderSslOrderDomainValidationStatuses $domainValidationStatuses
     *
     * @return self
     */
    public function setDomainValidationStatuses(OrderSslOrderDomainValidationStatuses $domainValidationStatuses) : self
    {
        $this->initialized['domainValidationStatuses'] = true;
        $this->domainValidationStatuses = $domainValidationStatuses;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEmailApprover() : string
    {
        return $this->emailApprover;
    }
    /**
     * 
     *
     * @param string $emailApprover
     *
     * @return self
     */
    public function setEmailApprover(string $emailApprover) : self
    {
        $this->initialized['emailApprover'] = true;
        $this->emailApprover = $emailApprover;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEmailReissue() : string
    {
        return $this->emailReissue;
    }
    /**
     * 
     *
     * @param string $emailReissue
     *
     * @return self
     */
    public function setEmailReissue(string $emailReissue) : self
    {
        $this->initialized['emailReissue'] = true;
        $this->emailReissue = $emailReissue;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getExpirationDate() : string
    {
        return $this->expirationDate;
    }
    /**
     * 
     *
     * @param string $expirationDate
     *
     * @return self
     */
    public function setExpirationDate(string $expirationDate) : self
    {
        $this->initialized['expirationDate'] = true;
        $this->expirationDate = $expirationDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFeatures() : string
    {
        return $this->features;
    }
    /**
     * 
     *
     * @param string $features
     *
     * @return self
     */
    public function setFeatures(string $features) : self
    {
        $this->initialized['features'] = true;
        $this->features = $features;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getHostNames() : array
    {
        return $this->hostNames;
    }
    /**
     * 
     *
     * @param string[] $hostNames
     *
     * @return self
     */
    public function setHostNames(array $hostNames) : self
    {
        $this->initialized['hostNames'] = true;
        $this->hostNames = $hostNames;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIntermediateCertificate() : string
    {
        return $this->intermediateCertificate;
    }
    /**
     * 
     *
     * @param string $intermediateCertificate
     *
     * @return self
     */
    public function setIntermediateCertificate(string $intermediateCertificate) : self
    {
        $this->initialized['intermediateCertificate'] = true;
        $this->intermediateCertificate = $intermediateCertificate;
        return $this;
    }
    /**
     * 
     *
     * @return OrderSslOrderOptions
     */
    public function getOptions() : OrderSslOrderOptions
    {
        return $this->options;
    }
    /**
     * 
     *
     * @param OrderSslOrderOptions $options
     *
     * @return self
     */
    public function setOptions(OrderSslOrderOptions $options) : self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOrderDate() : string
    {
        return $this->orderDate;
    }
    /**
     * 
     *
     * @param string $orderDate
     *
     * @return self
     */
    public function setOrderDate(string $orderDate) : self
    {
        $this->initialized['orderDate'] = true;
        $this->orderDate = $orderDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOrderEndsAt() : string
    {
        return $this->orderEndsAt;
    }
    /**
     * 
     *
     * @param string $orderEndsAt
     *
     * @return self
     */
    public function setOrderEndsAt(string $orderEndsAt) : self
    {
        $this->initialized['orderEndsAt'] = true;
        $this->orderEndsAt = $orderEndsAt;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOrganizationHandle() : string
    {
        return $this->organizationHandle;
    }
    /**
     * 
     *
     * @param string $organizationHandle
     *
     * @return self
     */
    public function setOrganizationHandle(string $organizationHandle) : self
    {
        $this->initialized['organizationHandle'] = true;
        $this->organizationHandle = $organizationHandle;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPeriod() : int
    {
        return $this->period;
    }
    /**
     * 
     *
     * @param int $period
     *
     * @return self
     */
    public function setPeriod(int $period) : self
    {
        $this->initialized['period'] = true;
        $this->period = $period;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getProductId() : int
    {
        return $this->productId;
    }
    /**
     * 
     *
     * @param int $productId
     *
     * @return self
     */
    public function setProductId(int $productId) : self
    {
        $this->initialized['productId'] = true;
        $this->productId = $productId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProductName() : string
    {
        return $this->productName;
    }
    /**
     * 
     *
     * @param string $productName
     *
     * @return self
     */
    public function setProductName(string $productName) : self
    {
        $this->initialized['productName'] = true;
        $this->productName = $productName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReissueAt() : string
    {
        return $this->reissueAt;
    }
    /**
     * 
     *
     * @param string $reissueAt
     *
     * @return self
     */
    public function setReissueAt(string $reissueAt) : self
    {
        $this->initialized['reissueAt'] = true;
        $this->reissueAt = $reissueAt;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRootCertificate() : string
    {
        return $this->rootCertificate;
    }
    /**
     * 
     *
     * @param string $rootCertificate
     *
     * @return self
     */
    public function setRootCertificate(string $rootCertificate) : self
    {
        $this->initialized['rootCertificate'] = true;
        $this->rootCertificate = $rootCertificate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSoftware() : string
    {
        return $this->software;
    }
    /**
     * 
     *
     * @param string $software
     *
     * @return self
     */
    public function setSoftware(string $software) : self
    {
        $this->initialized['software'] = true;
        $this->software = $software;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSslinhvaOrderId() : string
    {
        return $this->sslinhvaOrderId;
    }
    /**
     * 
     *
     * @param string $sslinhvaOrderId
     *
     * @return self
     */
    public function setSslinhvaOrderId(string $sslinhvaOrderId) : self
    {
        $this->initialized['sslinhvaOrderId'] = true;
        $this->sslinhvaOrderId = $sslinhvaOrderId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTechnicalHandle() : string
    {
        return $this->technicalHandle;
    }
    /**
     * 
     *
     * @param string $technicalHandle
     *
     * @return self
     */
    public function setTechnicalHandle(string $technicalHandle) : self
    {
        $this->initialized['technicalHandle'] = true;
        $this->technicalHandle = $technicalHandle;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getValidationMethod() : string
    {
        return $this->validationMethod;
    }
    /**
     * 
     *
     * @param string $validationMethod
     *
     * @return self
     */
    public function setValidationMethod(string $validationMethod) : self
    {
        $this->initialized['validationMethod'] = true;
        $this->validationMethod = $validationMethod;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVendorOrderId() : string
    {
        return $this->vendorOrderId;
    }
    /**
     * 
     *
     * @param string $vendorOrderId
     *
     * @return self
     */
    public function setVendorOrderId(string $vendorOrderId) : self
    {
        $this->initialized['vendorOrderId'] = true;
        $this->vendorOrderId = $vendorOrderId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVendorReferenceId() : string
    {
        return $this->vendorReferenceId;
    }
    /**
     * 
     *
     * @param string $vendorReferenceId
     *
     * @return self
     */
    public function setVendorReferenceId(string $vendorReferenceId) : self
    {
        $this->initialized['vendorReferenceId'] = true;
        $this->vendorReferenceId = $vendorReferenceId;
        return $this;
    }
}