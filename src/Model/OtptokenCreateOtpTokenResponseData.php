<?php

namespace Rouda\OpenProviderAPI\Model;

class OtptokenCreateOtpTokenResponseData
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
    protected $expireAt;
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
    protected $uri;
    /**
     * 
     *
     * @return string
     */
    public function getExpireAt() : string
    {
        return $this->expireAt;
    }
    /**
     * 
     *
     * @param string $expireAt
     *
     * @return self
     */
    public function setExpireAt(string $expireAt) : self
    {
        $this->initialized['expireAt'] = true;
        $this->expireAt = $expireAt;
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
    public function getUri() : string
    {
        return $this->uri;
    }
    /**
     * 
     *
     * @param string $uri
     *
     * @return self
     */
    public function setUri(string $uri) : self
    {
        $this->initialized['uri'] = true;
        $this->uri = $uri;
        return $this;
    }
}