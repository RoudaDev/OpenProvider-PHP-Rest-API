<?php

namespace Rouda\OpenProvider\Api\Model;

class StatisticsSslStatisticsByStatus
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
     * @var int|null
     */
    protected $aCT;
    /**
     * 
     *
     * @var int|null
     */
    protected $fAI;
    /**
     * 
     *
     * @var int|null
     */
    protected $nSR;
    /**
     * 
     *
     * @var int|null
     */
    protected $pEN;
    /**
     * 
     *
     * @var int|null
     */
    protected $rEJ;
    /**
     * 
     *
     * @var int|null
     */
    protected $rEQ;
    /**
     * 
     *
     * @return int|null
     */
    public function getACT() : ?int
    {
        return $this->aCT;
    }
    /**
     * 
     *
     * @param int|null $aCT
     *
     * @return self
     */
    public function setACT(?int $aCT) : self
    {
        $this->initialized['aCT'] = true;
        $this->aCT = $aCT;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFAI() : ?int
    {
        return $this->fAI;
    }
    /**
     * 
     *
     * @param int|null $fAI
     *
     * @return self
     */
    public function setFAI(?int $fAI) : self
    {
        $this->initialized['fAI'] = true;
        $this->fAI = $fAI;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getNSR() : ?int
    {
        return $this->nSR;
    }
    /**
     * 
     *
     * @param int|null $nSR
     *
     * @return self
     */
    public function setNSR(?int $nSR) : self
    {
        $this->initialized['nSR'] = true;
        $this->nSR = $nSR;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPEN() : ?int
    {
        return $this->pEN;
    }
    /**
     * 
     *
     * @param int|null $pEN
     *
     * @return self
     */
    public function setPEN(?int $pEN) : self
    {
        $this->initialized['pEN'] = true;
        $this->pEN = $pEN;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getREJ() : ?int
    {
        return $this->rEJ;
    }
    /**
     * 
     *
     * @param int|null $rEJ
     *
     * @return self
     */
    public function setREJ(?int $rEJ) : self
    {
        $this->initialized['rEJ'] = true;
        $this->rEJ = $rEJ;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getREQ() : ?int
    {
        return $this->rEQ;
    }
    /**
     * 
     *
     * @param int|null $rEQ
     *
     * @return self
     */
    public function setREQ(?int $rEQ) : self
    {
        $this->initialized['rEQ'] = true;
        $this->rEQ = $rEQ;
        return $this;
    }
}