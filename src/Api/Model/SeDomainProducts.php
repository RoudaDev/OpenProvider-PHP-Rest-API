<?php

namespace Rouda\OpenProvider\Api\Model;

class SeDomainProducts
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
     * @var bool|null
     */
    protected $archiving;
    /**
     * 
     *
     * @var bool|null
     */
    protected $incoming;
    /**
     * 
     *
     * @var bool|null
     */
    protected $outgoing;
    /**
     * 
     *
     * @return bool|null
     */
    public function getArchiving() : ?bool
    {
        return $this->archiving;
    }
    /**
     * 
     *
     * @param bool|null $archiving
     *
     * @return self
     */
    public function setArchiving(?bool $archiving) : self
    {
        $this->initialized['archiving'] = true;
        $this->archiving = $archiving;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIncoming() : ?bool
    {
        return $this->incoming;
    }
    /**
     * 
     *
     * @param bool|null $incoming
     *
     * @return self
     */
    public function setIncoming(?bool $incoming) : self
    {
        $this->initialized['incoming'] = true;
        $this->incoming = $incoming;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getOutgoing() : ?bool
    {
        return $this->outgoing;
    }
    /**
     * 
     *
     * @param bool|null $outgoing
     *
     * @return self
     */
    public function setOutgoing(?bool $outgoing) : self
    {
        $this->initialized['outgoing'] = true;
        $this->outgoing = $outgoing;
        return $this;
    }
}