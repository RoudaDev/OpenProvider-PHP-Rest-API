<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var SettingsPaymentMethodLimit|null
     */
    protected $maximum;
    /**
     * 
     *
     * @var SettingsPaymentMethodLimit|null
     */
    protected $minimum;
    /**
     * 
     *
     * @return SettingsPaymentMethodLimit|null
     */
    public function getMaximum() : ?SettingsPaymentMethodLimit
    {
        return $this->maximum;
    }
    /**
     * 
     *
     * @param SettingsPaymentMethodLimit|null $maximum
     *
     * @return self
     */
    public function setMaximum(?SettingsPaymentMethodLimit $maximum) : self
    {
        $this->initialized['maximum'] = true;
        $this->maximum = $maximum;
        return $this;
    }
    /**
     * 
     *
     * @return SettingsPaymentMethodLimit|null
     */
    public function getMinimum() : ?SettingsPaymentMethodLimit
    {
        return $this->minimum;
    }
    /**
     * 
     *
     * @param SettingsPaymentMethodLimit|null $minimum
     *
     * @return self
     */
    public function setMinimum(?SettingsPaymentMethodLimit $minimum) : self
    {
        $this->initialized['minimum'] = true;
        $this->minimum = $minimum;
        return $this;
    }
}