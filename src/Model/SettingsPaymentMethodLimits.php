<?php

namespace Rouda\OpenProviderAPI\Model;

class SettingsPaymentMethodLimits
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
     * @var SettingsPaymentMethodLimit
     */
    protected $maximum;
    /**
     * 
     *
     * @var SettingsPaymentMethodLimit
     */
    protected $minimum;
    /**
     * 
     *
     * @return SettingsPaymentMethodLimit
     */
    public function getMaximum() : SettingsPaymentMethodLimit
    {
        return $this->maximum;
    }
    /**
     * 
     *
     * @param SettingsPaymentMethodLimit $maximum
     *
     * @return self
     */
    public function setMaximum(SettingsPaymentMethodLimit $maximum) : self
    {
        $this->initialized['maximum'] = true;
        $this->maximum = $maximum;
        return $this;
    }
    /**
     * 
     *
     * @return SettingsPaymentMethodLimit
     */
    public function getMinimum() : SettingsPaymentMethodLimit
    {
        return $this->minimum;
    }
    /**
     * 
     *
     * @param SettingsPaymentMethodLimit $minimum
     *
     * @return self
     */
    public function setMinimum(SettingsPaymentMethodLimit $minimum) : self
    {
        $this->initialized['minimum'] = true;
        $this->minimum = $minimum;
        return $this;
    }
}