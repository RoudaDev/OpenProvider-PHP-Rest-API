<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var string|null
     */
    protected $pw;
    /**
     * 
     *
     * @return string|null
     */
    public function getPw() : ?string
    {
        return $this->pw;
    }
    /**
     * 
     *
     * @param string|null $pw
     *
     * @return self
     */
    public function setPw(?string $pw) : self
    {
        $this->initialized['pw'] = true;
        $this->pw = $pw;
        return $this;
    }
}