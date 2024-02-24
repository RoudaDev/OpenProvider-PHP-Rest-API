<?php

namespace Rouda\OpenProviderAPI\Endpoint;

class ListContacts extends \Rouda\OpenProviderAPI\Runtime\Client\BaseEndpoint implements \Rouda\OpenProviderAPI\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $limit Output limit.
     *     @var int $offset Output offset.
     *     @var string $order Output ordering pattern. ASC / DESC.
     *     @var string $order_by Order output by field (i.e. first_name).
     *     @var string $email_pattern Full or partial email address. Wildcard (*) can be used.
     *     @var string $last_name_pattern Full or partial last name. Wildcard (*) can be used.
     *     @var string $company_name_pattern Full or partial company name. Wildcard (*) can be used.
     *     @var string $username_pattern The username pattern.
     *     @var string $role Contact's role.
     *     @var bool $with_additional_data Retrieves objects with (1) or without (0) additional data.
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
        return '/v1beta/contacts';
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
        $optionsResolver->setDefined(['limit', 'offset', 'order', 'order_by', 'email_pattern', 'last_name_pattern', 'company_name_pattern', 'username_pattern', 'role', 'with_additional_data']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('order', ['string']);
        $optionsResolver->addAllowedTypes('order_by', ['string']);
        $optionsResolver->addAllowedTypes('email_pattern', ['string']);
        $optionsResolver->addAllowedTypes('last_name_pattern', ['string']);
        $optionsResolver->addAllowedTypes('company_name_pattern', ['string']);
        $optionsResolver->addAllowedTypes('username_pattern', ['string']);
        $optionsResolver->addAllowedTypes('role', ['string']);
        $optionsResolver->addAllowedTypes('with_additional_data', ['bool']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Rouda\OpenProviderAPI\Model\ContactListContactsResponse|\Rouda\OpenProviderAPI\Model\ErrorError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Rouda\\OpenProviderAPI\\Model\\ContactListContactsResponse', 'json');
        }
        return $serializer->deserialize($body, 'Rouda\\OpenProviderAPI\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return ['Bearer'];
    }
}