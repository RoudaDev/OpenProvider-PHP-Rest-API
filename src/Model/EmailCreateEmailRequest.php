<?php

namespace Rouda\OpenProviderAPI\Model;

class EmailCreateEmailRequest
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
     * @var EmailFields[]
     */
    protected $fields;
    /**
     * 
     *
     * @var string
     */
    protected $group;
    /**
     * 
     *
     * @var bool
     */
    protected $isActive;
    /**
     * 
     *
     * @var bool
     */
    protected $isDefault;
    /**
     * 
     *
     * @var string[]
     */
    protected $locale;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var EmailTags[]
     */
    protected $tags;
    /**
     * 
     *
     * @return EmailFields[]
     */
    public function getFields() : array
    {
        return $this->fields;
    }
    /**
     * 
     *
     * @param EmailFields[] $fields
     *
     * @return self
     */
    public function setFields(array $fields) : self
    {
        $this->initialized['fields'] = true;
        $this->fields = $fields;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getGroup() : string
    {
        return $this->group;
    }
    /**
     * 
     *
     * @param string $group
     *
     * @return self
     */
    public function setGroup(string $group) : self
    {
        $this->initialized['group'] = true;
        $this->group = $group;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsActive() : bool
    {
        return $this->isActive;
    }
    /**
     * 
     *
     * @param bool $isActive
     *
     * @return self
     */
    public function setIsActive(bool $isActive) : self
    {
        $this->initialized['isActive'] = true;
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsDefault() : bool
    {
        return $this->isDefault;
    }
    /**
     * 
     *
     * @param bool $isDefault
     *
     * @return self
     */
    public function setIsDefault(bool $isDefault) : self
    {
        $this->initialized['isDefault'] = true;
        $this->isDefault = $isDefault;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getLocale() : array
    {
        return $this->locale;
    }
    /**
     * 
     *
     * @param string[] $locale
     *
     * @return self
     */
    public function setLocale(array $locale) : self
    {
        $this->initialized['locale'] = true;
        $this->locale = $locale;
        return $this;
    }
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
     * @return EmailTags[]
     */
    public function getTags() : array
    {
        return $this->tags;
    }
    /**
     * 
     *
     * @param EmailTags[] $tags
     *
     * @return self
     */
    public function setTags(array $tags) : self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;
        return $this;
    }
}