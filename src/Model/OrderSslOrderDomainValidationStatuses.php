<?php

namespace Rouda\OpenProviderAPI\Model;

class OrderSslOrderDomainValidationStatuses
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
    protected $caOperation;
    /**
     * 
     *
     * @var string
     */
    protected $caOrderStatus;
    /**
     * 
     *
     * @var string
     */
    protected $caStatus;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @return string
     */
    public function getCaOperation() : string
    {
        return $this->caOperation;
    }
    /**
     * 
     *
     * @param string $caOperation
     *
     * @return self
     */
    public function setCaOperation(string $caOperation) : self
    {
        $this->initialized['caOperation'] = true;
        $this->caOperation = $caOperation;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCaOrderStatus() : string
    {
        return $this->caOrderStatus;
    }
    /**
     * 
     *
     * @param string $caOrderStatus
     *
     * @return self
     */
    public function setCaOrderStatus(string $caOrderStatus) : self
    {
        $this->initialized['caOrderStatus'] = true;
        $this->caOrderStatus = $caOrderStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCaStatus() : string
    {
        return $this->caStatus;
    }
    /**
     * 
     *
     * @param string $caStatus
     *
     * @return self
     */
    public function setCaStatus(string $caStatus) : self
    {
        $this->initialized['caStatus'] = true;
        $this->caStatus = $caStatus;
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
}