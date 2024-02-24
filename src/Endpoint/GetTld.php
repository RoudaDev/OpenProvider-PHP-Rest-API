<?php

namespace Rouda\OpenProviderAPI\Endpoint;

class GetTld extends \Rouda\OpenProviderAPI\Runtime\Client\BaseEndpoint implements \Rouda\OpenProviderAPI\Runtime\Client\Endpoint
{
    protected $name;
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
        return str_replace(['{name}'], [$this->name], '/v1beta/tlds/{name}');
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
        $optionsResolver->setDefined(['limit', 'offset', 'with_description', 'with_restrictions', 'with_price', 'with_level_prices', 'with_usage_count', 'status']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('with_description', ['bool']);
        $optionsResolver->addAllowedTypes('with_restrictions', ['bool']);
        $optionsResolver->addAllowedTypes('with_price', ['bool']);
        $optionsResolver->addAllowedTypes('with_level_prices', ['bool']);
        $optionsResolver->addAllowedTypes('with_usage_count', ['bool']);
        $optionsResolver->addAllowedTypes('status', ['array']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Rouda\OpenProviderAPI\Model\TldGetTldResponse|\Rouda\OpenProviderAPI\Model\ErrorError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Rouda\\OpenProviderAPI\\Model\\TldGetTldResponse', 'json');
        }
        return $serializer->deserialize($body, 'Rouda\\OpenProviderAPI\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return ['Bearer'];
    }
}