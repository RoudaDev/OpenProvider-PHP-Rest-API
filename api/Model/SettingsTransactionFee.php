<?php

namespace Rouda\OpenProvider\Api\Model;

class SettingsTransactionFee
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
     * @var float|null
     */
    protected $bank;
    /**
     * 
     *
     * @var float|null
     */
    protected $creditCard;
    /**
     * 
     *
     * @var float|null
     */
    protected $ideal;
    /**
     * 
     *
     * @var float|null
     */
    protected $paypal;
    /**
     * 
     *
     * @var float|null
     */
    protected $westernUnion;
    /**
     * 
     *
     * @var float|null
     */
    protected $yandex;
    /**
     * 
     *
     * @return float|null
     */
    public function getBank() : ?float
    {
        return $this->bank;
    }
    /**
     * 
     *
     * @param float|null $bank
     *
     * @return self
     */
    public function setBank(?float $bank) : self
    {
        $this->initialized['bank'] = true;
        $this->bank = $bank;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getCreditCard() : ?float
    {
        return $this->creditCard;
    }
    /**
     * 
     *
     * @param float|null $creditCard
     *
     * @return self
     */
    public function setCreditCard(?float $creditCard) : self
    {
        $this->initialized['creditCard'] = true;
        $this->creditCard = $creditCard;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getIdeal() : ?float
    {
        return $this->ideal;
    }
    /**
     * 
     *
     * @param float|null $ideal
     *
     * @return self
     */
    public function setIdeal(?float $ideal) : self
    {
        $this->initialized['ideal'] = true;
        $this->ideal = $ideal;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPaypal() : ?float
    {
        return $this->paypal;
    }
    /**
     * 
     *
     * @param float|null $paypal
     *
     * @return self
     */
    public function setPaypal(?float $paypal) : self
    {
        $this->initialized['paypal'] = true;
        $this->paypal = $paypal;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getWesternUnion() : ?float
    {
        return $this->westernUnion;
    }
    /**
     * 
     *
     * @param float|null $westernUnion
     *
     * @return self
     */
    public function setWesternUnion(?float $westernUnion) : self
    {
        $this->initialized['westernUnion'] = true;
        $this->westernUnion = $westernUnion;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getYandex() : ?float
    {
        return $this->yandex;
    }
    /**
     * 
     *
     * @param float|null $yandex
     *
     * @return self
     */
    public function setYandex(?float $yandex) : self
    {
        $this->initialized['yandex'] = true;
        $this->yandex = $yandex;
        return $this;
    }
}