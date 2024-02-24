<?php

namespace Rouda\OpenProviderAPI\Model;

class CsrDecodeCsrRequest
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
    protected $csr;
    /**
     * 
     *
     * @return string
     */
    public function getCsr() : string
    {
        return $this->csr;
    }
    /**
     * 
     *
     * @param string $csr
     *
     * @return self
     */
    public function setCsr(string $csr) : self
    {
        $this->initialized['csr'] = true;
        $this->csr = $csr;
        return $this;
    }
}