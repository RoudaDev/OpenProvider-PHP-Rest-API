<?php

namespace Rouda\OpenProviderAPI\Model;

class StatisticsDomainStatisticsByStatus
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
    protected $aCT;
    /**
     * 
     *
     * @var int
     */
    protected $fAI;
    /**
     * 
     *
     * @var int
     */
    protected $nSR;
    /**
     * 
     *
     * @var int
     */
    protected $pEN;
    /**
     * 
     *
     * @var int
     */
    protected $rEJ;
    /**
     * 
     *
     * @var int
     */
    protected $rEQ;
    /**
     * 
     *
     * @return int
     */
    public function getACT() : int
    {
        return $this->aCT;
    }
    /**
     * 
     *
     * @param int $aCT
     *
     * @return self
     */
    public function setACT(int $aCT) : self
    {
        $this->initialized['aCT'] = true;
        $this->aCT = $aCT;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFAI() : int
    {
        return $this->fAI;
    }
    /**
     * 
     *
     * @param int $fAI
     *
     * @return self
     */
    public function setFAI(int $fAI) : self
    {
        $this->initialized['fAI'] = true;
        $this->fAI = $fAI;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNSR() : int
    {
        return $this->nSR;
    }
    /**
     * 
     *
     * @param int $nSR
     *
     * @return self
     */
    public function setNSR(int $nSR) : self
    {
        $this->initialized['nSR'] = true;
        $this->nSR = $nSR;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPEN() : int
    {
        return $this->pEN;
    }
    /**
     * 
     *
     * @param int $pEN
     *
     * @return self
     */
    public function setPEN(int $pEN) : self
    {
        $this->initialized['pEN'] = true;
        $this->pEN = $pEN;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getREJ() : int
    {
        return $this->rEJ;
    }
    /**
     * 
     *
     * @param int $rEJ
     *
     * @return self
     */
    public function setREJ(int $rEJ) : self
    {
        $this->initialized['rEJ'] = true;
        $this->rEJ = $rEJ;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getREQ() : int
    {
        return $this->rEQ;
    }
    /**
     * 
     *
     * @param int $rEQ
     *
     * @return self
     */
    public function setREQ(int $rEQ) : self
    {
        $this->initialized['rEQ'] = true;
        $this->rEQ = $rEQ;
        return $this;
    }
}