<?php

namespace Rouda\OpenProviderAPI\Model;

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
     * @var float
     */
    protected $aUD;
    /**
     * 
     *
     * @var float
     */
    protected $bGN;
    /**
     * 
     *
     * @var float
     */
    protected $bRL;
    /**
     * 
     *
     * @var float
     */
    protected $cAD;
    /**
     * 
     *
     * @var float
     */
    protected $cHF;
    /**
     * 
     *
     * @var float
     */
    protected $cNY;
    /**
     * 
     *
     * @var float
     */
    protected $cZK;
    /**
     * 
     *
     * @var float
     */
    protected $dKK;
    /**
     * 
     *
     * @var float
     */
    protected $eEK;
    /**
     * 
     *
     * @var float
     */
    protected $eUR;
    /**
     * 
     *
     * @var float
     */
    protected $gBP;
    /**
     * 
     *
     * @var float
     */
    protected $gHS;
    /**
     * 
     *
     * @var float
     */
    protected $hKD;
    /**
     * 
     *
     * @var float
     */
    protected $hRK;
    /**
     * 
     *
     * @var float
     */
    protected $hUF;
    /**
     * 
     *
     * @var float
     */
    protected $iDR;
    /**
     * 
     *
     * @var float
     */
    protected $iLS;
    /**
     * 
     *
     * @var float
     */
    protected $iNR;
    /**
     * 
     *
     * @var float
     */
    protected $jPY;
    /**
     * 
     *
     * @var float
     */
    protected $kRW;
    /**
     * 
     *
     * @var float
     */
    protected $lKR;
    /**
     * 
     *
     * @var float
     */
    protected $lTL;
    /**
     * 
     *
     * @var float
     */
    protected $lVL;
    /**
     * 
     *
     * @var float
     */
    protected $mXN;
    /**
     * 
     *
     * @var float
     */
    protected $mYR;
    /**
     * 
     *
     * @var float
     */
    protected $nOK;
    /**
     * 
     *
     * @var float
     */
    protected $nZD;
    /**
     * 
     *
     * @var float
     */
    protected $pHP;
    /**
     * 
     *
     * @var float
     */
    protected $pLN;
    /**
     * 
     *
     * @var float
     */
    protected $rON;
    /**
     * 
     *
     * @var float
     */
    protected $rUB;
    /**
     * 
     *
     * @var float
     */
    protected $sEK;
    /**
     * 
     *
     * @var float
     */
    protected $sGD;
    /**
     * 
     *
     * @var float
     */
    protected $tHB;
    /**
     * 
     *
     * @var float
     */
    protected $tRY;
    /**
     * 
     *
     * @var float
     */
    protected $uSD;
    /**
     * 
     *
     * @var float
     */
    protected $zAR;
    /**
     * 
     *
     * @return float
     */
    public function getAUD() : float
    {
        return $this->aUD;
    }
    /**
     * 
     *
     * @param float $aUD
     *
     * @return self
     */
    public function setAUD(float $aUD) : self
    {
        $this->initialized['aUD'] = true;
        $this->aUD = $aUD;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getBGN() : float
    {
        return $this->bGN;
    }
    /**
     * 
     *
     * @param float $bGN
     *
     * @return self
     */
    public function setBGN(float $bGN) : self
    {
        $this->initialized['bGN'] = true;
        $this->bGN = $bGN;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getBRL() : float
    {
        return $this->bRL;
    }
    /**
     * 
     *
     * @param float $bRL
     *
     * @return self
     */
    public function setBRL(float $bRL) : self
    {
        $this->initialized['bRL'] = true;
        $this->bRL = $bRL;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getCAD() : float
    {
        return $this->cAD;
    }
    /**
     * 
     *
     * @param float $cAD
     *
     * @return self
     */
    public function setCAD(float $cAD) : self
    {
        $this->initialized['cAD'] = true;
        $this->cAD = $cAD;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getCHF() : float
    {
        return $this->cHF;
    }
    /**
     * 
     *
     * @param float $cHF
     *
     * @return self
     */
    public function setCHF(float $cHF) : self
    {
        $this->initialized['cHF'] = true;
        $this->cHF = $cHF;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getCNY() : float
    {
        return $this->cNY;
    }
    /**
     * 
     *
     * @param float $cNY
     *
     * @return self
     */
    public function setCNY(float $cNY) : self
    {
        $this->initialized['cNY'] = true;
        $this->cNY = $cNY;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getCZK() : float
    {
        return $this->cZK;
    }
    /**
     * 
     *
     * @param float $cZK
     *
     * @return self
     */
    public function setCZK(float $cZK) : self
    {
        $this->initialized['cZK'] = true;
        $this->cZK = $cZK;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDKK() : float
    {
        return $this->dKK;
    }
    /**
     * 
     *
     * @param float $dKK
     *
     * @return self
     */
    public function setDKK(float $dKK) : self
    {
        $this->initialized['dKK'] = true;
        $this->dKK = $dKK;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getEEK() : float
    {
        return $this->eEK;
    }
    /**
     * 
     *
     * @param float $eEK
     *
     * @return self
     */
    public function setEEK(float $eEK) : self
    {
        $this->initialized['eEK'] = true;
        $this->eEK = $eEK;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getEUR() : float
    {
        return $this->eUR;
    }
    /**
     * 
     *
     * @param float $eUR
     *
     * @return self
     */
    public function setEUR(float $eUR) : self
    {
        $this->initialized['eUR'] = true;
        $this->eUR = $eUR;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getGBP() : float
    {
        return $this->gBP;
    }
    /**
     * 
     *
     * @param float $gBP
     *
     * @return self
     */
    public function setGBP(float $gBP) : self
    {
        $this->initialized['gBP'] = true;
        $this->gBP = $gBP;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getGHS() : float
    {
        return $this->gHS;
    }
    /**
     * 
     *
     * @param float $gHS
     *
     * @return self
     */
    public function setGHS(float $gHS) : self
    {
        $this->initialized['gHS'] = true;
        $this->gHS = $gHS;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getHKD() : float
    {
        return $this->hKD;
    }
    /**
     * 
     *
     * @param float $hKD
     *
     * @return self
     */
    public function setHKD(float $hKD) : self
    {
        $this->initialized['hKD'] = true;
        $this->hKD = $hKD;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getHRK() : float
    {
        return $this->hRK;
    }
    /**
     * 
     *
     * @param float $hRK
     *
     * @return self
     */
    public function setHRK(float $hRK) : self
    {
        $this->initialized['hRK'] = true;
        $this->hRK = $hRK;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getHUF() : float
    {
        return $this->hUF;
    }
    /**
     * 
     *
     * @param float $hUF
     *
     * @return self
     */
    public function setHUF(float $hUF) : self
    {
        $this->initialized['hUF'] = true;
        $this->hUF = $hUF;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getIDR() : float
    {
        return $this->iDR;
    }
    /**
     * 
     *
     * @param float $iDR
     *
     * @return self
     */
    public function setIDR(float $iDR) : self
    {
        $this->initialized['iDR'] = true;
        $this->iDR = $iDR;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getILS() : float
    {
        return $this->iLS;
    }
    /**
     * 
     *
     * @param float $iLS
     *
     * @return self
     */
    public function setILS(float $iLS) : self
    {
        $this->initialized['iLS'] = true;
        $this->iLS = $iLS;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getINR() : float
    {
        return $this->iNR;
    }
    /**
     * 
     *
     * @param float $iNR
     *
     * @return self
     */
    public function setINR(float $iNR) : self
    {
        $this->initialized['iNR'] = true;
        $this->iNR = $iNR;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getJPY() : float
    {
        return $this->jPY;
    }
    /**
     * 
     *
     * @param float $jPY
     *
     * @return self
     */
    public function setJPY(float $jPY) : self
    {
        $this->initialized['jPY'] = true;
        $this->jPY = $jPY;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getKRW() : float
    {
        return $this->kRW;
    }
    /**
     * 
     *
     * @param float $kRW
     *
     * @return self
     */
    public function setKRW(float $kRW) : self
    {
        $this->initialized['kRW'] = true;
        $this->kRW = $kRW;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getLKR() : float
    {
        return $this->lKR;
    }
    /**
     * 
     *
     * @param float $lKR
     *
     * @return self
     */
    public function setLKR(float $lKR) : self
    {
        $this->initialized['lKR'] = true;
        $this->lKR = $lKR;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getLTL() : float
    {
        return $this->lTL;
    }
    /**
     * 
     *
     * @param float $lTL
     *
     * @return self
     */
    public function setLTL(float $lTL) : self
    {
        $this->initialized['lTL'] = true;
        $this->lTL = $lTL;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getLVL() : float
    {
        return $this->lVL;
    }
    /**
     * 
     *
     * @param float $lVL
     *
     * @return self
     */
    public function setLVL(float $lVL) : self
    {
        $this->initialized['lVL'] = true;
        $this->lVL = $lVL;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getMXN() : float
    {
        return $this->mXN;
    }
    /**
     * 
     *
     * @param float $mXN
     *
     * @return self
     */
    public function setMXN(float $mXN) : self
    {
        $this->initialized['mXN'] = true;
        $this->mXN = $mXN;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getMYR() : float
    {
        return $this->mYR;
    }
    /**
     * 
     *
     * @param float $mYR
     *
     * @return self
     */
    public function setMYR(float $mYR) : self
    {
        $this->initialized['mYR'] = true;
        $this->mYR = $mYR;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getNOK() : float
    {
        return $this->nOK;
    }
    /**
     * 
     *
     * @param float $nOK
     *
     * @return self
     */
    public function setNOK(float $nOK) : self
    {
        $this->initialized['nOK'] = true;
        $this->nOK = $nOK;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getNZD() : float
    {
        return $this->nZD;
    }
    /**
     * 
     *
     * @param float $nZD
     *
     * @return self
     */
    public function setNZD(float $nZD) : self
    {
        $this->initialized['nZD'] = true;
        $this->nZD = $nZD;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPHP() : float
    {
        return $this->pHP;
    }
    /**
     * 
     *
     * @param float $pHP
     *
     * @return self
     */
    public function setPHP(float $pHP) : self
    {
        $this->initialized['pHP'] = true;
        $this->pHP = $pHP;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPLN() : float
    {
        return $this->pLN;
    }
    /**
     * 
     *
     * @param float $pLN
     *
     * @return self
     */
    public function setPLN(float $pLN) : self
    {
        $this->initialized['pLN'] = true;
        $this->pLN = $pLN;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRON() : float
    {
        return $this->rON;
    }
    /**
     * 
     *
     * @param float $rON
     *
     * @return self
     */
    public function setRON(float $rON) : self
    {
        $this->initialized['rON'] = true;
        $this->rON = $rON;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getRUB() : float
    {
        return $this->rUB;
    }
    /**
     * 
     *
     * @param float $rUB
     *
     * @return self
     */
    public function setRUB(float $rUB) : self
    {
        $this->initialized['rUB'] = true;
        $this->rUB = $rUB;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSEK() : float
    {
        return $this->sEK;
    }
    /**
     * 
     *
     * @param float $sEK
     *
     * @return self
     */
    public function setSEK(float $sEK) : self
    {
        $this->initialized['sEK'] = true;
        $this->sEK = $sEK;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSGD() : float
    {
        return $this->sGD;
    }
    /**
     * 
     *
     * @param float $sGD
     *
     * @return self
     */
    public function setSGD(float $sGD) : self
    {
        $this->initialized['sGD'] = true;
        $this->sGD = $sGD;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTHB() : float
    {
        return $this->tHB;
    }
    /**
     * 
     *
     * @param float $tHB
     *
     * @return self
     */
    public function setTHB(float $tHB) : self
    {
        $this->initialized['tHB'] = true;
        $this->tHB = $tHB;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getTRY() : float
    {
        return $this->tRY;
    }
    /**
     * 
     *
     * @param float $tRY
     *
     * @return self
     */
    public function setTRY(float $tRY) : self
    {
        $this->initialized['tRY'] = true;
        $this->tRY = $tRY;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getUSD() : float
    {
        return $this->uSD;
    }
    /**
     * 
     *
     * @param float $uSD
     *
     * @return self
     */
    public function setUSD(float $uSD) : self
    {
        $this->initialized['uSD'] = true;
        $this->uSD = $uSD;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getZAR() : float
    {
        return $this->zAR;
    }
    /**
     * 
     *
     * @param float $zAR
     *
     * @return self
     */
    public function setZAR(float $zAR) : self
    {
        $this->initialized['zAR'] = true;
        $this->zAR = $zAR;
        return $this;
    }
}