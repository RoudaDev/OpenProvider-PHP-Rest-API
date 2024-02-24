<?php

namespace Rouda\OpenProviderAPI\Model;

class ResellerResellerAdditionalData
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
    protected $cifNifNumber;
    /**
     * 
     *
     * @var string
     */
    protected $gstin;
    /**
     * 
     *
     * @var string
     */
    protected $internalReference;
    /**
     * 
     *
     * @return string
     */
    public function getCifNifNumber() : string
    {
        return $this->cifNifNumber;
    }
    /**
     * 
     *
     * @param string $cifNifNumber
     *
     * @return self
     */
    public function setCifNifNumber(string $cifNifNumber) : self
    {
        $this->initialized['cifNifNumber'] = true;
        $this->cifNifNumber = $cifNifNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getGstin() : string
    {
        return $this->gstin;
    }
    /**
     * 
     *
     * @param string $gstin
     *
     * @return self
     */
    public function setGstin(string $gstin) : self
    {
        $this->initialized['gstin'] = true;
        $this->gstin = $gstin;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInternalReference() : string
    {
        return $this->internalReference;
    }
    /**
     * 
     *
     * @param string $internalReference
     *
     * @return self
     */
    public function setInternalReference(string $internalReference) : self
    {
        $this->initialized['internalReference'] = true;
        $this->internalReference = $internalReference;
        return $this;
    }
}