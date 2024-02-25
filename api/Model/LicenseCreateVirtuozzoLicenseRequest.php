<?php

namespace Rouda\OpenProvider\Api\Model;

class LicenseCreateVirtuozzoLicenseRequest
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
     * @var string[]|null
     */
    protected $attachedKeys;
    /**
     * 
     *
     * @var string|null
     */
    protected $comment;
    /**
     * 
     *
     * @var string|null
     */
    protected $ipAddressBinding;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $items;
    /**
     * 
     *
     * @var int|null
     */
    protected $parentKeyId;
    /**
     * 
     *
     * @var int|null
     */
    protected $pcsCapacity;
    /**
     * 
     *
     * @var int|null
     */
    protected $period;
    /**
     * 
     *
     * @var bool|null
     */
    protected $restrictIpBinding;
    /**
     * 
     *
     * @var string|null
     */
    protected $title;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getAttachedKeys() : ?array
    {
        return $this->attachedKeys;
    }
    /**
     * 
     *
     * @param string[]|null $attachedKeys
     *
     * @return self
     */
    public function setAttachedKeys(?array $attachedKeys) : self
    {
        $this->initialized['attachedKeys'] = true;
        $this->attachedKeys = $attachedKeys;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getComment() : ?string
    {
        return $this->comment;
    }
    /**
     * 
     *
     * @param string|null $comment
     *
     * @return self
     */
    public function setComment(?string $comment) : self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getIpAddressBinding() : ?string
    {
        return $this->ipAddressBinding;
    }
    /**
     * 
     *
     * @param string|null $ipAddressBinding
     *
     * @return self
     */
    public function setIpAddressBinding(?string $ipAddressBinding) : self
    {
        $this->initialized['ipAddressBinding'] = true;
        $this->ipAddressBinding = $ipAddressBinding;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param string[]|null $items
     *
     * @return self
     */
    public function setItems(?array $items) : self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getParentKeyId() : ?int
    {
        return $this->parentKeyId;
    }
    /**
     * 
     *
     * @param int|null $parentKeyId
     *
     * @return self
     */
    public function setParentKeyId(?int $parentKeyId) : self
    {
        $this->initialized['parentKeyId'] = true;
        $this->parentKeyId = $parentKeyId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPcsCapacity() : ?int
    {
        return $this->pcsCapacity;
    }
    /**
     * 
     *
     * @param int|null $pcsCapacity
     *
     * @return self
     */
    public function setPcsCapacity(?int $pcsCapacity) : self
    {
        $this->initialized['pcsCapacity'] = true;
        $this->pcsCapacity = $pcsCapacity;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPeriod() : ?int
    {
        return $this->period;
    }
    /**
     * 
     *
     * @param int|null $period
     *
     * @return self
     */
    public function setPeriod(?int $period) : self
    {
        $this->initialized['period'] = true;
        $this->period = $period;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getRestrictIpBinding() : ?bool
    {
        return $this->restrictIpBinding;
    }
    /**
     * 
     *
     * @param bool|null $restrictIpBinding
     *
     * @return self
     */
    public function setRestrictIpBinding(?bool $restrictIpBinding) : self
    {
        $this->initialized['restrictIpBinding'] = true;
        $this->restrictIpBinding = $restrictIpBinding;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title) : self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
}