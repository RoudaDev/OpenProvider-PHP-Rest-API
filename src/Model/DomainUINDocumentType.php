<?php

namespace Rouda\OpenProviderAPI\Model;

class DomainUINDocumentType
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
    protected $docType;
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
    public function getDocType() : string
    {
        return $this->docType;
    }
    /**
     * 
     *
     * @param string $docType
     *
     * @return self
     */
    public function setDocType(string $docType) : self
    {
        $this->initialized['docType'] = true;
        $this->docType = $docType;
        return $this;
    }
}