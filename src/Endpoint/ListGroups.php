<?php

namespace Rouda\OpenProviderAPI\Endpoint;

class ListGroups extends \Rouda\OpenProviderAPI\Runtime\Client\BaseEndpoint implements \Rouda\OpenProviderAPI\Runtime\Client\Endpoint
{
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
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Rouda\OpenProviderAPI\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/v1beta/dns/nameservers/groups';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['limit', 'offset', 'order_by.ns_group', 'order_by.domain_count', 'order_by.ns_count', 'with_domain_count', 'with_ns_count', 'ns_group_pattern', 'ns_name_pattern', 'ns_ip_pattern']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['limit' => 100, 'order_by.ns_group' => 'asc']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('order_by.ns_group', ['string']);
        $optionsResolver->addAllowedTypes('order_by.domain_count', ['string']);
        $optionsResolver->addAllowedTypes('order_by.ns_count', ['string']);
        $optionsResolver->addAllowedTypes('with_domain_count', ['bool']);
        $optionsResolver->addAllowedTypes('with_ns_count', ['bool']);
        $optionsResolver->addAllowedTypes('ns_group_pattern', ['string']);
        $optionsResolver->addAllowedTypes('ns_name_pattern', ['string']);
        $optionsResolver->addAllowedTypes('ns_ip_pattern', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Rouda\OpenProviderAPI\Model\NsGroupListGroupsResponse|\Rouda\OpenProviderAPI\Model\ErrorError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Rouda\\OpenProviderAPI\\Model\\NsGroupListGroupsResponse', 'json');
        }
        return $serializer->deserialize($body, 'Rouda\\OpenProviderAPI\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return ['Bearer'];
    }
}