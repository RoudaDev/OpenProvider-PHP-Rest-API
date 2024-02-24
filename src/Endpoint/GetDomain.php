<?php

namespace Rouda\OpenProviderAPI\Endpoint;

class GetDomain extends \Rouda\OpenProviderAPI\Runtime\Client\BaseEndpoint implements \Rouda\OpenProviderAPI\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * 
     *
     * @param int $id Domain id number
     * @param array $queryParameters {
     *     @var string $domain.name Domain name without extension.
     *     @var string $domain.extension Domain extension.
     *     @var bool $with_history Returns domain mutations history.
     *     @var bool $with_api_history Returns domain API calls history.
     *     @var bool $with_additional_data Returns domain additional data.
     *     @var bool $with_verification_email Returns information about domain owner email verification status.
     *     @var bool $with_abuse_details Returns domain abuse details.
     *     @var bool $with_whois_privacy_data Returns WPP data.
     *     @var bool $with_registry_statuses Indicates, if registry EPP statuses should be retrieved.
     *     @var bool $is_deleted Indicates whether object is deleted.
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
        return str_replace(['{id}'], [$this->id], '/v1beta/domains/{id}');
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
        $optionsResolver->setDefined(['domain.name', 'domain.extension', 'with_history', 'with_api_history', 'with_additional_data', 'with_verification_email', 'with_abuse_details', 'with_whois_privacy_data', 'with_registry_statuses', 'is_deleted']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('domain.name', ['string']);
        $optionsResolver->addAllowedTypes('domain.extension', ['string']);
        $optionsResolver->addAllowedTypes('with_history', ['bool']);
        $optionsResolver->addAllowedTypes('with_api_history', ['bool']);
        $optionsResolver->addAllowedTypes('with_additional_data', ['bool']);
        $optionsResolver->addAllowedTypes('with_verification_email', ['bool']);
        $optionsResolver->addAllowedTypes('with_abuse_details', ['bool']);
        $optionsResolver->addAllowedTypes('with_whois_privacy_data', ['bool']);
        $optionsResolver->addAllowedTypes('with_registry_statuses', ['bool']);
        $optionsResolver->addAllowedTypes('is_deleted', ['bool']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Rouda\OpenProviderAPI\Model\DomainGetDomainResponse|\Rouda\OpenProviderAPI\Model\ErrorError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Rouda\\OpenProviderAPI\\Model\\DomainGetDomainResponse', 'json');
        }
        return $serializer->deserialize($body, 'Rouda\\OpenProviderAPI\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return ['Bearer'];
    }
}