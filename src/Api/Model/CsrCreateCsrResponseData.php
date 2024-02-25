<?php

namespace Rouda\OpenProvider\Api\Model;

class CsrCreateCsrResponseData
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
    protected $command;
    /**
     * 
     *
     * @var string|null
     */
    protected $config;
    /**
     * 
     *
     * @var string|null
     */
    protected $configPath;
    /**
     * 
     *
     * @var string|null
     */
    protected $csr;
    /**
     * 
     *
     * @var string|null
     */
    protected $key;
    /**
     * 
     *
     * @var string|null
     */
    protected $keyPath;
    /**
     * 
     *
     * @return string|null
     */
    public function getCommand() : ?string
    {
        return $this->command;
    }
    /**
     * 
     *
     * @param string|null $command
     *
     * @return self
     */
    public function setCommand(?string $command) : self
    {
        $this->initialized['command'] = true;
        $this->command = $command;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getConfig() : ?string
    {
        return $this->config;
    }
    /**
     * 
     *
     * @param string|null $config
     *
     * @return self
     */
    public function setConfig(?string $config) : self
    {
        $this->initialized['config'] = true;
        $this->config = $config;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getConfigPath() : ?string
    {
        return $this->configPath;
    }
    /**
     * 
     *
     * @param string|null $configPath
     *
     * @return self
     */
    public function setConfigPath(?string $configPath) : self
    {
        $this->initialized['configPath'] = true;
        $this->configPath = $configPath;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCsr() : ?string
    {
        return $this->csr;
    }
    /**
     * 
     *
     * @param string|null $csr
     *
     * @return self
     */
    public function setCsr(?string $csr) : self
    {
        $this->initialized['csr'] = true;
        $this->csr = $csr;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getKey() : ?string
    {
        return $this->key;
    }
    /**
     * 
     *
     * @param string|null $key
     *
     * @return self
     */
    public function setKey(?string $key) : self
    {
        $this->initialized['key'] = true;
        $this->key = $key;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getKeyPath() : ?string
    {
        return $this->keyPath;
    }
    /**
     * 
     *
     * @param string|null $keyPath
     *
     * @return self
     */
    public function setKeyPath(?string $keyPath) : self
    {
        $this->initialized['keyPath'] = true;
        $this->keyPath = $keyPath;
        return $this;
    }
}