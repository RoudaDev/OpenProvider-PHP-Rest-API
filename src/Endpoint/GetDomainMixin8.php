<?php

namespace Rouda\OpenProviderAPI\Endpoint;

class GetDomainMixin8 extends \Rouda\OpenProviderAPI\Runtime\Client\BaseEndpoint implements \Rouda\OpenProviderAPI\Runtime\Client\Endpoint
{
    protected $domain_name;
    /**
     * 
     *
     * @param string $domainName Domain full name
     * @param array $queryParameters {
     *     @var bool $with_records Indicates, whether records should be displayed in output.
     *     @var bool $bundle Indicates if old subscriptions backward compatibility is used.
     * }
     */
    public function __construct(string $domainName, array $queryParameters = [])
    {
        $this->domain_name = $domainName;
        $this->queryParameters = $queryParameters;
    }
    use \Rouda\OpenProviderAPI\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{domain_name}'], [$this->domain_name], '/v1beta/spam-expert/domains/{domain_name}');
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
        $optionsResolver->setDefined(['with_records', 'bundle']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['with_records' => false]);
        $optionsResolver->addAllowedTypes('with_records', ['bool']);
        $optionsResolver->addAllowedTypes('bundle', ['bool']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Rouda\OpenProviderAPI\Model\SeDomainGetDomainResponse|\Rouda\OpenProviderAPI\Model\ErrorError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Rouda\\OpenProviderAPI\\Model\\SeDomainGetDomainResponse', 'json');
        }
        return $serializer->deserialize($body, 'Rouda\\OpenProviderAPI\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return ['Bearer'];
    }
}