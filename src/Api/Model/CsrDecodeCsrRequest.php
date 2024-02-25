<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var string|null
     */
    protected $csr;
    /**
     * 
     *
     * @return string|null
     */
    public function getCsr() : ?string
    {
        return $this->csr;
    }
    /**
     * 
     *
     * @param string|null $csr
     *
     * @return self
     */
    public function setCsr(?string $csr) : self
    {
        $this->initialized['csr'] = true;
        $this->csr = $csr;
        return $this;
    }
}