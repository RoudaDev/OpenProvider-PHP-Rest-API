<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var CustomerExtensionData|null
     */
    protected $data;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @return CustomerExtensionData|null
     */
    public function getData() : ?CustomerExtensionData
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param CustomerExtensionData|null $data
     *
     * @return self
     */
    public function setData(?CustomerExtensionData $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
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
}