<?php

namespace Rouda\OpenProviderAPI\Model;

class LicenseCreateLicenseResponseData
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
     * @var int[]
     */
    protected $attachedKeys;
    /**
     * 
     *
     * @var int
     */
    protected $keyId;
    /**
     * 
     *
     * @return int[]
     */
    public function getAttachedKeys() : array
    {
        return $this->attachedKeys;
    }
    /**
     * 
     *
     * @param int[] $attachedKeys
     *
     * @return self
     */
    public function setAttachedKeys(array $attachedKeys) : self
    {
        $this->initialized['attachedKeys'] = true;
        $this->attachedKeys = $attachedKeys;
        return $this;
    }
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
}