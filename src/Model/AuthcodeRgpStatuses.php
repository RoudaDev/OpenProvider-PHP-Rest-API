<?php

namespace Rouda\OpenProviderAPI\Model;

class AuthcodeRgpStatuses
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
    protected $addPeriod;
    /**
     * 
     *
     * @var string
     */
    protected $autoRenewPeriod;
    /**
     * 
     *
     * @return string
     */
    public function getAddPeriod() : string
    {
        return $this->addPeriod;
    }
    /**
     * 
     *
     * @param string $addPeriod
     *
     * @return self
     */
    public function setAddPeriod(string $addPeriod) : self
    {
        $this->initialized['addPeriod'] = true;
        $this->addPeriod = $addPeriod;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAutoRenewPeriod() : string
    {
        return $this->autoRenewPeriod;
    }
    /**
     * 
     *
     * @param string $autoRenewPeriod
     *
     * @return self
     */
    public function setAutoRenewPeriod(string $autoRenewPeriod) : self
    {
        $this->initialized['autoRenewPeriod'] = true;
        $this->autoRenewPeriod = $autoRenewPeriod;
        return $this;
    }
}