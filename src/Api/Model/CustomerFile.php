<?php

namespace Rouda\OpenProvider\Api\Model;

class CustomerFile
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
    protected $description;
    /**
     * 
     *
     * @var string|null
     */
    protected $docType;
    /**
     * 
     *
     * @var string|null
     */
    protected $path;
    /**
     * 
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDocType() : ?string
    {
        return $this->docType;
    }
    /**
     * 
     *
     * @param string|null $docType
     *
     * @return self
     */
    public function setDocType(?string $docType) : self
    {
        $this->initialized['docType'] = true;
        $this->docType = $docType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPath() : ?string
    {
        return $this->path;
    }
    /**
     * 
     *
     * @param string|null $path
     *
     * @return self
     */
    public function setPath(?string $path) : self
    {
        $this->initialized['path'] = true;
        $this->path = $path;
        return $this;
    }
}