<?php

namespace Rouda\OpenProviderAPI\Model;

class CustomerExtensionAdditionalData
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
     * @var CustomerExtensionData
     */
    protected $data;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @return CustomerExtensionData
     */
    public function getData() : CustomerExtensionData
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param CustomerExtensionData $data
     *
     * @return self
     */
    public function setData(CustomerExtensionData $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
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
}