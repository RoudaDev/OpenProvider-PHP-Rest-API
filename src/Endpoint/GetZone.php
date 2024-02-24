<?php

namespace Rouda\OpenProviderAPI\Endpoint;

class GetZone extends \Rouda\OpenProviderAPI\Runtime\Client\BaseEndpoint implements \Rouda\OpenProviderAPI\Runtime\Client\Endpoint
{
    protected $name;
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
     */
    public function __construct(string $name, array $queryParameters = [])
    {
        $this->name = $name;
        $this->queryParameters = $queryParameters;
    }
    use \Rouda\OpenProviderAPI\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{name}'], [$this->name], '/v1beta/dns/zones/{name}');
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
        $optionsResolver->setDefined(['id', 'with_records', 'with_history', 'with_dnskey', 'provider']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['with_records' => false, 'with_history' => false]);
        $optionsResolver->addAllowedTypes('id', ['string']);
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
     * @return null|\Rouda\OpenProviderAPI\Model\ZoneGetZoneResponse|\Rouda\OpenProviderAPI\Model\ErrorError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Rouda\\OpenProviderAPI\\Model\\ZoneGetZoneResponse', 'json');
        }
        return $serializer->deserialize($body, 'Rouda\\OpenProviderAPI\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return ['Bearer'];
    }
}