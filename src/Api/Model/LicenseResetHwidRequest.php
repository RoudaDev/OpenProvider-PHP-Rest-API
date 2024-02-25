<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var int|null
     */
    protected $keyId;
    /**
     * 
     *
     * @var string|null
     */
    protected $product;
    /**
     * 
     *
     * @return int|null
     */
    public function getKeyId() : ?int
    {
        return $this->keyId;
    }
    /**
     * 
     *
     * @param int|null $keyId
     *
     * @return self
     */
    public function setKeyId(?int $keyId) : self
    {
        $this->initialized['keyId'] = true;
        $this->keyId = $keyId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getProduct() : ?string
    {
        return $this->product;
    }
    /**
     * 
     *
     * @param string|null $product
     *
     * @return self
     */
    public function setProduct(?string $product) : self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
}