<?php

namespace Rouda\OpenProvider\Api\Model;

class DomainCheckAdditionalData
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
    protected $idnScript;
    /**
     * 
     *
     * @return string|null
     */
    public function getIdnScript() : ?string
    {
        return $this->idnScript;
    }
    /**
     * 
     *
     * @param string|null $idnScript
     *
     * @return self
     */
    public function setIdnScript(?string $idnScript) : self
    {
        $this->initialized['idnScript'] = true;
        $this->idnScript = $idnScript;
        return $this;
    }
}