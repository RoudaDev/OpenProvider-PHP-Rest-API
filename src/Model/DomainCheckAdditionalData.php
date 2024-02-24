<?php

namespace Rouda\OpenProviderAPI\Model;

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
     * @var string
     */
    protected $idnScript;
    /**
     * 
     *
     * @return string
     */
    public function getIdnScript() : string
    {
        return $this->idnScript;
    }
    /**
     * 
     *
     * @param string $idnScript
     *
     * @return self
     */
    public function setIdnScript(string $idnScript) : self
    {
        $this->initialized['idnScript'] = true;
        $this->idnScript = $idnScript;
        return $this;
    }
}