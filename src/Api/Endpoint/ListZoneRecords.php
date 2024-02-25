<?php

namespace Rouda\OpenProvider\Api\Endpoint;

class ListZoneRecords extends \Rouda\OpenProvider\Api\Runtime\Client\BaseEndpoint implements \Rouda\OpenProvider\Api\Runtime\Client\Endpoint
{
    protected $name;
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
     */
    public function __construct(string $name, array $queryParameters = [])
    {
        $this->name = $name;
        $this->queryParameters = $queryParameters;
    }
    use \Rouda\OpenProvider\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{name}'], [$this->name], '/v1beta/dns/zones/{name}/records');
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
        $optionsResolver->setDefined(['zone_id', 'limit', 'offset', 'order_by.type', 'order_by.name', 'order_by.value', 'order_by.ttl', 'order_by.prio', 'record_name_pattern', 'value_pattern', 'type', 'prio', 'ttl', 'zone_provider']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['limit' => 100, 'order_by.type' => 'asc', 'order_by.name' => 'asc']);
        $optionsResolver->addAllowedTypes('zone_id', ['int']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('order_by.type', ['string']);
        $optionsResolver->addAllowedTypes('order_by.name', ['string']);
        $optionsResolver->addAllowedTypes('order_by.value', ['string']);
        $optionsResolver->addAllowedTypes('order_by.ttl', ['string']);
        $optionsResolver->addAllowedTypes('order_by.prio', ['string']);
        $optionsResolver->addAllowedTypes('record_name_pattern', ['string']);
        $optionsResolver->addAllowedTypes('value_pattern', ['string']);
        $optionsResolver->addAllowedTypes('type', ['string']);
        $optionsResolver->addAllowedTypes('prio', ['int']);
        $optionsResolver->addAllowedTypes('ttl', ['int']);
        $optionsResolver->addAllowedTypes('zone_provider', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Rouda\OpenProvider\Api\Model\RecordListZoneRecordsResponse|\Rouda\OpenProvider\Api\Model\ErrorError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Rouda\\OpenProvider\\Api\\Model\\RecordListZoneRecordsResponse', 'json');
        }
        return $serializer->deserialize($body, 'Rouda\\OpenProvider\\Api\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return ['Bearer'];
    }
}