<?php

namespace Rouda\OpenProviderAPI\Model;

class SeDomainCreateDomainRequest
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
     * @var string[]
     */
    protected $aliases;
    /**
     * 
     *
     * @var bool
     */
    protected $bundle;
    /**
     * 
     *
     * @var SeDomainDestination[]
     */
    protected $destinations;
    /**
     * 
     *
     * @var string
     */
    protected $domainName;
    /**
     * 
     *
     * @var SeDomainProducts
     */
    protected $products;
    /**
     * 
     *
     * @return string[]
     */
    public function getAliases() : array
    {
        return $this->aliases;
    }
    /**
     * 
     *
     * @param string[] $aliases
     *
     * @return self
     */
    public function setAliases(array $aliases) : self
    {
        $this->initialized['aliases'] = true;
        $this->aliases = $aliases;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getBundle() : bool
    {
        return $this->bundle;
    }
    /**
     * 
     *
     * @param bool $bundle
     *
     * @return self
     */
    public function setBundle(bool $bundle) : self
    {
        $this->initialized['bundle'] = true;
        $this->bundle = $bundle;
        return $this;
    }
    /**
     * 
     *
     * @return SeDomainDestination[]
     */
    public function getDestinations() : array
    {
        return $this->destinations;
    }
    /**
     * 
     *
     * @param SeDomainDestination[] $destinations
     *
     * @return self
     */
    public function setDestinations(array $destinations) : self
    {
        $this->initialized['destinations'] = true;
        $this->destinations = $destinations;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDomainName() : string
    {
        return $this->domainName;
    }
    /**
     * 
     *
     * @param string $domainName
     *
     * @return self
     */
    public function setDomainName(string $domainName) : self
    {
        $this->initialized['domainName'] = true;
        $this->domainName = $domainName;
        return $this;
    }
    /**
     * 
     *
     * @return SeDomainProducts
     */
    public function getProducts() : SeDomainProducts
    {
        return $this->products;
    }
    /**
     * 
     *
     * @param SeDomainProducts $products
     *
     * @return self
     */
    public function setProducts(SeDomainProducts $products) : self
    {
        $this->initialized['products'] = true;
        $this->products = $products;
        return $this;
    }
}