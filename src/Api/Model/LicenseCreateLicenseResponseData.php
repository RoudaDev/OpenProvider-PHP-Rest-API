<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var int[]|null
     */
    protected $attachedKeys;
    /**
     * 
     *
     * @var int|null
     */
    protected $keyId;
    /**
     * 
     *
     * @return int[]|null
     */
    public function getAttachedKeys() : ?array
    {
        return $this->attachedKeys;
    }
    /**
     * 
     *
     * @param int[]|null $attachedKeys
     *
     * @return self
     */
    public function setAttachedKeys(?array $attachedKeys) : self
    {
        $this->initialized['attachedKeys'] = true;
        $this->attachedKeys = $attachedKeys;
        return $this;
    }
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
}