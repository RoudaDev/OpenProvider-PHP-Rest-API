<?php

namespace Rouda\OpenProviderAPI\Model;

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
     * @var string
     */
    protected $dns;
    /**
     * 
     *
     * @var string
     */
    protected $dnsRecord;
    /**
     * 
     *
     * @var string
     */
    protected $dnsValue;
    /**
     * 
     *
     * @var string
     */
    protected $domain;
    /**
     * 
     *
     * @var string
     */
    protected $fileContent;
    /**
     * 
     *
     * @var string
     */
    protected $fileContents;
    /**
     * 
     *
     * @var string
     */
    protected $fileLocation;
    /**
     * 
     *
     * @var string
     */
    protected $fileName;
    /**
     * 
     *
     * @var string
     */
    protected $md5;
    /**
     * 
     *
     * @var string[]
     */
    protected $oldCertFormat;
    /**
     * 
     *
     * @var string
     */
    protected $sha1;
    /**
     * 
     *
     * @var string
     */
    protected $sha256;
    /**
     * 
     *
     * @var string
     */
    protected $token;
    /**
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @return string
     */
    public function getDns() : string
    {
        return $this->dns;
    }
    /**
     * 
     *
     * @param string $dns
     *
     * @return self
     */
    public function setDns(string $dns) : self
    {
        $this->initialized['dns'] = true;
        $this->dns = $dns;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDnsRecord() : string
    {
        return $this->dnsRecord;
    }
    /**
     * 
     *
     * @param string $dnsRecord
     *
     * @return self
     */
    public function setDnsRecord(string $dnsRecord) : self
    {
        $this->initialized['dnsRecord'] = true;
        $this->dnsRecord = $dnsRecord;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDnsValue() : string
    {
        return $this->dnsValue;
    }
    /**
     * 
     *
     * @param string $dnsValue
     *
     * @return self
     */
    public function setDnsValue(string $dnsValue) : self
    {
        $this->initialized['dnsValue'] = true;
        $this->dnsValue = $dnsValue;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDomain() : string
    {
        return $this->domain;
    }
    /**
     * 
     *
     * @param string $domain
     *
     * @return self
     */
    public function setDomain(string $domain) : self
    {
        $this->initialized['domain'] = true;
        $this->domain = $domain;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFileContent() : string
    {
        return $this->fileContent;
    }
    /**
     * 
     *
     * @param string $fileContent
     *
     * @return self
     */
    public function setFileContent(string $fileContent) : self
    {
        $this->initialized['fileContent'] = true;
        $this->fileContent = $fileContent;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFileContents() : string
    {
        return $this->fileContents;
    }
    /**
     * 
     *
     * @param string $fileContents
     *
     * @return self
     */
    public function setFileContents(string $fileContents) : self
    {
        $this->initialized['fileContents'] = true;
        $this->fileContents = $fileContents;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFileLocation() : string
    {
        return $this->fileLocation;
    }
    /**
     * 
     *
     * @param string $fileLocation
     *
     * @return self
     */
    public function setFileLocation(string $fileLocation) : self
    {
        $this->initialized['fileLocation'] = true;
        $this->fileLocation = $fileLocation;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFileName() : string
    {
        return $this->fileName;
    }
    /**
     * 
     *
     * @param string $fileName
     *
     * @return self
     */
    public function setFileName(string $fileName) : self
    {
        $this->initialized['fileName'] = true;
        $this->fileName = $fileName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMd5() : string
    {
        return $this->md5;
    }
    /**
     * 
     *
     * @param string $md5
     *
     * @return self
     */
    public function setMd5(string $md5) : self
    {
        $this->initialized['md5'] = true;
        $this->md5 = $md5;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getOldCertFormat() : array
    {
        return $this->oldCertFormat;
    }
    /**
     * 
     *
     * @param string[] $oldCertFormat
     *
     * @return self
     */
    public function setOldCertFormat(array $oldCertFormat) : self
    {
        $this->initialized['oldCertFormat'] = true;
        $this->oldCertFormat = $oldCertFormat;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSha1() : string
    {
        return $this->sha1;
    }
    /**
     * 
     *
     * @param string $sha1
     *
     * @return self
     */
    public function setSha1(string $sha1) : self
    {
        $this->initialized['sha1'] = true;
        $this->sha1 = $sha1;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSha256() : string
    {
        return $this->sha256;
    }
    /**
     * 
     *
     * @param string $sha256
     *
     * @return self
     */
    public function setSha256(string $sha256) : self
    {
        $this->initialized['sha256'] = true;
        $this->sha256 = $sha256;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getToken() : string
    {
        return $this->token;
    }
    /**
     * 
     *
     * @param string $token
     *
     * @return self
     */
    public function setToken(string $token) : self
    {
        $this->initialized['token'] = true;
        $this->token = $token;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
}