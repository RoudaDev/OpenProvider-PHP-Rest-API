<?php

namespace Rouda\OpenProviderAPI\Model;

class TldLevelPrice
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
     * @var int
     */
    protected $level;
    /**
     * 
     *
     * @var TldPrice
     */
    protected $price;
    /**
     * 
     *
     * @return int
     */
    public function getLevel() : int
    {
        return $this->level;
    }
    /**
     * 
     *
     * @param int $level
     *
     * @return self
     */
    public function setLevel(int $level) : self
    {
        $this->initialized['level'] = true;
        $this->level = $level;
        return $this;
    }
    /**
     * 
     *
     * @return TldPrice
     */
    public function getPrice() : TldPrice
    {
        return $this->price;
    }
    /**
     * 
     *
     * @param TldPrice $price
     *
     * @return self
     */
    public function setPrice(TldPrice $price) : self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
}