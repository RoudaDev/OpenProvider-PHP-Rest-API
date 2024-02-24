<?php

namespace Rouda\OpenProviderAPI\Model;

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
     * @var string
     */
    protected $command;
    /**
     * 
     *
     * @var string
     */
    protected $config;
    /**
     * 
     *
     * @var string
     */
    protected $configPath;
    /**
     * 
     *
     * @var string
     */
    protected $csr;
    /**
     * 
     *
     * @var string
     */
    protected $key;
    /**
     * 
     *
     * @var string
     */
    protected $keyPath;
    /**
     * 
     *
     * @return string
     */
    public function getCommand() : string
    {
        return $this->command;
    }
    /**
     * 
     *
     * @param string $command
     *
     * @return self
     */
    public function setCommand(string $command) : self
    {
        $this->initialized['command'] = true;
        $this->command = $command;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getConfig() : string
    {
        return $this->config;
    }
    /**
     * 
     *
     * @param string $config
     *
     * @return self
     */
    public function setConfig(string $config) : self
    {
        $this->initialized['config'] = true;
        $this->config = $config;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getConfigPath() : string
    {
        return $this->configPath;
    }
    /**
     * 
     *
     * @param string $configPath
     *
     * @return self
     */
    public function setConfigPath(string $configPath) : self
    {
        $this->initialized['configPath'] = true;
        $this->configPath = $configPath;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCsr() : string
    {
        return $this->csr;
    }
    /**
     * 
     *
     * @param string $csr
     *
     * @return self
     */
    public function setCsr(string $csr) : self
    {
        $this->initialized['csr'] = true;
        $this->csr = $csr;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKey() : string
    {
        return $this->key;
    }
    /**
     * 
     *
     * @param string $key
     *
     * @return self
     */
    public function setKey(string $key) : self
    {
        $this->initialized['key'] = true;
        $this->key = $key;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKeyPath() : string
    {
        return $this->keyPath;
    }
    /**
     * 
     *
     * @param string $keyPath
     *
     * @return self
     */
    public function setKeyPath(string $keyPath) : self
    {
        $this->initialized['keyPath'] = true;
        $this->keyPath = $keyPath;
        return $this;
    }
}