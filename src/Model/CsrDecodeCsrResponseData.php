<?php

namespace Rouda\OpenProviderAPI\Model;

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
     * @var int
     */
    protected $domainNamesCount;
    /**
     * 
     *
     * @var CsrCsrPublicKey
     */
    protected $publicKey;
    /**
     * 
     *
     * @var string
     */
    protected $signatureHashAlgorithm;
    /**
     * 
     *
     * @var CsrCsrSubject
     */
    protected $subject;
    /**
     * 
     *
     * @var string[]
     */
    protected $subjectAlternativeName;
    /**
     * 
     *
     * @return int
     */
    public function getDomainNamesCount() : int
    {
        return $this->domainNamesCount;
    }
    /**
     * 
     *
     * @param int $domainNamesCount
     *
     * @return self
     */
    public function setDomainNamesCount(int $domainNamesCount) : self
    {
        $this->initialized['domainNamesCount'] = true;
        $this->domainNamesCount = $domainNamesCount;
        return $this;
    }
    /**
     * 
     *
     * @return CsrCsrPublicKey
     */
    public function getPublicKey() : CsrCsrPublicKey
    {
        return $this->publicKey;
    }
    /**
     * 
     *
     * @param CsrCsrPublicKey $publicKey
     *
     * @return self
     */
    public function setPublicKey(CsrCsrPublicKey $publicKey) : self
    {
        $this->initialized['publicKey'] = true;
        $this->publicKey = $publicKey;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSignatureHashAlgorithm() : string
    {
        return $this->signatureHashAlgorithm;
    }
    /**
     * 
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
     * @return CsrCsrSubject
     */
    public function getSubject() : CsrCsrSubject
    {
        return $this->subject;
    }
    /**
     * 
     *
     * @param CsrCsrSubject $subject
     *
     * @return self
     */
    public function setSubject(CsrCsrSubject $subject) : self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;
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
}