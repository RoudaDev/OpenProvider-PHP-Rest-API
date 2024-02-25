<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var string|null
     */
    protected $caOperation;
    /**
     * 
     *
     * @var string|null
     */
    protected $caOrderStatus;
    /**
     * 
     *
     * @var string|null
     */
    protected $caStatus;
    /**
     * 
     *
     * @var string|null
     */
    protected $status;
    /**
     * 
     *
     * @return string|null
     */
    public function getCaOperation() : ?string
    {
        return $this->caOperation;
    }
    /**
     * 
     *
     * @param string|null $caOperation
     *
     * @return self
     */
    public function setCaOperation(?string $caOperation) : self
    {
        $this->initialized['caOperation'] = true;
        $this->caOperation = $caOperation;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCaOrderStatus() : ?string
    {
        return $this->caOrderStatus;
    }
    /**
     * 
     *
     * @param string|null $caOrderStatus
     *
     * @return self
     */
    public function setCaOrderStatus(?string $caOrderStatus) : self
    {
        $this->initialized['caOrderStatus'] = true;
        $this->caOrderStatus = $caOrderStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCaStatus() : ?string
    {
        return $this->caStatus;
    }
    /**
     * 
     *
     * @param string|null $caStatus
     *
     * @return self
     */
    public function setCaStatus(?string $caStatus) : self
    {
        $this->initialized['caStatus'] = true;
        $this->caStatus = $caStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
}