<?php

namespace Rouda\OpenProvider\Api\Model;

class OrderSslOrderAdditionalData
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
     * @var string|null
     */
    protected $dns;
    /**
     * 
     *
     * @var string|null
     */
    protected $dnsRecord;
    /**
     * 
     *
     * @var string|null
     */
    protected $dnsValue;
    /**
     * 
     *
     * @var string|null
     */
    protected $domain;
    /**
     * 
     *
     * @var string|null
     */
    protected $fileContent;
    /**
     * 
     *
     * @var string|null
     */
    protected $fileContents;
    /**
     * 
     *
     * @var string|null
     */
    protected $fileLocation;
    /**
     * 
     *
     * @var string|null
     */
    protected $fileName;
    /**
     * 
     *
     * @var string|null
     */
    protected $md5;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $oldCertFormat;
    /**
     * 
     *
     * @var string|null
     */
    protected $sha1;
    /**
     * 
     *
     * @var string|null
     */
    protected $sha256;
    /**
     * 
     *
     * @var string|null
     */
    protected $token;
    /**
     * 
     *
     * @var string|null
     */
    protected $url;
    /**
     * 
     *
     * @return string|null
     */
    public function getDns() : ?string
    {
        return $this->dns;
    }
    /**
     * 
     *
     * @param string|null $dns
     *
     * @return self
     */
    public function setDns(?string $dns) : self
    {
        $this->initialized['dns'] = true;
        $this->dns = $dns;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDnsRecord() : ?string
    {
        return $this->dnsRecord;
    }
    /**
     * 
     *
     * @param string|null $dnsRecord
     *
     * @return self
     */
    public function setDnsRecord(?string $dnsRecord) : self
    {
        $this->initialized['dnsRecord'] = true;
        $this->dnsRecord = $dnsRecord;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDnsValue() : ?string
    {
        return $this->dnsValue;
    }
    /**
     * 
     *
     * @param string|null $dnsValue
     *
     * @return self
     */
    public function setDnsValue(?string $dnsValue) : self
    {
        $this->initialized['dnsValue'] = true;
        $this->dnsValue = $dnsValue;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDomain() : ?string
    {
        return $this->domain;
    }
    /**
     * 
     *
     * @param string|null $domain
     *
     * @return self
     */
    public function setDomain(?string $domain) : self
    {
        $this->initialized['domain'] = true;
        $this->domain = $domain;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFileContent() : ?string
    {
        return $this->fileContent;
    }
    /**
     * 
     *
     * @param string|null $fileContent
     *
     * @return self
     */
    public function setFileContent(?string $fileContent) : self
    {
        $this->initialized['fileContent'] = true;
        $this->fileContent = $fileContent;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFileContents() : ?string
    {
        return $this->fileContents;
    }
    /**
     * 
     *
     * @param string|null $fileContents
     *
     * @return self
     */
    public function setFileContents(?string $fileContents) : self
    {
        $this->initialized['fileContents'] = true;
        $this->fileContents = $fileContents;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFileLocation() : ?string
    {
        return $this->fileLocation;
    }
    /**
     * 
     *
     * @param string|null $fileLocation
     *
     * @return self
     */
    public function setFileLocation(?string $fileLocation) : self
    {
        $this->initialized['fileLocation'] = true;
        $this->fileLocation = $fileLocation;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFileName() : ?string
    {
        return $this->fileName;
    }
    /**
     * 
     *
     * @param string|null $fileName
     *
     * @return self
     */
    public function setFileName(?string $fileName) : self
    {
        $this->initialized['fileName'] = true;
        $this->fileName = $fileName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMd5() : ?string
    {
        return $this->md5;
    }
    /**
     * 
     *
     * @param string|null $md5
     *
     * @return self
     */
    public function setMd5(?string $md5) : self
    {
        $this->initialized['md5'] = true;
        $this->md5 = $md5;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getOldCertFormat() : ?array
    {
        return $this->oldCertFormat;
    }
    /**
     * 
     *
     * @param string[]|null $oldCertFormat
     *
     * @return self
     */
    public function setOldCertFormat(?array $oldCertFormat) : self
    {
        $this->initialized['oldCertFormat'] = true;
        $this->oldCertFormat = $oldCertFormat;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSha1() : ?string
    {
        return $this->sha1;
    }
    /**
     * 
     *
     * @param string|null $sha1
     *
     * @return self
     */
    public function setSha1(?string $sha1) : self
    {
        $this->initialized['sha1'] = true;
        $this->sha1 = $sha1;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSha256() : ?string
    {
        return $this->sha256;
    }
    /**
     * 
     *
     * @param string|null $sha256
     *
     * @return self
     */
    public function setSha256(?string $sha256) : self
    {
        $this->initialized['sha256'] = true;
        $this->sha256 = $sha256;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getToken() : ?string
    {
        return $this->token;
    }
    /**
     * 
     *
     * @param string|null $token
     *
     * @return self
     */
    public function setToken(?string $token) : self
    {
        $this->initialized['token'] = true;
        $this->token = $token;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUrl() : ?string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string|null $url
     *
     * @return self
     */
    public function setUrl(?string $url) : self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
}