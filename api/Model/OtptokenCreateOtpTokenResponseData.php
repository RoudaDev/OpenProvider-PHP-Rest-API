<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var string|null
     */
    protected $expireAt;
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
    protected $uri;
    /**
     * 
     *
     * @return string|null
     */
    public function getExpireAt() : ?string
    {
        return $this->expireAt;
    }
    /**
     * 
     *
     * @param string|null $expireAt
     *
     * @return self
     */
    public function setExpireAt(?string $expireAt) : self
    {
        $this->initialized['expireAt'] = true;
        $this->expireAt = $expireAt;
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
    public function getUri() : ?string
    {
        return $this->uri;
    }
    /**
     * 
     *
     * @param string|null $uri
     *
     * @return self
     */
    public function setUri(?string $uri) : self
    {
        $this->initialized['uri'] = true;
        $this->uri = $uri;
        return $this;
    }
}