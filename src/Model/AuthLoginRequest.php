<?php

namespace Rouda\OpenProviderAPI\Model;

class AuthLoginRequest
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
    protected $ip;
    /**
     * 
     *
     * @var string
     */
    protected $password;
    /**
     * 
     *
     * @var string
     */
    protected $username;
    /**
     * 
     *
     * @return string
     */
    public function getIp() : string
    {
        return $this->ip;
    }
    /**
     * 
     *
     * @param string $ip
     *
     * @return self
     */
    public function setIp(string $ip) : self
    {
        $this->initialized['ip'] = true;
        $this->ip = $ip;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPassword() : string
    {
        return $this->password;
    }
    /**
     * 
     *
     * @param string $password
     *
     * @return self
     */
    public function setPassword(string $password) : self
    {
        $this->initialized['password'] = true;
        $this->password = $password;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUsername() : string
    {
        return $this->username;
    }
    /**
     * 
     *
     * @param string $username
     *
     * @return self
     */
    public function setUsername(string $username) : self
    {
        $this->initialized['username'] = true;
        $this->username = $username;
        return $this;
    }
}