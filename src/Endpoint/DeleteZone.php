<?php

namespace Rouda\OpenProviderAPI\Endpoint;

class DeleteZone extends \Rouda\OpenProviderAPI\Runtime\Client\BaseEndpoint implements \Rouda\OpenProviderAPI\Runtime\Client\Endpoint
{
    protected $name;
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
     */
    public function __construct(string $name, array $queryParameters = [])
    {
        $this->name = $name;
        $this->queryParameters = $queryParameters;
    }
    use \Rouda\OpenProviderAPI\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
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
        $optionsResolver->setDefined(['id', 'domain.name', 'domain.extension', 'provider']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('id', ['int']);
        $optionsResolver->addAllowedTypes('domain.name', ['string']);
        $optionsResolver->addAllowedTypes('domain.extension', ['string']);
        $optionsResolver->addAllowedTypes('provider', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Rouda\OpenProviderAPI\Model\ZoneZoneBoolResponse|\Rouda\OpenProviderAPI\Model\ErrorError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Rouda\\OpenProviderAPI\\Model\\ZoneZoneBoolResponse', 'json');
        }
        return $serializer->deserialize($body, 'Rouda\\OpenProviderAPI\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return ['Bearer'];
    }
}