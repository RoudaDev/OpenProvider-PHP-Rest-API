<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var SettingsPaymentMethodSettings|null
     */
    protected $settings;
    /**
     * 
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return SettingsPaymentMethodSettings|null
     */
    public function getSettings() : ?SettingsPaymentMethodSettings
    {
        return $this->settings;
    }
    /**
     * 
     *
     * @param SettingsPaymentMethodSettings|null $settings
     *
     * @return self
     */
    public function setSettings(?SettingsPaymentMethodSettings $settings) : self
    {
        $this->initialized['settings'] = true;
        $this->settings = $settings;
        return $this;
    }
}