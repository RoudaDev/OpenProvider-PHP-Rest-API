<?php

namespace Rouda\OpenProviderAPI\Model;

class ApproveremailUpdateApproverEmailAddressRequest
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
     * Email for domain ownership verification. Should start with well-known generic name like admin@, hostmater@, administrator@, etc.
     *
     * @var string
     */
    protected $approverEmail;
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * Email for domain ownership verification. Should start with well-known generic name like admin@, hostmater@, administrator@, etc.
     *
     * @return string
     */
    public function getApproverEmail() : string
    {
        return $this->approverEmail;
    }
    /**
     * Email for domain ownership verification. Should start with well-known generic name like admin@, hostmater@, administrator@, etc.
     *
     * @param string $approverEmail
     *
     * @return self
     */
    public function setApproverEmail(string $approverEmail) : self
    {
        $this->initialized['approverEmail'] = true;
        $this->approverEmail = $approverEmail;
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
}