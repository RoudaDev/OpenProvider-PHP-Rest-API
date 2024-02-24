<?php

namespace Rouda\OpenProviderAPI\Model;

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
     * @var bool
     */
    protected $archiving;
    /**
     * 
     *
     * @var bool
     */
    protected $incoming;
    /**
     * 
     *
     * @var bool
     */
    protected $outgoing;
    /**
     * 
     *
     * @return bool
     */
    public function getArchiving() : bool
    {
        return $this->archiving;
    }
    /**
     * 
     *
     * @param bool $archiving
     *
     * @return self
     */
    public function setArchiving(bool $archiving) : self
    {
        $this->initialized['archiving'] = true;
        $this->archiving = $archiving;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIncoming() : bool
    {
        return $this->incoming;
    }
    /**
     * 
     *
     * @param bool $incoming
     *
     * @return self
     */
    public function setIncoming(bool $incoming) : self
    {
        $this->initialized['incoming'] = true;
        $this->incoming = $incoming;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getOutgoing() : bool
    {
        return $this->outgoing;
    }
    /**
     * 
     *
     * @param bool $outgoing
     *
     * @return self
     */
    public function setOutgoing(bool $outgoing) : self
    {
        $this->initialized['outgoing'] = true;
        $this->outgoing = $outgoing;
        return $this;
    }
}