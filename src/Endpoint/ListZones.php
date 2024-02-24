<?php

namespace Rouda\OpenProviderAPI\Endpoint;

class ListZones extends \Rouda\OpenProviderAPI\Runtime\Client\BaseEndpoint implements \Rouda\OpenProviderAPI\Runtime\Client\Endpoint
{
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
        return '/v1beta/dns/zones';
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
        $optionsResolver->setDefined(['limit', 'offset', 'order_by.creation_date', 'order_by.modification_date', 'order_by.name', 'type', 'name_pattern', 'with_records', 'with_history', 'with_dnskey', 'provider']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['limit' => 100, 'order_by.creation_date' => 'desc']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('order_by.creation_date', ['string']);
        $optionsResolver->addAllowedTypes('order_by.modification_date', ['string']);
        $optionsResolver->addAllowedTypes('order_by.name', ['string']);
        $optionsResolver->addAllowedTypes('type', ['string']);
        $optionsResolver->addAllowedTypes('name_pattern', ['string']);
        $optionsResolver->addAllowedTypes('with_records', ['bool']);
        $optionsResolver->addAllowedTypes('with_history', ['bool']);
        $optionsResolver->addAllowedTypes('with_dnskey', ['bool']);
        $optionsResolver->addAllowedTypes('provider', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Rouda\OpenProviderAPI\Model\ZoneListZonesResponse|\Rouda\OpenProviderAPI\Model\ErrorError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Rouda\\OpenProviderAPI\\Model\\ZoneListZonesResponse', 'json');
        }
        return $serializer->deserialize($body, 'Rouda\\OpenProviderAPI\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return ['Bearer'];
    }
}