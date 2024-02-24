<?php

namespace Rouda\OpenProviderAPI\Model;

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
     * @var ZoneSectigoData
     */
    protected $sectigo;
    /**
     * 
     *
     * @return ZoneSectigoData
     */
    public function getSectigo() : ZoneSectigoData
    {
        return $this->sectigo;
    }
    /**
     * 
     *
     * @param ZoneSectigoData $sectigo
     *
     * @return self
     */
    public function setSectigo(ZoneSectigoData $sectigo) : self
    {
        $this->initialized['sectigo'] = true;
        $this->sectigo = $sectigo;
        return $this;
    }
}