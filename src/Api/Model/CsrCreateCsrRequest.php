<?php

namespace Rouda\OpenProvider\Api\Model;

class CsrCreateCsrRequest
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
    protected $bits;
    /**
     * 
     *
     * @var string|null
     */
    protected $commonName;
    /**
     * 
     *
     * @var string|null
     */
    protected $country;
    /**
     * 
     *
     * @var string|null
     */
    protected $email;
    /**
     * 
     *
     * @var string|null
     */
    protected $locality;
    /**
     * 
     *
     * @var string|null
     */
    protected $organization;
    /**
     * Redundant field, can be used as 'sha2'.
     *
     * @var string|null
     */
    protected $signatureHashAlgorithm;
    /**
     * 
     *
     * @var string|null
     */
    protected $state;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $subjectAlternativeName;
    /**
     * 
     *
     * @var string|null
     */
    protected $unit;
    /**
     * 
     *
     * @var bool|null
     */
    protected $withConfig = false;
    /**
     * 
     *
     * @return int|null
     */
    public function getBits() : ?int
    {
        return $this->bits;
    }
    /**
     * 
     *
     * @param int|null $bits
     *
     * @return self
     */
    public function setBits(?int $bits) : self
    {
        $this->initialized['bits'] = true;
        $this->bits = $bits;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCommonName() : ?string
    {
        return $this->commonName;
    }
    /**
     * 
     *
     * @param string|null $commonName
     *
     * @return self
     */
    public function setCommonName(?string $commonName) : self
    {
        $this->initialized['commonName'] = true;
        $this->commonName = $commonName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCountry() : ?string
    {
        return $this->country;
    }
    /**
     * 
     *
     * @param string|null $country
     *
     * @return self
     */
    public function setCountry(?string $country) : self
    {
        $this->initialized['country'] = true;
        $this->country = $country;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email) : self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLocality() : ?string
    {
        return $this->locality;
    }
    /**
     * 
     *
     * @param string|null $locality
     *
     * @return self
     */
    public function setLocality(?string $locality) : self
    {
        $this->initialized['locality'] = true;
        $this->locality = $locality;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOrganization() : ?string
    {
        return $this->organization;
    }
    /**
     * 
     *
     * @param string|null $organization
     *
     * @return self
     */
    public function setOrganization(?string $organization) : self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;
        return $this;
    }
    /**
     * Redundant field, can be used as 'sha2'.
     *
     * @return string|null
     */
    public function getSignatureHashAlgorithm() : ?string
    {
        return $this->signatureHashAlgorithm;
    }
    /**
     * Redundant field, can be used as 'sha2'.
     *
     * @param string|null $signatureHashAlgorithm
     *
     * @return self
     */
    public function setSignatureHashAlgorithm(?string $signatureHashAlgorithm) : self
    {
        $this->initialized['signatureHashAlgorithm'] = true;
        $this->signatureHashAlgorithm = $signatureHashAlgorithm;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getState() : ?string
    {
        return $this->state;
    }
    /**
     * 
     *
     * @param string|null $state
     *
     * @return self
     */
    public function setState(?string $state) : self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getSubjectAlternativeName() : ?array
    {
        return $this->subjectAlternativeName;
    }
    /**
     * 
     *
     * @param string[]|null $subjectAlternativeName
     *
     * @return self
     */
    public function setSubjectAlternativeName(?array $subjectAlternativeName) : self
    {
        $this->initialized['subjectAlternativeName'] = true;
        $this->subjectAlternativeName = $subjectAlternativeName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUnit() : ?string
    {
        return $this->unit;
    }
    /**
     * 
     *
     * @param string|null $unit
     *
     * @return self
     */
    public function setUnit(?string $unit) : self
    {
        $this->initialized['unit'] = true;
        $this->unit = $unit;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getWithConfig() : ?bool
    {
        return $this->withConfig;
    }
    /**
     * 
     *
     * @param bool|null $withConfig
     *
     * @return self
     */
    public function setWithConfig(?bool $withConfig) : self
    {
        $this->initialized['withConfig'] = true;
        $this->withConfig = $withConfig;
        return $this;
    }
}