<?php

namespace Rouda\OpenProviderAPI\Model;

class ProductSslProductLevelPrices
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
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var ProductSslProductPrices[]
     */
    protected $prices;
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
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return ProductSslProductPrices[]
     */
    public function getPrices() : array
    {
        return $this->prices;
    }
    /**
     * 
     *
     * @param ProductSslProductPrices[] $prices
     *
     * @return self
     */
    public function setPrices(array $prices) : self
    {
        $this->initialized['prices'] = true;
        $this->prices = $prices;
        return $this;
    }
}