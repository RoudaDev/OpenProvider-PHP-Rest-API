<?php

namespace Rouda\OpenProvider\Api\Model;

class AuthLoginResponseData
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
    protected $resellerId;
    /**
     * 
     *
     * @var string|null
     */
    protected $token;
    /**
     * 
     *
     * @return int|null
     */
    public function getResellerId() : ?int
    {
        return $this->resellerId;
    }
    /**
     * 
     *
     * @param int|null $resellerId
     *
     * @return self
     */
    public function setResellerId(?int $resellerId) : self
    {
        $this->initialized['resellerId'] = true;
        $this->resellerId = $resellerId;
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
}