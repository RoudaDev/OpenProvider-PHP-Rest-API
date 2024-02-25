<?php

namespace Rouda\OpenProvider\Api\Model;

class ZonePremiumDnsData
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
     * @var ZoneSectigoData|null
     */
    protected $sectigo;
    /**
     * 
     *
     * @return ZoneSectigoData|null
     */
    public function getSectigo() : ?ZoneSectigoData
    {
        return $this->sectigo;
    }
    /**
     * 
     *
     * @param ZoneSectigoData|null $sectigo
     *
     * @return self
     */
    public function setSectigo(?ZoneSectigoData $sectigo) : self
    {
        $this->initialized['sectigo'] = true;
        $this->sectigo = $sectigo;
        return $this;
    }
}