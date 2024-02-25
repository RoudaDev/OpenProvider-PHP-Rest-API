<?php

namespace Rouda\OpenProvider\Api;

class Client extends \Rouda\OpenProvider\Api\Runtime\Client\Client
{
    /**
     * 
     *
     * @param \Rouda\OpenProvider\Api\Model\AuthLoginRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\AuthLoginResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function login(\Rouda\OpenProvider\Api\Model\AuthLoginRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\Login($body), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $limit Output limit.
     *     @var int $offset Output offset.
     *     @var string $order Output ordering pattern. ASC / DESC.
     *     @var string $order_by Order output by field (i.e. first_name).
     *     @var string $email_pattern Full or partial email address. Wildcard (*) can be used.
     *     @var string $last_name_pattern Full or partial last name. Wildcard (*) can be used.
     *     @var string $company_name_pattern Full or partial company name. Wildcard (*) can be used.
     *     @var string $username_pattern The username pattern.
     *     @var string $role Contact's role.
     *     @var bool $with_additional_data Retrieves objects with (1) or without (0) additional data.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\ContactListContactsResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listContacts(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\ListContacts($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProvider\Api\Model\ContactCreateContactRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\ContactCreateContactResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createContact(\Rouda\OpenProvider\Api\Model\ContactCreateContactRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\CreateContact($body), $fetch);
    }
    /**
     * 
     *
     * @param int $id Object ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\ContactDeleteContactResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function deleteContact(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\DeleteContact($id), $fetch);
    }
    /**
     * 
     *
     * @param int $id Object ID
     * @param array $queryParameters {
     *     @var bool $with_additional_data Retrieves objects with (1) or without (0) additional data.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\ContactGetContactResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getContact(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\GetContact($id, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $id Object ID
     * @param \Rouda\OpenProvider\Api\Model\ContactUpdateContactRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\ContactUpdateContactResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updateContact(int $id, \Rouda\OpenProvider\Api\Model\ContactUpdateContactRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\UpdateContact($id, $body), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $reseller_id Your reseller id is used by default. Other values not accepted.
     *     @var int $limit Output limit.
     *     @var int $offset Output offset.
     *     @var string $order Output ordering pattern. ASC / DESC.
     *     @var string $order_by Order output by field (i.e. first_name).
     *     @var string $email_pattern Full or partial email address. Wildcard (*) can be used.
     *     @var string $company_name_pattern Full or partial company name. Wildcard (*) can be used.
     *     @var string $last_name_pattern Full or partial last name. Wildcard (*) can be used.
     *     @var string $first_name_pattern Full or partial first name. Wildcard (*) can be used.
     *     @var string $comment_pattern Full or partial comment value. Wildcard (*) can be used.
     *     @var string $handle_pattern Full or partial handle name. Wildcard (*) can be used.
     *     @var string $pattern ull or partial first name or last name or company name or handle. Wildcard (*) can be used.
     *     @var bool $with_additional_data Retrieves objects with (1) or without (0) additional data.
     *     @var string $type Customer type: 'company' or 'individual'. If customer has not empty 'companyName' than type is 'company', otherwise 'individual'.
     *     @var array $columns Сolumns to retrieve. Possible values: 'firstName', 'prefix', 'initials', 'lastName', 'companyName', 'email', 'handle', 'id', 'fullName'.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\CustomerListCustomersResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listCustomers(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\ListCustomers($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProvider\Api\Model\CustomerCreateCustomerRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\CustomerCreateCustomerResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createCustomer(\Rouda\OpenProvider\Api\Model\CustomerCreateCustomerRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\CreateCustomer($body), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $domain_id The domain id.
     *     @var string $domain The domain.
     *     @var string $email The email.
     *     @var string $handle The handle.
     *     @var string $status The status.
     *     @var string $description The description.
     *     @var bool $is_suspended Is suspended.
     *     @var string $response.type The type.
     *     @var string $response.to The to.
     *     @var int $limit The limit.
     *     @var int $offset The offset.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\EmailListDomainVerificationsResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listDomainEmailVerifications(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\ListDomainEmailVerifications($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProvider\Api\Model\EmailRestartEmailVerificationRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\EmailRestartEmailVerificationResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function restartEmailVerification(\Rouda\OpenProvider\Api\Model\EmailRestartEmailVerificationRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\RestartEmailVerification($body), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProvider\Api\Model\EmailStartEmailVerificationRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\EmailStartEmailVerificationResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function startEmailVerification(\Rouda\OpenProvider\Api\Model\EmailStartEmailVerificationRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\StartEmailVerification($body), $fetch);
    }
    /**
     * 
     *
     * @param string $handle Customer unique identifier or handle, which can be created via CreateCustomer API method
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\CustomerDeleteCustomerResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCustomer(string $handle, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\DeleteCustomer($handle), $fetch);
    }
    /**
     * 
     *
     * @param string $handle Customer unique identifier or handle, which can be created via CreateCustomer API method
     * @param array $queryParameters {
     *     @var bool $with_additional_data Retrieves objects with (1) or without (0) additional data.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\CustomerGetCustomerResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomer(string $handle, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\GetCustomer($handle, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $handle Customer unique identifier or handle, which can be created via CreateCustomer API method
     * @param \Rouda\OpenProvider\Api\Model\CustomerUpdateCustomerRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\CustomerUpdateCustomerResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updateCustomer(string $handle, \Rouda\OpenProvider\Api\Model\CustomerUpdateCustomerRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\UpdateCustomer($handle, $body), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProvider\Api\Model\DomainTokenCreateTokenRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\DomainTokenCreateTokenResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createToken(\Rouda\OpenProvider\Api\Model\DomainTokenCreateTokenRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\CreateToken($body), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $name Nameserver name.
     *     @var string $ip Nameserver IP.
     *     @var string $ip6 Nameserver IPv6.
     *     @var string $pattern Nameserver name search pattern. Wildcatd (*) can be used.
     *     @var int $limit Limits the number of objects in the output.
     *     @var string $offset Used to retrieve all objects from a certain offset up to the limit.
     *     @var string $order Sorting type (asc/desc).
     *     @var string $order_by Field for sorting output. Possible values: id, name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\NameserverListNameserversResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listNameservers(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\ListNameservers($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProvider\Api\Model\NameserverNameserver $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\NameserverCreateNameserverResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createNameserver(\Rouda\OpenProvider\Api\Model\NameserverNameserver $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\CreateNameserver($body), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $limit Limits the number of objects in the output.
     *     @var int $offset Used to retrieve all objects from a certain offset up to the limit. (default value: 0).
     *     @var string $order_by.ns_group Sorting type (asc/desc).
     *     @var string $order_by.domain_count Sorting type (asc/desc).
     *     @var string $order_by.ns_count Sorting type (asc/desc).
     *     @var bool $with_domain_count Indicates if number of domains associated with the NS group should be returned.
     *     @var bool $with_ns_count Indicates if number of nameservers associated with the NS group should be returned.
     *     @var string $ns_group_pattern NS group name pattern. Wildcard (*) can be used.
     *     @var string $ns_name_pattern Nameserver name pattern. Wildcard (*) can be used.
     *     @var string $ns_ip_pattern Nameserver IP address pattern. Wildcard (*) can be used.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\NsGroupListGroupsResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listGroups(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\ListGroups($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProvider\Api\Model\NsGroupCreateGroupRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\NsGroupCreateGroupResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createGroup(\Rouda\OpenProvider\Api\Model\NsGroupCreateGroupRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\CreateGroup($body), $fetch);
    }
    /**
     * 
     *
     * @param string $nsGroup Plain text name of the nameserver group, which can consist of several nameservers with attached IPs. Once created in Openprovider reseller account, nameserver group can be reused for operations with domains.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\NsGroupGroupBoolResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function deleteGroup(string $nsGroup, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\DeleteGroup($nsGroup), $fetch);
    }
    /**
     * 
     *
     * @param string $nsGroup Plain text name of the nameserver group, which can consist of several nameservers with attached IPs. Once created in Openprovider reseller account, nameserver group can be reused for operations with domains.
     * @param array $queryParameters {
     *     @var int $id Nameserver group ID.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\NsGroupGetGroupResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getGroup(string $nsGroup, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\GetGroup($nsGroup, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $nsGroup Plain text name of the nameserver group, which can consist of several nameservers with attached IPs. Once created in Openprovider reseller account, nameserver group can be reused for operations with domains.
     * @param \Rouda\OpenProvider\Api\Model\NsGroupUpdateGroupRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\NsGroupGroupBoolResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updateGroup(string $nsGroup, \Rouda\OpenProvider\Api\Model\NsGroupUpdateGroupRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\UpdateGroup($nsGroup, $body), $fetch);
    }
    /**
     * 
     *
     * @param string $name Nameserver name
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\NameserverNameserverBoolResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function deleteNameserver(string $name, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\DeleteNameserver($name), $fetch);
    }
    /**
     * 
     *
     * @param string $name Nameserver name
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\NameserverGetNameserverResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getNameserver(string $name, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\GetNameserver($name), $fetch);
    }
    /**
     * 
     *
     * @param string $name Nameserver name
     * @param \Rouda\OpenProvider\Api\Model\NameserverNameserver $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\NameserverNameserverBoolResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updateNameserver(string $name, \Rouda\OpenProvider\Api\Model\NameserverNameserver $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\UpdateNameserver($name, $body), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $limit Limits the number of objects in the output.
     *     @var string $offset Used to retrieve all objects from a certain offset up to the limit.
     *     @var string $order Sorting type (asc/desc).
     *     @var string $order_by Field for sorting output. Possible value: name.
     *     @var bool $with_records Indicates if DNS records should be retrieved.
     *     @var string $name_pattern Template name pattern. Wildcard (*)can be used.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\TemplateListTemplatesResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listTemplates(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\ListTemplates($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProvider\Api\Model\TemplateCreateTemplateRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\TemplateCreateTemplateResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createTemplate(\Rouda\OpenProvider\Api\Model\TemplateCreateTemplateRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\CreateTemplate($body), $fetch);
    }
    /**
     * 
     *
     * @param int $id Template ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\TemplateTemplateBoolResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTemplate(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\DeleteTemplate($id), $fetch);
    }
    /**
     * 
     *
     * @param int $id Template ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\TemplateGetTemplateResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getTemplate(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\GetTemplate($id), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $limit Limits the number of objects in the output. (default value: 100, maximum value: 500).
     *     @var int $offset Used to retrieve all objects from a certain offset up to the. (default value: 0).
     *     @var string $order_by.creation_date Sorting type (asc/desc).
     *     @var string $order_by.modification_date Sorting type (asc/desc).
     *     @var string $order_by.name Sorting type (asc/desc).
     *     @var string $type DNS zone type (master or slave).
     *     @var string $name_pattern DNS zone name pattern. Wildcard (*) can be used.
     *     @var bool $with_records Indicates, whether DNS records should be displayed in output.
     *     @var bool $with_history Indicates, whether DNS zone history should be displayed in output.
     *     @var bool $with_dnskey Indicates, whether DNSSEC keys should be displayed in output.
     *     @var string $provider Name of the DNS provider. Set provider=sectigo in case of only sectigo premium DNS zone should be retrieved.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\ZoneListZonesResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listZones(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\ListZones($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProvider\Api\Model\ZoneCreateZoneRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\ZoneZoneBoolResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createZone(\Rouda\OpenProvider\Api\Model\ZoneCreateZoneRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\CreateZone($body), $fetch);
    }
    /**
     * 
     *
     * @param string $name Name of the domain to which DNS zone corresponds
     * @param array $queryParameters {
     *     @var int $id DNS zone ID.
     *     @var string $domain.name Domain name without extension.
     *     @var string $domain.extension Domain extension.
     *     @var string $provider Name of the DNS provider. Set provider=sectigo in case of sectigo premium DNS zone should be deleted.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\ZoneZoneBoolResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function deleteZone(string $name, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\DeleteZone($name, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $name Name of the domain to which DNS zone corresponds
     * @param array $queryParameters {
     *     @var string $id DNS zone ID.
     *     @var bool $with_records Indicates, whether DNS records should be displayed in output.
     *     @var bool $with_history Indicates, whether DNS zone history should be displayed in output.
     *     @var bool $with_dnskey Indicates, whether DNSSEC keys should be displayed in output.
     *     @var string $provider Name of the DNS provider. Set provider=sectigo in case of only sectigo premium DNS zone should be retrieved.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\ZoneGetZoneResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getZone(string $name, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\GetZone($name, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $name Name of the domain to which DNS zone corresponds
     * @param \Rouda\OpenProvider\Api\Model\ZoneUpdateZoneRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\ZoneZoneBoolResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updateZone(string $name, \Rouda\OpenProvider\Api\Model\ZoneUpdateZoneRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\UpdateZone($name, $body), $fetch);
    }
    /**
     * 
     *
     * @param string $name DNS record name
     * @param array $queryParameters {
     *     @var int $zone_id DNS zone ID.
     *     @var int $limit How many records to retrieve (default: 100, max 500).
     *     @var int $offset From which record to retrieve (default: 0).
     *     @var string $order_by.type Sorting type (asc/desc).
     *     @var string $order_by.name Sorting type (asc/desc).
     *     @var string $order_by.value Sorting type (asc/desc).
     *     @var string $order_by.ttl Sorting type (asc/desc).
     *     @var string $order_by.prio Sorting type (asc/desc).
     *     @var string $record_name_pattern DNS record name pattern. Wildcard (*) can be used.
     *     @var string $value_pattern DNS record value pattern. Wildcard (*) can be used.
     *     @var string $type DNS record type.
     *     @var int $prio DNS record priority.
     *     @var int $ttl DNS record TTL.
     *     @var string $zone_provider Name of the DNS provider. Set zone_provider=sectigo in case of only sectigo premium DNS zone records should be retrieved.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\RecordListZoneRecordsResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listZoneRecords(string $name, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\ListZoneRecords($name, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $order_by.id Domain id number.
     *     @var string $order_by.domain_name The domain name.
     *     @var string $order_by.domain_extension Domain extension.
     *     @var string $order_by.order_date The order date.
     *     @var string $order_by.active_date The active date.
     *     @var string $order_by.expiration_date Domain expiration date.
     *     @var string $order_by.renewal_date Date on which domain will be renewed.
     *     @var string $order_by.status Domain status.
     *     @var string $order_by.transfer_date The transfer date.
     *     @var int $limit The limit.
     *     @var int $offset The offset.
     *     @var int $id Domain id number.
     *     @var string $extension Domain extension.
     *     @var string $renewal_date Date on which domain will be renewed.
     *     @var string $full_name Full name of the domain.
     *     @var string $domain_name_pattern The domain name pattern.
     *     @var string $ns_group_pattern Nameserver group name pattern.
     *     @var string $status Domain status.
     *     @var array $status_not_equal Array of domain statuses to exclude.
     *     @var string $queue_status The queue status.
     *     @var string $contact_handle Handle to filter by.
     *     @var string $comment_pattern The comment pattern.
     *     @var bool $with_history With history.
     *     @var bool $with_api_history With api history.
     *     @var bool $with_additional_data With additional data.
     *     @var string $application_mode When new gTLD is started it gets through several phases before it becomes available for registration to everybody (General availability or GA). There are several phases before GA when it is still possible to apply for a domain, but with some restrictions.
     *     @var bool $with_verification_email Returns information about domain owner email verification status.
     *     @var bool $with_registry_statuses Indicates, if registry EPP statuses should be retrieved.
     *     @var string $response.type The type.
     *     @var string $response.to The to.
     *     @var bool $is_deleted Indicates whether object is deleted.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\DomainListDomainsResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listDomains(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\ListDomains($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProvider\Api\Model\DomainCreateDomainRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\DomainCreateDomainResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createDomain(\Rouda\OpenProvider\Api\Model\DomainCreateDomainRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\CreateDomain($body), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $domain.name Domain name without extension.
     *     @var string $domain.extension Domain extension.
     *     @var string $operation The operation.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\AdditionalDataGetAdditionalDataResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getAdditionalData(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\GetAdditionalData($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $domain.name Domain name without extension.
     *     @var string $domain.extension Domain extension.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\CustomerGetDataResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getData(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\GetData($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProvider\Api\Model\DomainCheckDomainRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\DomainCheckDomainResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function checkDomain(\Rouda\OpenProvider\Api\Model\DomainCheckDomainRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\CheckDomain($body), $fetch);
    }
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var string $domain.name Domain name without extension.
    *     @var string $domain.extension Domain extension.
    *     @var string $operation Domain operation.
    *     @var string $additional_data.idn_script The idn script states what language or character set the domain name is in
    Applicable to: .actor, .ae.org, .airforce, .army, .art, .attorney, .auction, .band, .bar, .best, .br.com, .ceo, .cn.com, .college, .com, .com.de, .com.se, .consulting, .dance, .de.com, .degree, .democrat, .dentist, .design, .engineer, .eu.com, .eus, .feedback, .fm, .forsale, .frl, .fun, .futbol, .gal, .gb.net, .gives, .gr.com, .haus, .hiv, .host, .immobilien, .in.net, .info, .ink, .jp.net, .jpn.com, .kaufen, .kyoto, .lawyer, .love, .market, .me, .mex.com, .moda, .mortgage, .navy, .net, .ninja, .nrw, .online, .ooo, .org, .press, .protection, .pub, .pw, .quebec, .radio.am, .radio.fm, .realty, .rehab, .rent, .republican, .rest, .reviews, .rip, .rocks, .ru.com, .sa.com, .scot, .se.net, .security, .site, .social, .software, .space, .store, .tech, .theatre, .tickets, .top, .uk.com, .uk.net, .us.com, .us.org, .vet, .website, .wiki, .xn--4gbrim, .xn--55qx5d, .xn--5tzm5g, .xn--80asehdb, .xn--80aswg, .xn--c1avg, .xn--czru2d, .xn--i1b6b1a6a2e, .xn--io0a7i, .xn--mk1bu44c, .xn--ngbc5azd, .xn--nqv7f, .xn--t60b56a, .xn--tckwe, .xyz, .za.com.
    *     @var int $period Operation period.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Rouda\OpenProvider\Api\Model\PriceGetPriceResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
    */
    public function getPrice(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\GetPrice($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProvider\Api\Model\DomainSuggestNameDomainRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\DomainSuggestNameDomainResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function suggestNameDomain(\Rouda\OpenProvider\Api\Model\DomainSuggestNameDomainRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\SuggestNameDomain($body), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProvider\Api\Model\DomainTradeDomainRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\DomainTradeDomainResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function tradeDomain(\Rouda\OpenProvider\Api\Model\DomainTradeDomainRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\TradeDomain($body), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProvider\Api\Model\DomainTransferDomainRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\DomainTransferDomainResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function transferDomain(\Rouda\OpenProvider\Api\Model\DomainTransferDomainRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\TransferDomain($body), $fetch);
    }
    /**
     * 
     *
     * @param int $id Domain id number
     * @param array $queryParameters {
     *     @var string $domain.name Domain name without extension.
     *     @var string $domain.extension Domain extension.
     *     @var string $type Type of deletion request.
     *     @var bool $skip_soft_quarantine Deletes domain, skipping the soft quarantine.
     *     @var bool $force_delete Force delete domain even if it has glue records.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\DomainDeleteDomainResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function deleteDomain(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\DeleteDomain($id, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $id Domain id number
     * @param array $queryParameters {
     *     @var string $domain.name Domain name without extension.
     *     @var string $domain.extension Domain extension.
     *     @var bool $with_history Returns domain mutations history.
     *     @var bool $with_api_history Returns domain API calls history.
     *     @var bool $with_additional_data Returns domain additional data.
     *     @var bool $with_verification_email Returns information about domain owner email verification status.
     *     @var bool $with_abuse_details Returns domain abuse details.
     *     @var bool $with_whois_privacy_data Returns WPP data.
     *     @var bool $with_registry_statuses Indicates, if registry EPP statuses should be retrieved.
     *     @var bool $is_deleted Indicates whether object is deleted.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\DomainGetDomainResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getDomain(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\GetDomain($id, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $id Domain id number
     * @param \Rouda\OpenProvider\Api\Model\DomainUpdateDomainRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\DomainUpdateDomainResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updateDomain(int $id, \Rouda\OpenProvider\Api\Model\DomainUpdateDomainRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\UpdateDomain($id, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $id Domain id number
     * @param array $queryParameters {
     *     @var string $domain.name Domain name without extension.
     *     @var string $domain.extension Domain extension.
     *     @var string $auth_code_type Type of transfer authorization code. external (default) or internal (for internal transfers between reseller accounts in Openprovider only).
     *     @var string $sending_type Indicates how authcode should be provisioned to domain owner. For ru / xn--p1ai domains only. Possible values: sms, email letter.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\AuthcodeGetAuthCodeResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getAuthCode(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\GetAuthCode($id, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $id Domain id number
     * @param \Rouda\OpenProvider\Api\Model\AuthcodeResetAuthCodeRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\AuthcodeResetAuthCodeResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function resetAuthCode(int $id, \Rouda\OpenProvider\Api\Model\AuthcodeResetAuthCodeRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\ResetAuthCode($id, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $id Domain id number
     * @param \Rouda\OpenProvider\Api\Model\DomainTryAgainLastOperationRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\ResponseBoolResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function tryAgainLastOperation(int $id, \Rouda\OpenProvider\Api\Model\DomainTryAgainLastOperationRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\TryAgainLastOperation($id, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $id Domain id number
     * @param \Rouda\OpenProvider\Api\Model\DomainRenewDomainRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\DomainRenewDomainResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function renewDomain(int $id, \Rouda\OpenProvider\Api\Model\DomainRenewDomainRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\RenewDomain($id, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $id Domain id number
     * @param \Rouda\OpenProvider\Api\Model\DomainRestoreDomainRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\DomainRestoreDomainResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function restoreDomain(int $id, \Rouda\OpenProvider\Api\Model\DomainRestoreDomainRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\RestoreDomain($id, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $id Domain id number
     * @param \Rouda\OpenProvider\Api\Model\DomainApproveTransferRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\ResponseBoolResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function approveTransfer(int $id, \Rouda\OpenProvider\Api\Model\DomainApproveTransferRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\ApproveTransfer($id, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $id Domain id number
     * @param \Rouda\OpenProvider\Api\Model\DomainSendFoa1Request $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\ResponseBoolResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function sendFoa1(int $id, \Rouda\OpenProvider\Api\Model\DomainSendFoa1Request $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\SendFoa1($id, $body), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $domain.name Domain name without extension.
     *     @var string $domain.extension Domain extension.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\OrderGetEasyDmarcResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getEasyDmarc(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\GetEasyDmarc($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProvider\Api\Model\OrderCreateEasyDmarcRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\OrderCreateEasyDmarcResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createEasyDmarc(\Rouda\OpenProvider\Api\Model\OrderCreateEasyDmarcRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\CreateEasyDmarc($body), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $limit Search query limit.
     *     @var int $offset Search query offset.
     *     @var string $order_by.id desc/asc.
     *     @var array $status Array of order statuses.
     *     @var string $domain.name Domain name without extension.
     *     @var string $domain.extension Domain extension.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\OrderListEasyDmarcResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listEasyDmarc(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\ListEasyDmarc($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $id Easydmarc id (order number)
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\OrderDeleteEasyDmarcResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function deleteEasyDmarc(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\DeleteEasyDmarc($id), $fetch);
    }
    /**
     * 
     *
     * @param int $id Easydmarc id (order number)
     * @param \Rouda\OpenProvider\Api\Model\OrderRetryEasyDmarcRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\OrderRetryEasyDmarcResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function retryEasyDmarc(int $id, \Rouda\OpenProvider\Api\Model\OrderRetryEasyDmarcRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\RetryEasyDmarc($id, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $id Easy Dmarc id (order id)
     * @param array $queryParameters {
     *     @var string $type SSO url on behalf of the customer or reseller.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\OrderGetEasyDmarcSsoResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getEasyDmarcSso(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\GetEasyDmarcSso($id, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $id Object ID.
     *     @var string $name Template name.
     *     @var string $group Email template type. There are several types of ICANN emails that can be customized in Openprovider: -errp (Expired Registration Recovery policy emails) -foa (Form of Authorization emails for domain transfers approval rejection) -ive (Information verification emails, such emails used to verify email address of the customer) -tcn (Trademark Claims Notification emails) -wdrp (Whois Data Reminder Policy emails).
     *     @var int $limit Output limit.
     *     @var int $offset Output offset.
     *     @var bool $is_system Is system.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\EmailListEmailsResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listEmails(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\ListEmails($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProvider\Api\Model\EmailCreateEmailRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\EmailCreateEmailResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createEmail(\Rouda\OpenProvider\Api\Model\EmailCreateEmailRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\CreateEmail($body), $fetch);
    }
    /**
     * 
     *
     * @param int $id Object ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\EmailDeleteEmailResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function deleteEmail(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\DeleteEmail($id), $fetch);
    }
    /**
     * 
     *
     * @param int $id Object ID
     * @param \Rouda\OpenProvider\Api\Model\EmailUpdateEmailRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\EmailUpdateEmailResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updateEmail(int $id, \Rouda\OpenProvider\Api\Model\EmailUpdateEmailRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\UpdateEmail($id, $body), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $limit The limit.
     *     @var int $offset The offset.
     *     @var string $order The order.
     *     @var string $order_by The order by.
     *     @var string $start_creation_date The start creation date.
     *     @var string $end_creation_date The end creation date.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\InvoiceListInvoicesResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listInvoices(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\ListInvoices($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $limit Output limit.
     *     @var int $offset Output offset.
     *     @var string $order_by.id Object ID.
     *     @var string $order_by.key_id License key ID.
     *     @var string $order_by.title Custom license title.
     *     @var string $order_by.product Product type (only Plesk is available).
     *     @var string $order_by.status License status.
     *     @var string $order_by.key_number License key number.
     *     @var string $order_by.expiration_date License expiration date.
     *     @var string $product Product type (only Plesk is available).
     *     @var string $key_number License key number.
     *     @var string $title_pattern Custom title pattern. Wildcard (*) can be sued.
     *     @var string $key_number_pattern License key number pattern. Wildcard (*) can be used.
     *     @var int $parent_key_id Key ID of the partent license.
     *     @var string $status License status.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\LicenseListLicensesWithPriceVersionResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listLicensesWithPriceVersion(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\ListLicensesWithPriceVersion($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $product Product type (only Plesk is available)
     * @param int $keyId License key ID
     * @param \Rouda\OpenProvider\Api\Model\LicenseResetHwidRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\LicenseResetHwidResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function resetHwid(string $product, int $keyId, \Rouda\OpenProvider\Api\Model\LicenseResetHwidRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\ResetHwid($product, $keyId, $body), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $limit Output limit.
     *     @var int $offset Output offset.
     *     @var string $order_by.id Object ID.
     *     @var string $order_by.key_id License key ID.
     *     @var string $order_by.title Custom license title.
     *     @var string $order_by.product Product type (only Plesk is available).
     *     @var string $order_by.status License status.
     *     @var string $order_by.key_number License key number.
     *     @var string $order_by.expiration_date License expiration date.
     *     @var string $product Product type (only Plesk is available).
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\LicenseListItemsResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listItems(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\ListItems($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $limit Output limit.
     *     @var int $offset Output offset.
     *     @var int $key_id License key ID.
     *     @var string $key_number License key number.
     *     @var string $title_pattern Custom title pattern. Wildcard (*) can be used.
     *     @var string $key_number_pattern License key number pattern. Wildcard (*) can be used.
     *     @var int $parent_key_id Key ID of the partent license.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\LicenseListLicensesResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listPleskLicenses(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\ListPleskLicenses($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProvider\Api\Model\LicenseCreatePleskLicenseRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\LicenseCreatePleskLicenseResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createPleskLicense(\Rouda\OpenProvider\Api\Model\LicenseCreatePleskLicenseRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\CreatePleskLicense($body), $fetch);
    }
    /**
     * 
     *
     * @param int $keyId License key ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\LicenseGetLicenseKeyResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getPleskKey(int $keyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\GetPleskKey($keyId), $fetch);
    }
    /**
     * 
     *
     * @param int $keyId License key ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\LicenseDeleteLicenseResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function deletePleskLicense(int $keyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\DeletePleskLicense($keyId), $fetch);
    }
    /**
     * 
     *
     * @param int $keyId License key ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\LicenseGetLicenseResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getPleskLicense(int $keyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\GetPleskLicense($keyId), $fetch);
    }
    /**
     * 
     *
     * @param int $keyId License key ID
     * @param \Rouda\OpenProvider\Api\Model\LicenseUpdatePleskLicenseRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\LicenseUpdateLicenseResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updatePleskLicense(int $keyId, \Rouda\OpenProvider\Api\Model\LicenseUpdatePleskLicenseRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\UpdatePleskLicense($keyId, $body), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $limit Output limit.
     *     @var int $offset Output offset.
     *     @var int $key_id License key ID.
     *     @var string $key_number License key number.
     *     @var string $title_pattern Custom title pattern. Wildcard (*) can be used.
     *     @var string $key_number_pattern License key number pattern. Wildcard (*) can be used.
     *     @var int $parent_key_id Key ID of the partent license.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\LicenseListLicensesResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listVirtuozzoLicenses(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\ListVirtuozzoLicenses($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProvider\Api\Model\LicenseCreateVirtuozzoLicenseRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\LicenseCreateVirtuozzoLicenseResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createVirtuozzoLicense(\Rouda\OpenProvider\Api\Model\LicenseCreateVirtuozzoLicenseRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\CreateVirtuozzoLicense($body), $fetch);
    }
    /**
     * 
     *
     * @param int $keyId License key ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\LicenseDeleteLicenseResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function deleteVirtuozzoLicense(int $keyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\DeleteVirtuozzoLicense($keyId), $fetch);
    }
    /**
     * 
     *
     * @param int $keyId License key ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\LicenseGetLicenseResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getVirtuozzoLicense(int $keyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\GetVirtuozzoLicense($keyId), $fetch);
    }
    /**
     * 
     *
     * @param int $keyId License key ID
     * @param \Rouda\OpenProvider\Api\Model\LicenseUpdateVirtuozzoLicenseRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\LicenseUpdateLicenseResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updateVirtuozzoLicense(int $keyId, \Rouda\OpenProvider\Api\Model\LicenseUpdateVirtuozzoLicenseRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\UpdateVirtuozzoLicense($keyId, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $keyId License key ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\LicenseGetLicenseKeyResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getVirtuozzoKey(int $keyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\GetVirtuozzoKey($keyId), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $limit The limit.
     *     @var int $offset The offset.
     *     @var string $order The order.
     *     @var string $order_by The order by.
     *     @var string $type The type.
     *     @var string $status The status.
     *     @var string $start_creation_date The start creation date.
     *     @var string $end_creation_date The end creation date.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\PaymentListPaymentsResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listPayments(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\ListPayments($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var bool $with_additional_data Retrieves objects with (1) or without (0) additional data.
     *     @var bool $with_statistics Indicates if reseller statistics should be retrieved.
     *     @var bool $with_settings Indicates if reseller settings should be retrieved.
     *     @var bool $with_contacts Indicates if reseller contacts should be retrieved.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\ResellerGetResellerResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getReseller(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\GetReseller($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\SettingsGetSettingsResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getSettings(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\GetSettings(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\StatisticsGetStatisticsResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getStatistics(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\GetStatistics(), $fetch);
    }
    /**
     * 
     *
     * @param int $id Object ID
     * @param \Rouda\OpenProvider\Api\Model\ResellerUpdateResellerRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\ResellerUpdateResellerResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updateReseller(int $id, \Rouda\OpenProvider\Api\Model\ResellerUpdateResellerRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\UpdateReseller($id, $body), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProvider\Api\Model\SeDomainCreateDomainRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\ResponseBoolResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createDomainMixin8(\Rouda\OpenProvider\Api\Model\SeDomainCreateDomainRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\CreateDomainMixin8($body), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName Domain full name
     * @param array $queryParameters {
     *     @var bool $bundle Indicates if old subscriptions backward compatibility is used.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\ResponseBoolResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function deleteDomainMixin8(string $domainName, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\DeleteDomainMixin8($domainName, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName Domain full name
     * @param array $queryParameters {
     *     @var bool $with_records Indicates, whether records should be displayed in output.
     *     @var bool $bundle Indicates if old subscriptions backward compatibility is used.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\SeDomainGetDomainResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getDomainMixin8(string $domainName, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\GetDomainMixin8($domainName, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName Domain full name
     * @param \Rouda\OpenProvider\Api\Model\SeDomainUpdateDomainRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\ResponseBoolResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updateDomainMixin8(string $domainName, \Rouda\OpenProvider\Api\Model\SeDomainUpdateDomainRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\UpdateDomainMixin8($domainName, $body), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProvider\Api\Model\SpamExpertGenerateLoginURLRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\SpamExpertGenerateLoginURLResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function generateLoginURL(\Rouda\OpenProvider\Api\Model\SpamExpertGenerateLoginURLRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\GenerateLoginURL($body), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $product_id ID of product order will be created for.
     *     @var string $domain Domain name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\ApproveremailListApproverEmailsResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listApproverEmails(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\ListApproverEmails($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProvider\Api\Model\CsrCreateCsrRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\CsrCreateCsrResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createCsr(\Rouda\OpenProvider\Api\Model\CsrCreateCsrRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\CreateCsr($body), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProvider\Api\Model\CsrDecodeCsrRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\CsrDecodeCsrResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function decodeCsr(\Rouda\OpenProvider\Api\Model\CsrDecodeCsrRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\DecodeCsr($body), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $limit Search query limit.
     *     @var int $offset Search query offset.
     *     @var string $order_by.common_name desc/asc.
     *     @var string $order_by.order_date desc/asc.
     *     @var string $order_by.active_date desc/asc.
     *     @var string $order_by.expiration_date desc/asc.
     *     @var string $order_by.status desc/asc.
     *     @var string $order_by.product_name desc/asc.
     *     @var string $common_name_pattern Certificate common name pattern. Wildcard (*) can be used.
     *     @var array $status Array of order statuses.
     *     @var string $contact_handle Contact handle.
     *     @var bool $show_expiring Indicates, whether to return only certificates that are expiring within 30 days.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\OrderListOrdersResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listOrders(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\ListOrders($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProvider\Api\Model\OrderCreateOrderRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\OrderCreateOrderResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createOrder(\Rouda\OpenProvider\Api\Model\OrderCreateOrderRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\CreateOrder($body), $fetch);
    }
    /**
     * 
     *
     * @param int $id Object id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\OrderGetOrderResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getOrder(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\GetOrder($id), $fetch);
    }
    /**
     * 
     *
     * @param int $id Object id
     * @param \Rouda\OpenProvider\Api\Model\OrderUpdateOrderRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\OrderUpdateOrderResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updateOrder(int $id, \Rouda\OpenProvider\Api\Model\OrderUpdateOrderRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\UpdateOrder($id, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $id Object id
     * @param \Rouda\OpenProvider\Api\Model\ApproveremailUpdateApproverEmailAddressRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\ApproveremailUpdateApproverEmailAddressResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updateApproverEmailAddress(int $id, \Rouda\OpenProvider\Api\Model\ApproveremailUpdateApproverEmailAddressRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\UpdateApproverEmailAddress($id, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $id Object id
     * @param \Rouda\OpenProvider\Api\Model\ApproveremailResendApproverEmailRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\ApproveremailResendApproverEmailResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function resendApproverEmail(int $id, \Rouda\OpenProvider\Api\Model\ApproveremailResendApproverEmailRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\ResendApproverEmail($id, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $id Object id
     * @param \Rouda\OpenProvider\Api\Model\OrderCancelOrderRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\OrderCancelOrderResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function cancelOrder(int $id, \Rouda\OpenProvider\Api\Model\OrderCancelOrderRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\CancelOrder($id, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $id Object id
     * @param \Rouda\OpenProvider\Api\Model\OtptokenCreateOtpTokenRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\OtptokenCreateOtpTokenResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createOtpToken(int $id, \Rouda\OpenProvider\Api\Model\OtptokenCreateOtpTokenRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\CreateOtpToken($id, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $id Object id
     * @param \Rouda\OpenProvider\Api\Model\OrderReissueOrderRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\OrderReissueOrderResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function reissueOrder(int $id, \Rouda\OpenProvider\Api\Model\OrderReissueOrderRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\ReissueOrder($id, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $id Object id
     * @param \Rouda\OpenProvider\Api\Model\OrderRenewOrderRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\OrderRenewOrderResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function renewOrder(int $id, \Rouda\OpenProvider\Api\Model\OrderRenewOrderRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\RenewOrder($id, $body), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $limit Search query limit.
     *     @var int $offset Search query offset.
     *     @var bool $with_price Returns product price in the response.
     *     @var bool $with_supported_software Returns a list of supported software patforms.
     *     @var bool $with_description Returns a description for each product, if exists.
     *     @var string $order_by.name Sorting type (asc/desc).
     *     @var string $order_by.brand_name Sorting type (asc/desc).
     *     @var string $order_by.category Sorting type (asc/desc).
     *     @var string $order_by.sub_category Sorting type (asc/desc).
     *     @var string $order_by.brand_seqno Sorting type (asc/desc).
     *     @var string $order_by.product_seqno Sorting type (asc/desc).
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\ProductListProductsResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listProducts(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\ListProducts($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $id Object id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\ProductGetProductResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getProduct(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\GetProduct($id), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $key The key of the tag. Allowed values: 'customer'.
     *     @var string $value The value of the tag. I.e.: VIP customer.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\TagDeleteTagResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTag(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\DeleteTag($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $key The key of the tag. Allowed values: 'customer'.
     *     @var string $value The value of the tag. I.e.: VIP customer.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\TagListTagsResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listTags(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\ListTags($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProvider\Api\Model\HelperstagTag $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\TagCreateTagResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createTag(\Rouda\OpenProvider\Api\Model\HelperstagTag $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\CreateTag($body), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $limit Search query limit.
     *     @var int $offset Search query offset.
     *     @var string $order Sorts output ASC or DESC.
     *     @var string $order_by Sorts output by a field.
     *     @var array $extensions Array of extensions.
     *     @var string $name_pattern Extension name pattern. Wildcard (*) can be used.
     *     @var bool $only_names Returns only extension names in the output.
     *     @var bool $with_description Returns additional extension description.
     *     @var bool $with_restrictions Returns list of extension restrictions.
     *     @var bool $with_usage_count Returns number of domains using specified extension in this account.
     *     @var array $with_application_mode Array of extension application modes.
     *     @var bool $with_price Returns extension prices.
     *     @var bool $with_level_prices Returns extension prices for each Openprovider discount tier.
     *     @var bool $is_active Indicates, if extension is active.
     *     @var bool $is_new_gtld Indicates, if extension is a newGTLD.
     *     @var string $status Extension status.
     *     @var string $application_mode Pre-registration mode.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\TldListTldsResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listTlds(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\ListTlds($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $name Extension name
     * @param array $queryParameters {
     *     @var int $limit Search query limit.
     *     @var int $offset Search query offset.
     *     @var bool $with_description Returns additional extension description.
     *     @var bool $with_restrictions Returns list of extension restrictions.
     *     @var bool $with_price Returns extension prices.
     *     @var bool $with_level_prices Returns extension prices for each Openprovider discount tier.
     *     @var bool $with_usage_count Returns number of domains using specified extension in this account.
     *     @var array $status Extension status.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\TldGetTldResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getTld(string $name, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\GetTld($name, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $limit The limit.
     *     @var int $offset The offset.
     *     @var string $order The order.
     *     @var string $order_by The order by.
     *     @var string $start_creation_date The start creation date.
     *     @var string $end_creation_date The end creation date.
     *     @var string $filter_for_subject The filter for subject.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProvider\Api\Model\TransactionListTransactionsResponse|\Rouda\OpenProvider\Api\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listTransactions(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProvider\Api\Endpoint\ListTransactions($queryParameters), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://api.openprovider.eu');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Rouda\OpenProvider\Api\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}