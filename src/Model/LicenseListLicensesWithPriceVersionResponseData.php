<?php

namespace Rouda\OpenProviderAPI\Model;

class LicenseListLicensesWithPriceVersionResponseData
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
     * @var LicenseLicenseWithPriceVersion[]
     */
    protected $results;
    /**
     * 
     *
     * @var int
     */
    protected $total;
    /**
     * 
     *
     * @return LicenseLicenseWithPriceVersion[]
     */
    public function getResults() : array
    {
        return $this->results;
    }
    /**
     * 
     *
     * @param LicenseLicenseWithPriceVersion[] $results
     *
     * @return self
     */
    public function setResults(array $results) : self
    {
        $this->initialized['results'] = true;
        $this->results = $results;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTotal() : int
    {
        return $this->total;
    }
    /**
     * 
     *
     * @param int $total
     *
     * @return self
     */
    public function setTotal(int $total) : self
    {
        $this->initialized['total'] = true;
        $this->total = $total;
        return $this;
    }
}