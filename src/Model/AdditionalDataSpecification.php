<?php

namespace Rouda\OpenProviderAPI\Model;

class AdditionalDataSpecification
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
    protected $description;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var AdditionalDataSelectOption[]
     */
    protected $options;
    /**
     * 
     *
     * @var bool
     */
    protected $required;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
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
     * @return AdditionalDataSelectOption[]
     */
    public function getOptions() : array
    {
        return $this->options;
    }
    /**
     * 
     *
     * @param AdditionalDataSelectOption[] $options
     *
     * @return self
     */
    public function setOptions(array $options) : self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getRequired() : bool
    {
        return $this->required;
    }
    /**
     * 
     *
     * @param bool $required
     *
     * @return self
     */
    public function setRequired(bool $required) : self
    {
        $this->initialized['required'] = true;
        $this->required = $required;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}