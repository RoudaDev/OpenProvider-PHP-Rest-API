<?php

namespace Rouda\OpenProviderAPI\Endpoint;

class GetEasyDmarcSso extends \Rouda\OpenProviderAPI\Runtime\Client\BaseEndpoint implements \Rouda\OpenProviderAPI\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * 
     *
     * @param int $id Easy Dmarc id (order id)
     * @param array $queryParameters {
     *     @var string $type SSO url on behalf of the customer or reseller.
     * }
     */
    public function __construct(int $id, array $queryParameters = [])
    {
        $this->id = $id;
        $this->queryParameters = $queryParameters;
    }
    use \Rouda\OpenProviderAPI\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{id}'], [$this->id], '/v1beta/easydmarcs/{id}/sso');
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
        $optionsResolver->setDefined(['type']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('type', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Rouda\OpenProviderAPI\Model\OrderGetEasyDmarcSsoResponse|\Rouda\OpenProviderAPI\Model\ErrorError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Rouda\\OpenProviderAPI\\Model\\OrderGetEasyDmarcSsoResponse', 'json');
        }
        return $serializer->deserialize($body, 'Rouda\\OpenProviderAPI\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return ['Bearer'];
    }
}