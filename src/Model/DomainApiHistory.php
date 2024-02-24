<?php

namespace Rouda\OpenProviderAPI\Model;

class DomainApiHistory
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
    protected $cmd;
    /**
     * 
     *
     * @var string
     */
    protected $createdAt;
    /**
     * 
     *
     * @var int
     */
    protected $domainId;
    /**
     * 
     *
     * @var string
     */
    protected $in;
    /**
     * 
     *
     * @var string
     */
    protected $out;
    /**
     * 
     *
     * @return string
     */
    public function getCmd() : string
    {
        return $this->cmd;
    }
    /**
     * 
     *
     * @param string $cmd
     *
     * @return self
     */
    public function setCmd(string $cmd) : self
    {
        $this->initialized['cmd'] = true;
        $this->cmd = $cmd;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCreatedAt() : string
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDomainId() : int
    {
        return $this->domainId;
    }
    /**
     * 
     *
     * @param int $domainId
     *
     * @return self
     */
    public function setDomainId(int $domainId) : self
    {
        $this->initialized['domainId'] = true;
        $this->domainId = $domainId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIn() : string
    {
        return $this->in;
    }
    /**
     * 
     *
     * @param string $in
     *
     * @return self
     */
    public function setIn(string $in) : self
    {
        $this->initialized['in'] = true;
        $this->in = $in;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOut() : string
    {
        return $this->out;
    }
    /**
     * 
     *
     * @param string $out
     *
     * @return self
     */
    public function setOut(string $out) : self
    {
        $this->initialized['out'] = true;
        $this->out = $out;
        return $this;
    }
}