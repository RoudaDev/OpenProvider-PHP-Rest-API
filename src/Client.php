<?php

namespace Rouda\OpenProviderAPI;

class Client extends \Rouda\OpenProviderAPI\Runtime\Client\Client
{
    /**
     * 
     *
     * @param \Rouda\OpenProviderAPI\Model\AuthLoginRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\AuthLoginResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function login(\Rouda\OpenProviderAPI\Model\AuthLoginRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\Login($body), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\ContactListContactsResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listContacts(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\ListContacts($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProviderAPI\Model\ContactCreateContactRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\ContactCreateContactResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createContact(\Rouda\OpenProviderAPI\Model\ContactCreateContactRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\CreateContact($body), $fetch);
    }
    /**
     * 
     *
     * @param int $id Object ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\ContactDeleteContactResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function deleteContact(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\DeleteContact($id), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\ContactGetContactResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getContact(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\GetContact($id, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $id Object ID
     * @param \Rouda\OpenProviderAPI\Model\ContactUpdateContactRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\ContactUpdateContactResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updateContact(int $id, \Rouda\OpenProviderAPI\Model\ContactUpdateContactRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\UpdateContact($id, $body), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\CustomerListCustomersResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listCustomers(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\ListCustomers($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProviderAPI\Model\CustomerCreateCustomerRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\CustomerCreateCustomerResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createCustomer(\Rouda\OpenProviderAPI\Model\CustomerCreateCustomerRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\CreateCustomer($body), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\EmailListDomainVerificationsResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listDomainEmailVerifications(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\ListDomainEmailVerifications($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProviderAPI\Model\EmailRestartEmailVerificationRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\EmailRestartEmailVerificationResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function restartEmailVerification(\Rouda\OpenProviderAPI\Model\EmailRestartEmailVerificationRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\RestartEmailVerification($body), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProviderAPI\Model\EmailStartEmailVerificationRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\EmailStartEmailVerificationResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function startEmailVerification(\Rouda\OpenProviderAPI\Model\EmailStartEmailVerificationRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\StartEmailVerification($body), $fetch);
    }
    /**
     * 
     *
     * @param string $handle Customer unique identifier or handle, which can be created via CreateCustomer API method
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\CustomerDeleteCustomerResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCustomer(string $handle, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\DeleteCustomer($handle), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\CustomerGetCustomerResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomer(string $handle, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\GetCustomer($handle, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $handle Customer unique identifier or handle, which can be created via CreateCustomer API method
     * @param \Rouda\OpenProviderAPI\Model\CustomerUpdateCustomerRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\CustomerUpdateCustomerResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updateCustomer(string $handle, \Rouda\OpenProviderAPI\Model\CustomerUpdateCustomerRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\UpdateCustomer($handle, $body), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProviderAPI\Model\DomainTokenCreateTokenRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\DomainTokenCreateTokenResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createToken(\Rouda\OpenProviderAPI\Model\DomainTokenCreateTokenRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\CreateToken($body), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\NameserverListNameserversResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listNameservers(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\ListNameservers($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProviderAPI\Model\NameserverNameserver $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\NameserverCreateNameserverResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createNameserver(\Rouda\OpenProviderAPI\Model\NameserverNameserver $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\CreateNameserver($body), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\NsGroupListGroupsResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listGroups(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\ListGroups($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProviderAPI\Model\NsGroupCreateGroupRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\NsGroupCreateGroupResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createGroup(\Rouda\OpenProviderAPI\Model\NsGroupCreateGroupRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\CreateGroup($body), $fetch);
    }
    /**
     * 
     *
     * @param string $nsGroup Plain text name of the nameserver group, which can consist of several nameservers with attached IPs. Once created in Openprovider reseller account, nameserver group can be reused for operations with domains.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\NsGroupGroupBoolResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function deleteGroup(string $nsGroup, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\DeleteGroup($nsGroup), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\NsGroupGetGroupResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getGroup(string $nsGroup, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\GetGroup($nsGroup, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $nsGroup Plain text name of the nameserver group, which can consist of several nameservers with attached IPs. Once created in Openprovider reseller account, nameserver group can be reused for operations with domains.
     * @param \Rouda\OpenProviderAPI\Model\NsGroupUpdateGroupRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\NsGroupGroupBoolResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updateGroup(string $nsGroup, \Rouda\OpenProviderAPI\Model\NsGroupUpdateGroupRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\UpdateGroup($nsGroup, $body), $fetch);
    }
    /**
     * 
     *
     * @param string $name Nameserver name
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\NameserverNameserverBoolResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function deleteNameserver(string $name, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\DeleteNameserver($name), $fetch);
    }
    /**
     * 
     *
     * @param string $name Nameserver name
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\NameserverGetNameserverResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getNameserver(string $name, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\GetNameserver($name), $fetch);
    }
    /**
     * 
     *
     * @param string $name Nameserver name
     * @param \Rouda\OpenProviderAPI\Model\NameserverNameserver $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\NameserverNameserverBoolResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updateNameserver(string $name, \Rouda\OpenProviderAPI\Model\NameserverNameserver $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\UpdateNameserver($name, $body), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\TemplateListTemplatesResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listTemplates(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\ListTemplates($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProviderAPI\Model\TemplateCreateTemplateRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\TemplateCreateTemplateResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createTemplate(\Rouda\OpenProviderAPI\Model\TemplateCreateTemplateRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\CreateTemplate($body), $fetch);
    }
    /**
     * 
     *
     * @param int $id Template ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\TemplateTemplateBoolResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTemplate(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\DeleteTemplate($id), $fetch);
    }
    /**
     * 
     *
     * @param int $id Template ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\TemplateGetTemplateResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getTemplate(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\GetTemplate($id), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\ZoneListZonesResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listZones(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\ListZones($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProviderAPI\Model\ZoneCreateZoneRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\ZoneZoneBoolResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createZone(\Rouda\OpenProviderAPI\Model\ZoneCreateZoneRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\CreateZone($body), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\ZoneZoneBoolResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function deleteZone(string $name, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\DeleteZone($name, $queryParameters), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\ZoneGetZoneResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getZone(string $name, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\GetZone($name, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $name Name of the domain to which DNS zone corresponds
     * @param \Rouda\OpenProviderAPI\Model\ZoneUpdateZoneRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\ZoneZoneBoolResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updateZone(string $name, \Rouda\OpenProviderAPI\Model\ZoneUpdateZoneRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\UpdateZone($name, $body), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\RecordListZoneRecordsResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listZoneRecords(string $name, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\ListZoneRecords($name, $queryParameters), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\DomainListDomainsResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listDomains(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\ListDomains($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProviderAPI\Model\DomainCreateDomainRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\DomainCreateDomainResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createDomain(\Rouda\OpenProviderAPI\Model\DomainCreateDomainRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\CreateDomain($body), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\AdditionalDataGetAdditionalDataResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getAdditionalData(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\GetAdditionalData($queryParameters), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\CustomerGetDataResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getData(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\GetData($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProviderAPI\Model\DomainCheckDomainRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\DomainCheckDomainResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function checkDomain(\Rouda\OpenProviderAPI\Model\DomainCheckDomainRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\CheckDomain($body), $fetch);
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
    * @return null|\Rouda\OpenProviderAPI\Model\PriceGetPriceResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
    */
    public function getPrice(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\GetPrice($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProviderAPI\Model\DomainSuggestNameDomainRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\DomainSuggestNameDomainResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function suggestNameDomain(\Rouda\OpenProviderAPI\Model\DomainSuggestNameDomainRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\SuggestNameDomain($body), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProviderAPI\Model\DomainTradeDomainRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\DomainTradeDomainResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function tradeDomain(\Rouda\OpenProviderAPI\Model\DomainTradeDomainRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\TradeDomain($body), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProviderAPI\Model\DomainTransferDomainRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\DomainTransferDomainResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function transferDomain(\Rouda\OpenProviderAPI\Model\DomainTransferDomainRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\TransferDomain($body), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\DomainDeleteDomainResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function deleteDomain(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\DeleteDomain($id, $queryParameters), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\DomainGetDomainResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getDomain(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\GetDomain($id, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $id Domain id number
     * @param \Rouda\OpenProviderAPI\Model\DomainUpdateDomainRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\DomainUpdateDomainResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updateDomain(int $id, \Rouda\OpenProviderAPI\Model\DomainUpdateDomainRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\UpdateDomain($id, $body), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\AuthcodeGetAuthCodeResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getAuthCode(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\GetAuthCode($id, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $id Domain id number
     * @param \Rouda\OpenProviderAPI\Model\AuthcodeResetAuthCodeRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\AuthcodeResetAuthCodeResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function resetAuthCode(int $id, \Rouda\OpenProviderAPI\Model\AuthcodeResetAuthCodeRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\ResetAuthCode($id, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $id Domain id number
     * @param \Rouda\OpenProviderAPI\Model\DomainTryAgainLastOperationRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\ResponseBoolResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function tryAgainLastOperation(int $id, \Rouda\OpenProviderAPI\Model\DomainTryAgainLastOperationRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\TryAgainLastOperation($id, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $id Domain id number
     * @param \Rouda\OpenProviderAPI\Model\DomainRenewDomainRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\DomainRenewDomainResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function renewDomain(int $id, \Rouda\OpenProviderAPI\Model\DomainRenewDomainRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\RenewDomain($id, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $id Domain id number
     * @param \Rouda\OpenProviderAPI\Model\DomainRestoreDomainRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\DomainRestoreDomainResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function restoreDomain(int $id, \Rouda\OpenProviderAPI\Model\DomainRestoreDomainRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\RestoreDomain($id, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $id Domain id number
     * @param \Rouda\OpenProviderAPI\Model\DomainApproveTransferRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\ResponseBoolResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function approveTransfer(int $id, \Rouda\OpenProviderAPI\Model\DomainApproveTransferRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\ApproveTransfer($id, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $id Domain id number
     * @param \Rouda\OpenProviderAPI\Model\DomainSendFoa1Request $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\ResponseBoolResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function sendFoa1(int $id, \Rouda\OpenProviderAPI\Model\DomainSendFoa1Request $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\SendFoa1($id, $body), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\OrderGetEasyDmarcResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getEasyDmarc(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\GetEasyDmarc($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProviderAPI\Model\OrderCreateEasyDmarcRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\OrderCreateEasyDmarcResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createEasyDmarc(\Rouda\OpenProviderAPI\Model\OrderCreateEasyDmarcRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\CreateEasyDmarc($body), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\OrderListEasyDmarcResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listEasyDmarc(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\ListEasyDmarc($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $id Easydmarc id (order number)
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\OrderDeleteEasyDmarcResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function deleteEasyDmarc(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\DeleteEasyDmarc($id), $fetch);
    }
    /**
     * 
     *
     * @param int $id Easydmarc id (order number)
     * @param \Rouda\OpenProviderAPI\Model\OrderRetryEasyDmarcRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\OrderRetryEasyDmarcResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function retryEasyDmarc(int $id, \Rouda\OpenProviderAPI\Model\OrderRetryEasyDmarcRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\RetryEasyDmarc($id, $body), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\OrderGetEasyDmarcSsoResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getEasyDmarcSso(int $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\GetEasyDmarcSso($id, $queryParameters), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\EmailListEmailsResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listEmails(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\ListEmails($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProviderAPI\Model\EmailCreateEmailRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\EmailCreateEmailResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createEmail(\Rouda\OpenProviderAPI\Model\EmailCreateEmailRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\CreateEmail($body), $fetch);
    }
    /**
     * 
     *
     * @param int $id Object ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\EmailDeleteEmailResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function deleteEmail(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\DeleteEmail($id), $fetch);
    }
    /**
     * 
     *
     * @param int $id Object ID
     * @param \Rouda\OpenProviderAPI\Model\EmailUpdateEmailRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\EmailUpdateEmailResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updateEmail(int $id, \Rouda\OpenProviderAPI\Model\EmailUpdateEmailRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\UpdateEmail($id, $body), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\InvoiceListInvoicesResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listInvoices(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\ListInvoices($queryParameters), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\LicenseListLicensesWithPriceVersionResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listLicensesWithPriceVersion(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\ListLicensesWithPriceVersion($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $product Product type (only Plesk is available)
     * @param int $keyId License key ID
     * @param \Rouda\OpenProviderAPI\Model\LicenseResetHwidRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\LicenseResetHwidResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function resetHwid(string $product, int $keyId, \Rouda\OpenProviderAPI\Model\LicenseResetHwidRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\ResetHwid($product, $keyId, $body), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\LicenseListItemsResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listItems(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\ListItems($queryParameters), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\LicenseListLicensesResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listPleskLicenses(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\ListPleskLicenses($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProviderAPI\Model\LicenseCreatePleskLicenseRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\LicenseCreatePleskLicenseResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createPleskLicense(\Rouda\OpenProviderAPI\Model\LicenseCreatePleskLicenseRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\CreatePleskLicense($body), $fetch);
    }
    /**
     * 
     *
     * @param int $keyId License key ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\LicenseGetLicenseKeyResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getPleskKey(int $keyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\GetPleskKey($keyId), $fetch);
    }
    /**
     * 
     *
     * @param int $keyId License key ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\LicenseDeleteLicenseResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function deletePleskLicense(int $keyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\DeletePleskLicense($keyId), $fetch);
    }
    /**
     * 
     *
     * @param int $keyId License key ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\LicenseGetLicenseResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getPleskLicense(int $keyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\GetPleskLicense($keyId), $fetch);
    }
    /**
     * 
     *
     * @param int $keyId License key ID
     * @param \Rouda\OpenProviderAPI\Model\LicenseUpdatePleskLicenseRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\LicenseUpdateLicenseResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updatePleskLicense(int $keyId, \Rouda\OpenProviderAPI\Model\LicenseUpdatePleskLicenseRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\UpdatePleskLicense($keyId, $body), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\LicenseListLicensesResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listVirtuozzoLicenses(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\ListVirtuozzoLicenses($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProviderAPI\Model\LicenseCreateVirtuozzoLicenseRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\LicenseCreateVirtuozzoLicenseResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createVirtuozzoLicense(\Rouda\OpenProviderAPI\Model\LicenseCreateVirtuozzoLicenseRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\CreateVirtuozzoLicense($body), $fetch);
    }
    /**
     * 
     *
     * @param int $keyId License key ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\LicenseDeleteLicenseResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function deleteVirtuozzoLicense(int $keyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\DeleteVirtuozzoLicense($keyId), $fetch);
    }
    /**
     * 
     *
     * @param int $keyId License key ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\LicenseGetLicenseResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getVirtuozzoLicense(int $keyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\GetVirtuozzoLicense($keyId), $fetch);
    }
    /**
     * 
     *
     * @param int $keyId License key ID
     * @param \Rouda\OpenProviderAPI\Model\LicenseUpdateVirtuozzoLicenseRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\LicenseUpdateLicenseResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updateVirtuozzoLicense(int $keyId, \Rouda\OpenProviderAPI\Model\LicenseUpdateVirtuozzoLicenseRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\UpdateVirtuozzoLicense($keyId, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $keyId License key ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\LicenseGetLicenseKeyResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getVirtuozzoKey(int $keyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\GetVirtuozzoKey($keyId), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\PaymentListPaymentsResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listPayments(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\ListPayments($queryParameters), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\ResellerGetResellerResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getReseller(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\GetReseller($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\SettingsGetSettingsResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getSettings(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\GetSettings(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\StatisticsGetStatisticsResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getStatistics(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\GetStatistics(), $fetch);
    }
    /**
     * 
     *
     * @param int $id Object ID
     * @param \Rouda\OpenProviderAPI\Model\ResellerUpdateResellerRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\ResellerUpdateResellerResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updateReseller(int $id, \Rouda\OpenProviderAPI\Model\ResellerUpdateResellerRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\UpdateReseller($id, $body), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProviderAPI\Model\SeDomainCreateDomainRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\ResponseBoolResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createDomainMixin8(\Rouda\OpenProviderAPI\Model\SeDomainCreateDomainRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\CreateDomainMixin8($body), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\ResponseBoolResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function deleteDomainMixin8(string $domainName, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\DeleteDomainMixin8($domainName, $queryParameters), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\SeDomainGetDomainResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getDomainMixin8(string $domainName, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\GetDomainMixin8($domainName, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $domainName Domain full name
     * @param \Rouda\OpenProviderAPI\Model\SeDomainUpdateDomainRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\ResponseBoolResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updateDomainMixin8(string $domainName, \Rouda\OpenProviderAPI\Model\SeDomainUpdateDomainRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\UpdateDomainMixin8($domainName, $body), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProviderAPI\Model\SpamExpertGenerateLoginURLRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\SpamExpertGenerateLoginURLResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function generateLoginURL(\Rouda\OpenProviderAPI\Model\SpamExpertGenerateLoginURLRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\GenerateLoginURL($body), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\ApproveremailListApproverEmailsResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listApproverEmails(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\ListApproverEmails($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProviderAPI\Model\CsrCreateCsrRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\CsrCreateCsrResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createCsr(\Rouda\OpenProviderAPI\Model\CsrCreateCsrRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\CreateCsr($body), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProviderAPI\Model\CsrDecodeCsrRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\CsrDecodeCsrResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function decodeCsr(\Rouda\OpenProviderAPI\Model\CsrDecodeCsrRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\DecodeCsr($body), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\OrderListOrdersResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listOrders(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\ListOrders($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProviderAPI\Model\OrderCreateOrderRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\OrderCreateOrderResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createOrder(\Rouda\OpenProviderAPI\Model\OrderCreateOrderRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\CreateOrder($body), $fetch);
    }
    /**
     * 
     *
     * @param int $id Object id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\OrderGetOrderResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getOrder(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\GetOrder($id), $fetch);
    }
    /**
     * 
     *
     * @param int $id Object id
     * @param \Rouda\OpenProviderAPI\Model\OrderUpdateOrderRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\OrderUpdateOrderResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updateOrder(int $id, \Rouda\OpenProviderAPI\Model\OrderUpdateOrderRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\UpdateOrder($id, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $id Object id
     * @param \Rouda\OpenProviderAPI\Model\ApproveremailUpdateApproverEmailAddressRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\ApproveremailUpdateApproverEmailAddressResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updateApproverEmailAddress(int $id, \Rouda\OpenProviderAPI\Model\ApproveremailUpdateApproverEmailAddressRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\UpdateApproverEmailAddress($id, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $id Object id
     * @param \Rouda\OpenProviderAPI\Model\ApproveremailResendApproverEmailRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\ApproveremailResendApproverEmailResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function resendApproverEmail(int $id, \Rouda\OpenProviderAPI\Model\ApproveremailResendApproverEmailRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\ResendApproverEmail($id, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $id Object id
     * @param \Rouda\OpenProviderAPI\Model\OrderCancelOrderRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\OrderCancelOrderResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function cancelOrder(int $id, \Rouda\OpenProviderAPI\Model\OrderCancelOrderRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\CancelOrder($id, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $id Object id
     * @param \Rouda\OpenProviderAPI\Model\OtptokenCreateOtpTokenRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\OtptokenCreateOtpTokenResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createOtpToken(int $id, \Rouda\OpenProviderAPI\Model\OtptokenCreateOtpTokenRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\CreateOtpToken($id, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $id Object id
     * @param \Rouda\OpenProviderAPI\Model\OrderReissueOrderRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\OrderReissueOrderResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function reissueOrder(int $id, \Rouda\OpenProviderAPI\Model\OrderReissueOrderRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\ReissueOrder($id, $body), $fetch);
    }
    /**
     * 
     *
     * @param int $id Object id
     * @param \Rouda\OpenProviderAPI\Model\OrderRenewOrderRequest $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\OrderRenewOrderResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function renewOrder(int $id, \Rouda\OpenProviderAPI\Model\OrderRenewOrderRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\RenewOrder($id, $body), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\ProductListProductsResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listProducts(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\ListProducts($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $id Object id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\ProductGetProductResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getProduct(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\GetProduct($id), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\TagDeleteTagResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTag(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\DeleteTag($queryParameters), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\TagListTagsResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listTags(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\ListTags($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param \Rouda\OpenProviderAPI\Model\HelperstagTag $body 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Rouda\OpenProviderAPI\Model\TagCreateTagResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createTag(\Rouda\OpenProviderAPI\Model\HelperstagTag $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\CreateTag($body), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\TldListTldsResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listTlds(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\ListTlds($queryParameters), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\TldGetTldResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getTld(string $name, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\GetTld($name, $queryParameters), $fetch);
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
     * @return null|\Rouda\OpenProviderAPI\Model\TransactionListTransactionsResponse|\Rouda\OpenProviderAPI\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listTransactions(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Rouda\OpenProviderAPI\Endpoint\ListTransactions($queryParameters), $fetch);
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
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Rouda\OpenProviderAPI\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}