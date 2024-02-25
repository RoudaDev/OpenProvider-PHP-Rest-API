<?php

namespace Rouda\OpenProvider\Api\Model;

class EmailUpdateEmailRequest
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
     * @var EmailFields[]|null
     */
    protected $fields;
    /**
     * 
     *
     * @var string|null
     */
    protected $group;
    /**
     * 
     *
     * @var int|null
     */
    protected $id;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isActive;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isDefault;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $locale;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var EmailTags[]|null
     */
    protected $tags;
    /**
     * 
     *
     * @return EmailFields[]|null
     */
    public function getFields() : ?array
    {
        return $this->fields;
    }
    /**
     * 
     *
     * @param EmailFields[]|null $fields
     *
     * @return self
     */
    public function setFields(?array $fields) : self
    {
        $this->initialized['fields'] = true;
        $this->fields = $fields;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getGroup() : ?string
    {
        return $this->group;
    }
    /**
     * 
     *
     * @param string|null $group
     *
     * @return self
     */
    public function setGroup(?string $group) : self
    {
        $this->initialized['group'] = true;
        $this->group = $group;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsActive() : ?bool
    {
        return $this->isActive;
    }
    /**
     * 
     *
     * @param bool|null $isActive
     *
     * @return self
     */
    public function setIsActive(?bool $isActive) : self
    {
        $this->initialized['isActive'] = true;
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsDefault() : ?bool
    {
        return $this->isDefault;
    }
    /**
     * 
     *
     * @param bool|null $isDefault
     *
     * @return self
     */
    public function setIsDefault(?bool $isDefault) : self
    {
        $this->initialized['isDefault'] = true;
        $this->isDefault = $isDefault;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getLocale() : ?array
    {
        return $this->locale;
    }
    /**
     * 
     *
     * @param string[]|null $locale
     *
     * @return self
     */
    public function setLocale(?array $locale) : self
    {
        $this->initialized['locale'] = true;
        $this->locale = $locale;
        return $this;
    }
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
     * @return EmailTags[]|null
     */
    public function getTags() : ?array
    {
        return $this->tags;
    }
    /**
     * 
     *
     * @param EmailTags[]|null $tags
     *
     * @return self
     */
    public function setTags(?array $tags) : self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;
        return $this;
    }
}