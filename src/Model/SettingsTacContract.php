<?php

namespace Rouda\OpenProviderAPI\Model;

class SettingsTacContract
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
     * @var bool
     */
    protected $isSigned;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $signedAt;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @return bool
     */
    public function getIsSigned() : bool
    {
        return $this->isSigned;
    }
    /**
     * 
     *
     * @param bool $isSigned
     *
     * @return self
     */
    public function setIsSigned(bool $isSigned) : self
    {
        $this->initialized['isSigned'] = true;
        $this->isSigned = $isSigned;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSignedAt() : string
    {
        return $this->signedAt;
    }
    /**
     * 
     *
     * @param string $signedAt
     *
     * @return self
     */
    public function setSignedAt(string $signedAt) : self
    {
        $this->initialized['signedAt'] = true;
        $this->signedAt = $signedAt;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}