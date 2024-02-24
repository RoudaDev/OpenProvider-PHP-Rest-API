<?php

namespace Rouda\OpenProviderAPI\Model;

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
     * @var float
     */
    protected $bank;
    /**
     * 
     *
     * @var float
     */
    protected $creditCard;
    /**
     * 
     *
     * @var float
     */
    protected $ideal;
    /**
     * 
     *
     * @var float
     */
    protected $paypal;
    /**
     * 
     *
     * @var float
     */
    protected $westernUnion;
    /**
     * 
     *
     * @var float
     */
    protected $yandex;
    /**
     * 
     *
     * @return float
     */
    public function getBank() : float
    {
        return $this->bank;
    }
    /**
     * 
     *
     * @param float $bank
     *
     * @return self
     */
    public function setBank(float $bank) : self
    {
        $this->initialized['bank'] = true;
        $this->bank = $bank;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getCreditCard() : float
    {
        return $this->creditCard;
    }
    /**
     * 
     *
     * @param float $creditCard
     *
     * @return self
     */
    public function setCreditCard(float $creditCard) : self
    {
        $this->initialized['creditCard'] = true;
        $this->creditCard = $creditCard;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getIdeal() : float
    {
        return $this->ideal;
    }
    /**
     * 
     *
     * @param float $ideal
     *
     * @return self
     */
    public function setIdeal(float $ideal) : self
    {
        $this->initialized['ideal'] = true;
        $this->ideal = $ideal;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPaypal() : float
    {
        return $this->paypal;
    }
    /**
     * 
     *
     * @param float $paypal
     *
     * @return self
     */
    public function setPaypal(float $paypal) : self
    {
        $this->initialized['paypal'] = true;
        $this->paypal = $paypal;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getWesternUnion() : float
    {
        return $this->westernUnion;
    }
    /**
     * 
     *
     * @param float $westernUnion
     *
     * @return self
     */
    public function setWesternUnion(float $westernUnion) : self
    {
        $this->initialized['westernUnion'] = true;
        $this->westernUnion = $westernUnion;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getYandex() : float
    {
        return $this->yandex;
    }
    /**
     * 
     *
     * @param float $yandex
     *
     * @return self
     */
    public function setYandex(float $yandex) : self
    {
        $this->initialized['yandex'] = true;
        $this->yandex = $yandex;
        return $this;
    }
}