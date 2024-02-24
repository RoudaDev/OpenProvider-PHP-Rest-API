<?php

namespace Rouda\OpenProviderAPI\Model;

class ContactName
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
    protected $firstName;
    /**
     * 
     *
     * @var string
     */
    protected $fullName;
    /**
     * 
     *
     * @var string
     */
    protected $initials;
    /**
     * 
     *
     * @var string
     */
    protected $lastName;
    /**
     * 
     *
     * @var string
     */
    protected $prefix;
    /**
     * 
     *
     * @return string
     */
    public function getFirstName() : string
    {
        return $this->firstName;
    }
    /**
     * 
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName(string $firstName) : self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFullName() : string
    {
        return $this->fullName;
    }
    /**
     * 
     *
     * @param string $fullName
     *
     * @return self
     */
    public function setFullName(string $fullName) : self
    {
        $this->initialized['fullName'] = true;
        $this->fullName = $fullName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInitials() : string
    {
        return $this->initials;
    }
    /**
     * 
     *
     * @param string $initials
     *
     * @return self
     */
    public function setInitials(string $initials) : self
    {
        $this->initialized['initials'] = true;
        $this->initials = $initials;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLastName() : string
    {
        return $this->lastName;
    }
    /**
     * 
     *
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName(string $lastName) : self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPrefix() : string
    {
        return $this->prefix;
    }
    /**
     * 
     *
     * @param string $prefix
     *
     * @return self
     */
    public function setPrefix(string $prefix) : self
    {
        $this->initialized['prefix'] = true;
        $this->prefix = $prefix;
        return $this;
    }
}