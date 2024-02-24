<?php

namespace Rouda\OpenProviderAPI\Model;

class ContactClientIpList
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
     * @var string[]
     */
    protected $allow;
    /**
     * 
     *
     * @var string[]
     */
    protected $deny;
    /**
     * 
     *
     * @return string[]
     */
    public function getAllow() : array
    {
        return $this->allow;
    }
    /**
     * 
     *
     * @param string[] $allow
     *
     * @return self
     */
    public function setAllow(array $allow) : self
    {
        $this->initialized['allow'] = true;
        $this->allow = $allow;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getDeny() : array
    {
        return $this->deny;
    }
    /**
     * 
     *
     * @param string[] $deny
     *
     * @return self
     */
    public function setDeny(array $deny) : self
    {
        $this->initialized['deny'] = true;
        $this->deny = $deny;
        return $this;
    }
}