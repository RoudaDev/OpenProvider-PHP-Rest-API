<?php

namespace Rouda\OpenProvider\Api\Endpoint;

class ListDomainEmailVerifications extends \Rouda\OpenProvider\Api\Runtime\Client\BaseEndpoint implements \Rouda\OpenProvider\Api\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $domain_id The domain id.
     *     @var string $domain The domain.
     *     @var string $email The email.
     *     @var string $handle The handle.
     *     @var string $status The status.
     *     @var string $description The description.
     *     @var bool $is_suspended Is suspended.
     *     @var string $response.type The type.
     *     @var string $response.to The to.
     *     @var int $limit The limit.
     *     @var int $offset The offset.
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Rouda\OpenProvider\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/v1beta/customers/verifications/emails/domains';
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
        $optionsResolver->setDefined(['domain_id', 'domain', 'email', 'handle', 'status', 'description', 'is_suspended', 'response.type', 'response.to', 'limit', 'offset']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('domain_id', ['int']);
        $optionsResolver->addAllowedTypes('domain', ['string']);
        $optionsResolver->addAllowedTypes('email', ['string']);
        $optionsResolver->addAllowedTypes('handle', ['string']);
        $optionsResolver->addAllowedTypes('status', ['string']);
        $optionsResolver->addAllowedTypes('description', ['string']);
        $optionsResolver->addAllowedTypes('is_suspended', ['bool']);
        $optionsResolver->addAllowedTypes('response.type', ['string']);
        $optionsResolver->addAllowedTypes('response.to', ['string']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Rouda\OpenProvider\Api\Model\EmailListDomainVerificationsResponse|\Rouda\OpenProvider\Api\Model\ErrorError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Rouda\\OpenProvider\\Api\\Model\\EmailListDomainVerificationsResponse', 'json');
        }
        return $serializer->deserialize($body, 'Rouda\\OpenProvider\\Api\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return ['Bearer'];
    }
}