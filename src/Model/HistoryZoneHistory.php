<?php

namespace Rouda\OpenProviderAPI\Model;

class HistoryZoneHistory
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
    protected $date;
    /**
     * 
     *
     * @var string
     */
    protected $is;
    /**
     * 
     *
     * @var string
     */
    protected $source;
    /**
     * 
     *
     * @var string
     */
    protected $was;
    /**
     * 
     *
     * @return string
     */
    public function getDate() : string
    {
        return $this->date;
    }
    /**
     * 
     *
     * @param string $date
     *
     * @return self
     */
    public function setDate(string $date) : self
    {
        $this->initialized['date'] = true;
        $this->date = $date;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIs() : string
    {
        return $this->is;
    }
    /**
     * 
     *
     * @param string $is
     *
     * @return self
     */
    public function setIs(string $is) : self
    {
        $this->initialized['is'] = true;
        $this->is = $is;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSource() : string
    {
        return $this->source;
    }
    /**
     * 
     *
     * @param string $source
     *
     * @return self
     */
    public function setSource(string $source) : self
    {
        $this->initialized['source'] = true;
        $this->source = $source;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getWas() : string
    {
        return $this->was;
    }
    /**
     * 
     *
     * @param string $was
     *
     * @return self
     */
    public function setWas(string $was) : self
    {
        $this->initialized['was'] = true;
        $this->was = $was;
        return $this;
    }
}