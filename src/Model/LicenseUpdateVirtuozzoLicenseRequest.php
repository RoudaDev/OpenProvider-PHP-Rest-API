<?php

namespace Rouda\OpenProviderAPI\Model;

class LicenseUpdateVirtuozzoLicenseRequest
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
     * @var string[]
     */
    protected $attachedKeys;
    /**
     * 
     *
     * @var string
     */
    protected $comment;
    /**
     * 
     *
     * @var string
     */
    protected $ipAddressBinding;
    /**
     * 
     *
     * @var string[]
     */
    protected $items;
    /**
     * 
     *
     * @var int
     */
    protected $keyId;
    /**
     * 
     *
     * @var int
     */
    protected $parentKeyId;
    /**
     * 
     *
     * @var int
     */
    protected $pcsCapacity;
    /**
     * 
     *
     * @var int
     */
    protected $period;
    /**
     * 
     *
     * @var bool
     */
    protected $restrictIpBinding;
    /**
     * 
     *
     * @var bool
     */
    protected $suspended;
    /**
     * 
     *
     * @var string
     */
    protected $title;
    /**
     * 
     *
     * @return string[]
     */
    public function getAttachedKeys() : array
    {
        return $this->attachedKeys;
    }
    /**
     * 
     *
     * @param string[] $attachedKeys
     *
     * @return self
     */
    public function setAttachedKeys(array $attachedKeys) : self
    {
        $this->initialized['attachedKeys'] = true;
        $this->attachedKeys = $attachedKeys;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getComment() : string
    {
        return $this->comment;
    }
    /**
     * 
     *
     * @param string $comment
     *
     * @return self
     */
    public function setComment(string $comment) : self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIpAddressBinding() : string
    {
        return $this->ipAddressBinding;
    }
    /**
     * 
     *
     * @param string $ipAddressBinding
     *
     * @return self
     */
    public function setIpAddressBinding(string $ipAddressBinding) : self
    {
        $this->initialized['ipAddressBinding'] = true;
        $this->ipAddressBinding = $ipAddressBinding;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param string[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getKeyId() : int
    {
        return $this->keyId;
    }
    /**
     * 
     *
     * @param int $keyId
     *
     * @return self
     */
    public function setKeyId(int $keyId) : self
    {
        $this->initialized['keyId'] = true;
        $this->keyId = $keyId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getParentKeyId() : int
    {
        return $this->parentKeyId;
    }
    /**
     * 
     *
     * @param int $parentKeyId
     *
     * @return self
     */
    public function setParentKeyId(int $parentKeyId) : self
    {
        $this->initialized['parentKeyId'] = true;
        $this->parentKeyId = $parentKeyId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPcsCapacity() : int
    {
        return $this->pcsCapacity;
    }
    /**
     * 
     *
     * @param int $pcsCapacity
     *
     * @return self
     */
    public function setPcsCapacity(int $pcsCapacity) : self
    {
        $this->initialized['pcsCapacity'] = true;
        $this->pcsCapacity = $pcsCapacity;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPeriod() : int
    {
        return $this->period;
    }
    /**
     * 
     *
     * @param int $period
     *
     * @return self
     */
    public function setPeriod(int $period) : self
    {
        $this->initialized['period'] = true;
        $this->period = $period;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getRestrictIpBinding() : bool
    {
        return $this->restrictIpBinding;
    }
    /**
     * 
     *
     * @param bool $restrictIpBinding
     *
     * @return self
     */
    public function setRestrictIpBinding(bool $restrictIpBinding) : self
    {
        $this->initialized['restrictIpBinding'] = true;
        $this->restrictIpBinding = $restrictIpBinding;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getSuspended() : bool
    {
        return $this->suspended;
    }
    /**
     * 
     *
     * @param bool $suspended
     *
     * @return self
     */
    public function setSuspended(bool $suspended) : self
    {
        $this->initialized['suspended'] = true;
        $this->suspended = $suspended;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
}