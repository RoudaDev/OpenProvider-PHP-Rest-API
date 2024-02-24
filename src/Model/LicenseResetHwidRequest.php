<?php

namespace Rouda\OpenProviderAPI\Model;

class LicenseResetHwidRequest
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
     * @var int
     */
    protected $keyId;
    /**
     * 
     *
     * @var string
     */
    protected $product;
    /**
     * 
     *
     * @return int
     */
    public function getKeyId() : int
    {
        return $this->keyId;
    }
    /**
     * 
     *
     * @param int $keyId
     *
     * @return self
     */
    public function setKeyId(int $keyId) : self
    {
        $this->initialized['keyId'] = true;
        $this->keyId = $keyId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProduct() : string
    {
        return $this->product;
    }
    /**
     * 
     *
     * @param string $product
     *
     * @return self
     */
    public function setProduct(string $product) : self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
}