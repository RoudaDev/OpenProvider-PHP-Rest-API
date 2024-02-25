<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var string|null
     */
    protected $cifNifNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $gstin;
    /**
     * 
     *
     * @var string|null
     */
    protected $internalReference;
    /**
     * 
     *
     * @return string|null
     */
    public function getCifNifNumber() : ?string
    {
        return $this->cifNifNumber;
    }
    /**
     * 
     *
     * @param string|null $cifNifNumber
     *
     * @return self
     */
    public function setCifNifNumber(?string $cifNifNumber) : self
    {
        $this->initialized['cifNifNumber'] = true;
        $this->cifNifNumber = $cifNifNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getGstin() : ?string
    {
        return $this->gstin;
    }
    /**
     * 
     *
     * @param string|null $gstin
     *
     * @return self
     */
    public function setGstin(?string $gstin) : self
    {
        $this->initialized['gstin'] = true;
        $this->gstin = $gstin;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInternalReference() : ?string
    {
        return $this->internalReference;
    }
    /**
     * 
     *
     * @param string|null $internalReference
     *
     * @return self
     */
    public function setInternalReference(?string $internalReference) : self
    {
        $this->initialized['internalReference'] = true;
        $this->internalReference = $internalReference;
        return $this;
    }
}