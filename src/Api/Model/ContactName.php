<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var string|null
     */
    protected $firstName;
    /**
     * 
     *
     * @var string|null
     */
    protected $fullName;
    /**
     * 
     *
     * @var string|null
     */
    protected $initials;
    /**
     * 
     *
     * @var string|null
     */
    protected $lastName;
    /**
     * 
     *
     * @var string|null
     */
    protected $prefix;
    /**
     * 
     *
     * @return string|null
     */
    public function getFirstName() : ?string
    {
        return $this->firstName;
    }
    /**
     * 
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setFirstName(?string $firstName) : self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFullName() : ?string
    {
        return $this->fullName;
    }
    /**
     * 
     *
     * @param string|null $fullName
     *
     * @return self
     */
    public function setFullName(?string $fullName) : self
    {
        $this->initialized['fullName'] = true;
        $this->fullName = $fullName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInitials() : ?string
    {
        return $this->initials;
    }
    /**
     * 
     *
     * @param string|null $initials
     *
     * @return self
     */
    public function setInitials(?string $initials) : self
    {
        $this->initialized['initials'] = true;
        $this->initials = $initials;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLastName() : ?string
    {
        return $this->lastName;
    }
    /**
     * 
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setLastName(?string $lastName) : self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPrefix() : ?string
    {
        return $this->prefix;
    }
    /**
     * 
     *
     * @param string|null $prefix
     *
     * @return self
     */
    public function setPrefix(?string $prefix) : self
    {
        $this->initialized['prefix'] = true;
        $this->prefix = $prefix;
        return $this;
    }
}