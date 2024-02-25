<?php

namespace Rouda\OpenProvider\Api\Model;

class SettingsPaymentMethodLimit
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
    protected $aUD;
    /**
     * 
     *
     * @var float|null
     */
    protected $bGN;
    /**
     * 
     *
     * @var float|null
     */
    protected $bRL;
    /**
     * 
     *
     * @var float|null
     */
    protected $cAD;
    /**
     * 
     *
     * @var float|null
     */
    protected $cHF;
    /**
     * 
     *
     * @var float|null
     */
    protected $cNY;
    /**
     * 
     *
     * @var float|null
     */
    protected $cZK;
    /**
     * 
     *
     * @var float|null
     */
    protected $dKK;
    /**
     * 
     *
     * @var float|null
     */
    protected $eEK;
    /**
     * 
     *
     * @var float|null
     */
    protected $eUR;
    /**
     * 
     *
     * @var float|null
     */
    protected $gBP;
    /**
     * 
     *
     * @var float|null
     */
    protected $gHS;
    /**
     * 
     *
     * @var float|null
     */
    protected $hKD;
    /**
     * 
     *
     * @var float|null
     */
    protected $hRK;
    /**
     * 
     *
     * @var float|null
     */
    protected $hUF;
    /**
     * 
     *
     * @var float|null
     */
    protected $iDR;
    /**
     * 
     *
     * @var float|null
     */
    protected $iLS;
    /**
     * 
     *
     * @var float|null
     */
    protected $iNR;
    /**
     * 
     *
     * @var float|null
     */
    protected $jPY;
    /**
     * 
     *
     * @var float|null
     */
    protected $kRW;
    /**
     * 
     *
     * @var float|null
     */
    protected $lKR;
    /**
     * 
     *
     * @var float|null
     */
    protected $lTL;
    /**
     * 
     *
     * @var float|null
     */
    protected $lVL;
    /**
     * 
     *
     * @var float|null
     */
    protected $mXN;
    /**
     * 
     *
     * @var float|null
     */
    protected $mYR;
    /**
     * 
     *
     * @var float|null
     */
    protected $nOK;
    /**
     * 
     *
     * @var float|null
     */
    protected $nZD;
    /**
     * 
     *
     * @var float|null
     */
    protected $pHP;
    /**
     * 
     *
     * @var float|null
     */
    protected $pLN;
    /**
     * 
     *
     * @var float|null
     */
    protected $rON;
    /**
     * 
     *
     * @var float|null
     */
    protected $rUB;
    /**
     * 
     *
     * @var float|null
     */
    protected $sEK;
    /**
     * 
     *
     * @var float|null
     */
    protected $sGD;
    /**
     * 
     *
     * @var float|null
     */
    protected $tHB;
    /**
     * 
     *
     * @var float|null
     */
    protected $tRY;
    /**
     * 
     *
     * @var float|null
     */
    protected $uSD;
    /**
     * 
     *
     * @var float|null
     */
    protected $zAR;
    /**
     * 
     *
     * @return float|null
     */
    public function getAUD() : ?float
    {
        return $this->aUD;
    }
    /**
     * 
     *
     * @param float|null $aUD
     *
     * @return self
     */
    public function setAUD(?float $aUD) : self
    {
        $this->initialized['aUD'] = true;
        $this->aUD = $aUD;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getBGN() : ?float
    {
        return $this->bGN;
    }
    /**
     * 
     *
     * @param float|null $bGN
     *
     * @return self
     */
    public function setBGN(?float $bGN) : self
    {
        $this->initialized['bGN'] = true;
        $this->bGN = $bGN;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getBRL() : ?float
    {
        return $this->bRL;
    }
    /**
     * 
     *
     * @param float|null $bRL
     *
     * @return self
     */
    public function setBRL(?float $bRL) : self
    {
        $this->initialized['bRL'] = true;
        $this->bRL = $bRL;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getCAD() : ?float
    {
        return $this->cAD;
    }
    /**
     * 
     *
     * @param float|null $cAD
     *
     * @return self
     */
    public function setCAD(?float $cAD) : self
    {
        $this->initialized['cAD'] = true;
        $this->cAD = $cAD;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getCHF() : ?float
    {
        return $this->cHF;
    }
    /**
     * 
     *
     * @param float|null $cHF
     *
     * @return self
     */
    public function setCHF(?float $cHF) : self
    {
        $this->initialized['cHF'] = true;
        $this->cHF = $cHF;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getCNY() : ?float
    {
        return $this->cNY;
    }
    /**
     * 
     *
     * @param float|null $cNY
     *
     * @return self
     */
    public function setCNY(?float $cNY) : self
    {
        $this->initialized['cNY'] = true;
        $this->cNY = $cNY;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getCZK() : ?float
    {
        return $this->cZK;
    }
    /**
     * 
     *
     * @param float|null $cZK
     *
     * @return self
     */
    public function setCZK(?float $cZK) : self
    {
        $this->initialized['cZK'] = true;
        $this->cZK = $cZK;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getDKK() : ?float
    {
        return $this->dKK;
    }
    /**
     * 
     *
     * @param float|null $dKK
     *
     * @return self
     */
    public function setDKK(?float $dKK) : self
    {
        $this->initialized['dKK'] = true;
        $this->dKK = $dKK;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getEEK() : ?float
    {
        return $this->eEK;
    }
    /**
     * 
     *
     * @param float|null $eEK
     *
     * @return self
     */
    public function setEEK(?float $eEK) : self
    {
        $this->initialized['eEK'] = true;
        $this->eEK = $eEK;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getEUR() : ?float
    {
        return $this->eUR;
    }
    /**
     * 
     *
     * @param float|null $eUR
     *
     * @return self
     */
    public function setEUR(?float $eUR) : self
    {
        $this->initialized['eUR'] = true;
        $this->eUR = $eUR;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getGBP() : ?float
    {
        return $this->gBP;
    }
    /**
     * 
     *
     * @param float|null $gBP
     *
     * @return self
     */
    public function setGBP(?float $gBP) : self
    {
        $this->initialized['gBP'] = true;
        $this->gBP = $gBP;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getGHS() : ?float
    {
        return $this->gHS;
    }
    /**
     * 
     *
     * @param float|null $gHS
     *
     * @return self
     */
    public function setGHS(?float $gHS) : self
    {
        $this->initialized['gHS'] = true;
        $this->gHS = $gHS;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getHKD() : ?float
    {
        return $this->hKD;
    }
    /**
     * 
     *
     * @param float|null $hKD
     *
     * @return self
     */
    public function setHKD(?float $hKD) : self
    {
        $this->initialized['hKD'] = true;
        $this->hKD = $hKD;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getHRK() : ?float
    {
        return $this->hRK;
    }
    /**
     * 
     *
     * @param float|null $hRK
     *
     * @return self
     */
    public function setHRK(?float $hRK) : self
    {
        $this->initialized['hRK'] = true;
        $this->hRK = $hRK;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getHUF() : ?float
    {
        return $this->hUF;
    }
    /**
     * 
     *
     * @param float|null $hUF
     *
     * @return self
     */
    public function setHUF(?float $hUF) : self
    {
        $this->initialized['hUF'] = true;
        $this->hUF = $hUF;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getIDR() : ?float
    {
        return $this->iDR;
    }
    /**
     * 
     *
     * @param float|null $iDR
     *
     * @return self
     */
    public function setIDR(?float $iDR) : self
    {
        $this->initialized['iDR'] = true;
        $this->iDR = $iDR;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getILS() : ?float
    {
        return $this->iLS;
    }
    /**
     * 
     *
     * @param float|null $iLS
     *
     * @return self
     */
    public function setILS(?float $iLS) : self
    {
        $this->initialized['iLS'] = true;
        $this->iLS = $iLS;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getINR() : ?float
    {
        return $this->iNR;
    }
    /**
     * 
     *
     * @param float|null $iNR
     *
     * @return self
     */
    public function setINR(?float $iNR) : self
    {
        $this->initialized['iNR'] = true;
        $this->iNR = $iNR;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getJPY() : ?float
    {
        return $this->jPY;
    }
    /**
     * 
     *
     * @param float|null $jPY
     *
     * @return self
     */
    public function setJPY(?float $jPY) : self
    {
        $this->initialized['jPY'] = true;
        $this->jPY = $jPY;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getKRW() : ?float
    {
        return $this->kRW;
    }
    /**
     * 
     *
     * @param float|null $kRW
     *
     * @return self
     */
    public function setKRW(?float $kRW) : self
    {
        $this->initialized['kRW'] = true;
        $this->kRW = $kRW;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getLKR() : ?float
    {
        return $this->lKR;
    }
    /**
     * 
     *
     * @param float|null $lKR
     *
     * @return self
     */
    public function setLKR(?float $lKR) : self
    {
        $this->initialized['lKR'] = true;
        $this->lKR = $lKR;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getLTL() : ?float
    {
        return $this->lTL;
    }
    /**
     * 
     *
     * @param float|null $lTL
     *
     * @return self
     */
    public function setLTL(?float $lTL) : self
    {
        $this->initialized['lTL'] = true;
        $this->lTL = $lTL;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getLVL() : ?float
    {
        return $this->lVL;
    }
    /**
     * 
     *
     * @param float|null $lVL
     *
     * @return self
     */
    public function setLVL(?float $lVL) : self
    {
        $this->initialized['lVL'] = true;
        $this->lVL = $lVL;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getMXN() : ?float
    {
        return $this->mXN;
    }
    /**
     * 
     *
     * @param float|null $mXN
     *
     * @return self
     */
    public function setMXN(?float $mXN) : self
    {
        $this->initialized['mXN'] = true;
        $this->mXN = $mXN;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getMYR() : ?float
    {
        return $this->mYR;
    }
    /**
     * 
     *
     * @param float|null $mYR
     *
     * @return self
     */
    public function setMYR(?float $mYR) : self
    {
        $this->initialized['mYR'] = true;
        $this->mYR = $mYR;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getNOK() : ?float
    {
        return $this->nOK;
    }
    /**
     * 
     *
     * @param float|null $nOK
     *
     * @return self
     */
    public function setNOK(?float $nOK) : self
    {
        $this->initialized['nOK'] = true;
        $this->nOK = $nOK;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getNZD() : ?float
    {
        return $this->nZD;
    }
    /**
     * 
     *
     * @param float|null $nZD
     *
     * @return self
     */
    public function setNZD(?float $nZD) : self
    {
        $this->initialized['nZD'] = true;
        $this->nZD = $nZD;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPHP() : ?float
    {
        return $this->pHP;
    }
    /**
     * 
     *
     * @param float|null $pHP
     *
     * @return self
     */
    public function setPHP(?float $pHP) : self
    {
        $this->initialized['pHP'] = true;
        $this->pHP = $pHP;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getPLN() : ?float
    {
        return $this->pLN;
    }
    /**
     * 
     *
     * @param float|null $pLN
     *
     * @return self
     */
    public function setPLN(?float $pLN) : self
    {
        $this->initialized['pLN'] = true;
        $this->pLN = $pLN;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getRON() : ?float
    {
        return $this->rON;
    }
    /**
     * 
     *
     * @param float|null $rON
     *
     * @return self
     */
    public function setRON(?float $rON) : self
    {
        $this->initialized['rON'] = true;
        $this->rON = $rON;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getRUB() : ?float
    {
        return $this->rUB;
    }
    /**
     * 
     *
     * @param float|null $rUB
     *
     * @return self
     */
    public function setRUB(?float $rUB) : self
    {
        $this->initialized['rUB'] = true;
        $this->rUB = $rUB;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSEK() : ?float
    {
        return $this->sEK;
    }
    /**
     * 
     *
     * @param float|null $sEK
     *
     * @return self
     */
    public function setSEK(?float $sEK) : self
    {
        $this->initialized['sEK'] = true;
        $this->sEK = $sEK;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getSGD() : ?float
    {
        return $this->sGD;
    }
    /**
     * 
     *
     * @param float|null $sGD
     *
     * @return self
     */
    public function setSGD(?float $sGD) : self
    {
        $this->initialized['sGD'] = true;
        $this->sGD = $sGD;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTHB() : ?float
    {
        return $this->tHB;
    }
    /**
     * 
     *
     * @param float|null $tHB
     *
     * @return self
     */
    public function setTHB(?float $tHB) : self
    {
        $this->initialized['tHB'] = true;
        $this->tHB = $tHB;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getTRY() : ?float
    {
        return $this->tRY;
    }
    /**
     * 
     *
     * @param float|null $tRY
     *
     * @return self
     */
    public function setTRY(?float $tRY) : self
    {
        $this->initialized['tRY'] = true;
        $this->tRY = $tRY;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getUSD() : ?float
    {
        return $this->uSD;
    }
    /**
     * 
     *
     * @param float|null $uSD
     *
     * @return self
     */
    public function setUSD(?float $uSD) : self
    {
        $this->initialized['uSD'] = true;
        $this->uSD = $uSD;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getZAR() : ?float
    {
        return $this->zAR;
    }
    /**
     * 
     *
     * @param float|null $zAR
     *
     * @return self
     */
    public function setZAR(?float $zAR) : self
    {
        $this->initialized['zAR'] = true;
        $this->zAR = $zAR;
        return $this;
    }
}