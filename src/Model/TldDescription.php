<?php

namespace Rouda\OpenProviderAPI\Model;

class TldDescription
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
    protected $text;
    /**
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @return string
     */
    public function getText() : string
    {
        return $this->text;
    }
    /**
     * 
     *
     * @param string $text
     *
     * @return self
     */
    public function setText(string $text) : self
    {
        $this->initialized['text'] = true;
        $this->text = $text;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
}