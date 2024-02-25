<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var string|null
     */
    protected $cmd;
    /**
     * 
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * 
     *
     * @var int|null
     */
    protected $domainId;
    /**
     * 
     *
     * @var string|null
     */
    protected $in;
    /**
     * 
     *
     * @var string|null
     */
    protected $out;
    /**
     * 
     *
     * @return string|null
     */
    public function getCmd() : ?string
    {
        return $this->cmd;
    }
    /**
     * 
     *
     * @param string|null $cmd
     *
     * @return self
     */
    public function setCmd(?string $cmd) : self
    {
        $this->initialized['cmd'] = true;
        $this->cmd = $cmd;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCreatedAt() : ?string
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param string|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?string $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDomainId() : ?int
    {
        return $this->domainId;
    }
    /**
     * 
     *
     * @param int|null $domainId
     *
     * @return self
     */
    public function setDomainId(?int $domainId) : self
    {
        $this->initialized['domainId'] = true;
        $this->domainId = $domainId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getIn() : ?string
    {
        return $this->in;
    }
    /**
     * 
     *
     * @param string|null $in
     *
     * @return self
     */
    public function setIn(?string $in) : self
    {
        $this->initialized['in'] = true;
        $this->in = $in;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOut() : ?string
    {
        return $this->out;
    }
    /**
     * 
     *
     * @param string|null $out
     *
     * @return self
     */
    public function setOut(?string $out) : self
    {
        $this->initialized['out'] = true;
        $this->out = $out;
        return $this;
    }
}