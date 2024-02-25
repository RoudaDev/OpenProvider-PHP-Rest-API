<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var bool|null
     */
    protected $isSigned;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $signedAt;
    /**
     * 
     *
     * @var string|null
     */
    protected $type;
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsSigned() : ?bool
    {
        return $this->isSigned;
    }
    /**
     * 
     *
     * @param bool|null $isSigned
     *
     * @return self
     */
    public function setIsSigned(?bool $isSigned) : self
    {
        $this->initialized['isSigned'] = true;
        $this->isSigned = $isSigned;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSignedAt() : ?string
    {
        return $this->signedAt;
    }
    /**
     * 
     *
     * @param string|null $signedAt
     *
     * @return self
     */
    public function setSignedAt(?string $signedAt) : self
    {
        $this->initialized['signedAt'] = true;
        $this->signedAt = $signedAt;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}