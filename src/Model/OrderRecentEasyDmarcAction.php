<?php

namespace Rouda\OpenProviderAPI\Model;

class OrderRecentEasyDmarcAction
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
     * @var string
     */
    protected $message;
    /**
     * 
     *
     * @var string
     */
    protected $recentAction;
    /**
     * 
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRecentAction() : string
    {
        return $this->recentAction;
    }
    /**
     * 
     *
     * @param string $recentAction
     *
     * @return self
     */
    public function setRecentAction(string $recentAction) : self
    {
        $this->initialized['recentAction'] = true;
        $this->recentAction = $recentAction;
        return $this;
    }
}