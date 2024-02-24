<?php

namespace Rouda\OpenProviderAPI\Endpoint;

class GetReseller extends \Rouda\OpenProviderAPI\Runtime\Client\BaseEndpoint implements \Rouda\OpenProviderAPI\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var bool $with_additional_data Retrieves objects with (1) or without (0) additional data.
     *     @var bool $with_statistics Indicates if reseller statistics should be retrieved.
     *     @var bool $with_settings Indicates if reseller settings should be retrieved.
     *     @var bool $with_contacts Indicates if reseller contacts should be retrieved.
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
        return '/v1beta/resellers';
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
        $optionsResolver->setDefined(['with_additional_data', 'with_statistics', 'with_settings', 'with_contacts']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('with_additional_data', ['bool']);
        $optionsResolver->addAllowedTypes('with_statistics', ['bool']);
        $optionsResolver->addAllowedTypes('with_settings', ['bool']);
        $optionsResolver->addAllowedTypes('with_contacts', ['bool']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Rouda\OpenProviderAPI\Model\ResellerGetResellerResponse|\Rouda\OpenProviderAPI\Model\ErrorError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Rouda\\OpenProviderAPI\\Model\\ResellerGetResellerResponse', 'json');
        }
        return $serializer->deserialize($body, 'Rouda\\OpenProviderAPI\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return ['Bearer'];
    }
}