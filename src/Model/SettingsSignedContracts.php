<?php

namespace Rouda\OpenProviderAPI\Model;

class SettingsSignedContracts
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
    protected $contents;
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var bool
     */
    protected $isSigned;
    /**
     * 
     *
     * @var string
     */
    protected $modificationDate;
    /**
     * 
     *
     * @var string
     */
    protected $signOnDate;
    /**
     * 
     *
     * @var string
     */
    protected $title;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var int
     */
    protected $versionId;
    /**
     * 
     *
     * @return string
     */
    public function getContents() : string
    {
        return $this->contents;
    }
    /**
     * 
     *
     * @param string $contents
     *
     * @return self
     */
    public function setContents(string $contents) : self
    {
        $this->initialized['contents'] = true;
        $this->contents = $contents;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsSigned() : bool
    {
        return $this->isSigned;
    }
    /**
     * 
     *
     * @param bool $isSigned
     *
     * @return self
     */
    public function setIsSigned(bool $isSigned) : self
    {
        $this->initialized['isSigned'] = true;
        $this->isSigned = $isSigned;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getModificationDate() : string
    {
        return $this->modificationDate;
    }
    /**
     * 
     *
     * @param string $modificationDate
     *
     * @return self
     */
    public function setModificationDate(string $modificationDate) : self
    {
        $this->initialized['modificationDate'] = true;
        $this->modificationDate = $modificationDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSignOnDate() : string
    {
        return $this->signOnDate;
    }
    /**
     * 
     *
     * @param string $signOnDate
     *
     * @return self
     */
    public function setSignOnDate(string $signOnDate) : self
    {
        $this->initialized['signOnDate'] = true;
        $this->signOnDate = $signOnDate;
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
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getVersionId() : int
    {
        return $this->versionId;
    }
    /**
     * 
     *
     * @param int $versionId
     *
     * @return self
     */
    public function setVersionId(int $versionId) : self
    {
        $this->initialized['versionId'] = true;
        $this->versionId = $versionId;
        return $this;
    }
}