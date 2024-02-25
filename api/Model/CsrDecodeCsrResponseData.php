<?php

namespace Rouda\OpenProvider\Api\Model;

class CsrDecodeCsrResponseData
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
    protected $domainNamesCount;
    /**
     * 
     *
     * @var CsrCsrPublicKey|null
     */
    protected $publicKey;
    /**
     * 
     *
     * @var string|null
     */
    protected $signatureHashAlgorithm;
    /**
     * 
     *
     * @var CsrCsrSubject|null
     */
    protected $subject;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $subjectAlternativeName;
    /**
     * 
     *
     * @return int|null
     */
    public function getDomainNamesCount() : ?int
    {
        return $this->domainNamesCount;
    }
    /**
     * 
     *
     * @param int|null $domainNamesCount
     *
     * @return self
     */
    public function setDomainNamesCount(?int $domainNamesCount) : self
    {
        $this->initialized['domainNamesCount'] = true;
        $this->domainNamesCount = $domainNamesCount;
        return $this;
    }
    /**
     * 
     *
     * @return CsrCsrPublicKey|null
     */
    public function getPublicKey() : ?CsrCsrPublicKey
    {
        return $this->publicKey;
    }
    /**
     * 
     *
     * @param CsrCsrPublicKey|null $publicKey
     *
     * @return self
     */
    public function setPublicKey(?CsrCsrPublicKey $publicKey) : self
    {
        $this->initialized['publicKey'] = true;
        $this->publicKey = $publicKey;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSignatureHashAlgorithm() : ?string
    {
        return $this->signatureHashAlgorithm;
    }
    /**
     * 
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
     * @return CsrCsrSubject|null
     */
    public function getSubject() : ?CsrCsrSubject
    {
        return $this->subject;
    }
    /**
     * 
     *
     * @param CsrCsrSubject|null $subject
     *
     * @return self
     */
    public function setSubject(?CsrCsrSubject $subject) : self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;
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
}