<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var string|null
     */
    protected $message;
    /**
     * 
     *
     * @var string|null
     */
    protected $recentAction;
    /**
     * 
     *
     * @return string|null
     */
    public function getMessage() : ?string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string|null $message
     *
     * @return self
     */
    public function setMessage(?string $message) : self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRecentAction() : ?string
    {
        return $this->recentAction;
    }
    /**
     * 
     *
     * @param string|null $recentAction
     *
     * @return self
     */
    public function setRecentAction(?string $recentAction) : self
    {
        $this->initialized['recentAction'] = true;
        $this->recentAction = $recentAction;
        return $this;
    }
}