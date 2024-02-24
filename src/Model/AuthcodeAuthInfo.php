<?php

namespace Rouda\OpenProviderAPI\Model;

class AuthcodeAuthInfo
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
    protected $pw;
    /**
     * 
     *
     * @return string
     */
    public function getPw() : string
    {
        return $this->pw;
    }
    /**
     * 
     *
     * @param string $pw
     *
     * @return self
     */
    public function setPw(string $pw) : self
    {
        $this->initialized['pw'] = true;
        $this->pw = $pw;
        return $this;
    }
}