<?php

namespace Rouda\OpenProvider\Api\Endpoint;

class ListCustomers extends \Rouda\OpenProvider\Api\Runtime\Client\BaseEndpoint implements \Rouda\OpenProvider\Api\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $reseller_id Your reseller id is used by default. Other values not accepted.
     *     @var int $limit Output limit.
     *     @var int $offset Output offset.
     *     @var string $order Output ordering pattern. ASC / DESC.
     *     @var string $order_by Order output by field (i.e. first_name).
     *     @var string $email_pattern Full or partial email address. Wildcard (*) can be used.
     *     @var string $company_name_pattern Full or partial company name. Wildcard (*) can be used.
     *     @var string $last_name_pattern Full or partial last name. Wildcard (*) can be used.
     *     @var string $first_name_pattern Full or partial first name. Wildcard (*) can be used.
     *     @var string $comment_pattern Full or partial comment value. Wildcard (*) can be used.
     *     @var string $handle_pattern Full or partial handle name. Wildcard (*) can be used.
     *     @var string $pattern ull or partial first name or last name or company name or handle. Wildcard (*) can be used.
     *     @var bool $with_additional_data Retrieves objects with (1) or without (0) additional data.
     *     @var string $type Customer type: 'company' or 'individual'. If customer has not empty 'companyName' than type is 'company', otherwise 'individual'.
     *     @var array $columns Сolumns to retrieve. Possible values: 'firstName', 'prefix', 'initials', 'lastName', 'companyName', 'email', 'handle', 'id', 'fullName'.
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
        return '/v1beta/customers';
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
        $optionsResolver->setDefined(['reseller_id', 'limit', 'offset', 'order', 'order_by', 'email_pattern', 'company_name_pattern', 'last_name_pattern', 'first_name_pattern', 'comment_pattern', 'handle_pattern', 'pattern', 'with_additional_data', 'type', 'columns']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('reseller_id', ['int']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('order', ['string']);
        $optionsResolver->addAllowedTypes('order_by', ['string']);
        $optionsResolver->addAllowedTypes('email_pattern', ['string']);
        $optionsResolver->addAllowedTypes('company_name_pattern', ['string']);
        $optionsResolver->addAllowedTypes('last_name_pattern', ['string']);
        $optionsResolver->addAllowedTypes('first_name_pattern', ['string']);
        $optionsResolver->addAllowedTypes('comment_pattern', ['string']);
        $optionsResolver->addAllowedTypes('handle_pattern', ['string']);
        $optionsResolver->addAllowedTypes('pattern', ['string']);
        $optionsResolver->addAllowedTypes('with_additional_data', ['bool']);
        $optionsResolver->addAllowedTypes('type', ['string']);
        $optionsResolver->addAllowedTypes('columns', ['array']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Rouda\OpenProvider\Api\Model\CustomerListCustomersResponse|\Rouda\OpenProvider\Api\Model\ErrorError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Rouda\\OpenProvider\\Api\\Model\\CustomerListCustomersResponse', 'json');
        }
        return $serializer->deserialize($body, 'Rouda\\OpenProvider\\Api\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return ['Bearer'];
    }
}