<?php

namespace Rouda\OpenProviderAPI\Model;

class SettingsPaymentMethods
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
    protected $name;
    /**
     * 
     *
     * @var SettingsPaymentMethodSettings
     */
    protected $settings;
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return SettingsPaymentMethodSettings
     */
    public function getSettings() : SettingsPaymentMethodSettings
    {
        return $this->settings;
    }
    /**
     * 
     *
     * @param SettingsPaymentMethodSettings $settings
     *
     * @return self
     */
    public function setSettings(SettingsPaymentMethodSettings $settings) : self
    {
        $this->initialized['settings'] = true;
        $this->settings = $settings;
        return $this;
    }
}