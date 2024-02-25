<?php

namespace Rouda\OpenProvider\Api\Model;

class SpamExpertGenerateLoginURLRequest
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
     * If you use the new, individually purchased, filters then set this to false. If you use the old bundled variant, then set this to true.
     *
     * @var bool|null
     */
    protected $bundle;
    /**
     * 
     *
     * @var string|null
     */
    protected $domainOrEmail;
    /**
     * If you use the new, individually purchased, filters then set this to false. If you use the old bundled variant, then set this to true.
     *
     * @return bool|null
     */
    public function getBundle() : ?bool
    {
        return $this->bundle;
    }
    /**
     * If you use the new, individually purchased, filters then set this to false. If you use the old bundled variant, then set this to true.
     *
     * @param bool|null $bundle
     *
     * @return self
     */
    public function setBundle(?bool $bundle) : self
    {
        $this->initialized['bundle'] = true;
        $this->bundle = $bundle;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDomainOrEmail() : ?string
    {
        return $this->domainOrEmail;
    }
    /**
     * 
     *
     * @param string|null $domainOrEmail
     *
     * @return self
     */
    public function setDomainOrEmail(?string $domainOrEmail) : self
    {
        $this->initialized['domainOrEmail'] = true;
        $this->domainOrEmail = $domainOrEmail;
        return $this;
    }
}