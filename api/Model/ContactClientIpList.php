<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var string[]|null
     */
    protected $allow;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $deny;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getAllow() : ?array
    {
        return $this->allow;
    }
    /**
     * 
     *
     * @param string[]|null $allow
     *
     * @return self
     */
    public function setAllow(?array $allow) : self
    {
        $this->initialized['allow'] = true;
        $this->allow = $allow;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getDeny() : ?array
    {
        return $this->deny;
    }
    /**
     * 
     *
     * @param string[]|null $deny
     *
     * @return self
     */
    public function setDeny(?array $deny) : self
    {
        $this->initialized['deny'] = true;
        $this->deny = $deny;
        return $this;
    }
}