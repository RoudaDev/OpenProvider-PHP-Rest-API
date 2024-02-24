<?php

namespace Rouda\OpenProviderAPI\Model;

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
     * @var int
     */
    protected $bits;
    /**
     * 
     *
     * @var string
     */
    protected $commonName;
    /**
     * 
     *
     * @var string
     */
    protected $country;
    /**
     * 
     *
     * @var string
     */
    protected $email;
    /**
     * 
     *
     * @var string
     */
    protected $locality;
    /**
     * 
     *
     * @var string
     */
    protected $organization;
    /**
     * Redundant field, can be used as 'sha2'.
     *
     * @var string
     */
    protected $signatureHashAlgorithm;
    /**
     * 
     *
     * @var string
     */
    protected $state;
    /**
     * 
     *
     * @var string[]
     */
    protected $subjectAlternativeName;
    /**
     * 
     *
     * @var string
     */
    protected $unit;
    /**
     * 
     *
     * @var bool
     */
    protected $withConfig = false;
    /**
     * 
     *
     * @return int
     */
    public function getBits() : int
    {
        return $this->bits;
    }
    /**
     * 
     *
     * @param int $bits
     *
     * @return self
     */
    public function setBits(int $bits) : self
    {
        $this->initialized['bits'] = true;
        $this->bits = $bits;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCommonName() : string
    {
        return $this->commonName;
    }
    /**
     * 
     *
     * @param string $commonName
     *
     * @return self
     */
    public function setCommonName(string $commonName) : self
    {
        $this->initialized['commonName'] = true;
        $this->commonName = $commonName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCountry() : string
    {
        return $this->country;
    }
    /**
     * 
     *
     * @param string $country
     *
     * @return self
     */
    public function setCountry(string $country) : self
    {
        $this->initialized['country'] = true;
        $this->country = $country;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLocality() : string
    {
        return $this->locality;
    }
    /**
     * 
     *
     * @param string $locality
     *
     * @return self
     */
    public function setLocality(string $locality) : self
    {
        $this->initialized['locality'] = true;
        $this->locality = $locality;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOrganization() : string
    {
        return $this->organization;
    }
    /**
     * 
     *
     * @param string $organization
     *
     * @return self
     */
    public function setOrganization(string $organization) : self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;
        return $this;
    }
    /**
     * Redundant field, can be used as 'sha2'.
     *
     * @return string
     */
    public function getSignatureHashAlgorithm() : string
    {
        return $this->signatureHashAlgorithm;
    }
    /**
     * Redundant field, can be used as 'sha2'.
     *
     * @param string $signatureHashAlgorithm
     *
     * @return self
     */
    public function setSignatureHashAlgorithm(string $signatureHashAlgorithm) : self
    {
        $this->initialized['signatureHashAlgorithm'] = true;
        $this->signatureHashAlgorithm = $signatureHashAlgorithm;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * 
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getSubjectAlternativeName() : array
    {
        return $this->subjectAlternativeName;
    }
    /**
     * 
     *
     * @param string[] $subjectAlternativeName
     *
     * @return self
     */
    public function setSubjectAlternativeName(array $subjectAlternativeName) : self
    {
        $this->initialized['subjectAlternativeName'] = true;
        $this->subjectAlternativeName = $subjectAlternativeName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUnit() : string
    {
        return $this->unit;
    }
    /**
     * 
     *
     * @param string $unit
     *
     * @return self
     */
    public function setUnit(string $unit) : self
    {
        $this->initialized['unit'] = true;
        $this->unit = $unit;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getWithConfig() : bool
    {
        return $this->withConfig;
    }
    /**
     * 
     *
     * @param bool $withConfig
     *
     * @return self
     */
    public function setWithConfig(bool $withConfig) : self
    {
        $this->initialized['withConfig'] = true;
        $this->withConfig = $withConfig;
        return $this;
    }
}