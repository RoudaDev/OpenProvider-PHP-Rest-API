<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var string|null
     */
    protected $addPeriod;
    /**
     * 
     *
     * @var string|null
     */
    protected $autoRenewPeriod;
    /**
     * 
     *
     * @return string|null
     */
    public function getAddPeriod() : ?string
    {
        return $this->addPeriod;
    }
    /**
     * 
     *
     * @param string|null $addPeriod
     *
     * @return self
     */
    public function setAddPeriod(?string $addPeriod) : self
    {
        $this->initialized['addPeriod'] = true;
        $this->addPeriod = $addPeriod;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAutoRenewPeriod() : ?string
    {
        return $this->autoRenewPeriod;
    }
    /**
     * 
     *
     * @param string|null $autoRenewPeriod
     *
     * @return self
     */
    public function setAutoRenewPeriod(?string $autoRenewPeriod) : self
    {
        $this->initialized['autoRenewPeriod'] = true;
        $this->autoRenewPeriod = $autoRenewPeriod;
        return $this;
    }
}