<?php

namespace Rouda\OpenProviderAPI\Endpoint;

class ListNameservers extends \Rouda\OpenProviderAPI\Runtime\Client\BaseEndpoint implements \Rouda\OpenProviderAPI\Runtime\Client\Endpoint
{
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
        return '/v1beta/dns/nameservers';
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
        $optionsResolver->setDefined(['name', 'ip', 'ip6', 'pattern', 'limit', 'offset', 'order', 'order_by']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['limit' => 100, 'order' => 'asc', 'order_by' => 'name']);
        $optionsResolver->addAllowedTypes('name', ['string']);
        $optionsResolver->addAllowedTypes('ip', ['string']);
        $optionsResolver->addAllowedTypes('ip6', ['string']);
        $optionsResolver->addAllowedTypes('pattern', ['string']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['string']);
        $optionsResolver->addAllowedTypes('order', ['string']);
        $optionsResolver->addAllowedTypes('order_by', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Rouda\OpenProviderAPI\Model\NameserverListNameserversResponse|\Rouda\OpenProviderAPI\Model\ErrorError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Rouda\\OpenProviderAPI\\Model\\NameserverListNameserversResponse', 'json');
        }
        return $serializer->deserialize($body, 'Rouda\\OpenProviderAPI\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return ['Bearer'];
    }
}