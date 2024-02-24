<?php

namespace Rouda\OpenProviderAPI\Model;

class SettingsPaymentMethodSettings
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
     * @var SettingsPaymentMethodLimits
     */
    protected $limit;
    /**
     * 
     *
     * @var float
     */
    protected $transactionFee;
    /**
     * 
     *
     * @var float
     */
    protected $transactionFeeAbsolute;
    /**
     * 
     *
     * @return SettingsPaymentMethodLimits
     */
    public function getLimit() : SettingsPaymentMethodLimits
    {
        return $this->limit;
    }
    /**
     * 
     *
     * @param SettingsPaymentMethodLimits $limit
     *
     * @return self
     */
    public function setLimit(SettingsPaymentMethodLimits $limit) : self
    {
        $this->initialized['limit'] = true;
        $this->limit = $limit;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTransactionFee() : float
    {
        return $this->transactionFee;
    }
    /**
     * 
     *
     * @param float $transactionFee
     *
     * @return self
     */
    public function setTransactionFee(float $transactionFee) : self
    {
        $this->initialized['transactionFee'] = true;
        $this->transactionFee = $transactionFee;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTransactionFeeAbsolute() : float
    {
        return $this->transactionFeeAbsolute;
    }
    /**
     * 
     *
     * @param float $transactionFeeAbsolute
     *
     * @return self
     */
    public function setTransactionFeeAbsolute(float $transactionFeeAbsolute) : self
    {
        $this->initialized['transactionFeeAbsolute'] = true;
        $this->transactionFeeAbsolute = $transactionFeeAbsolute;
        return $this;
    }
}