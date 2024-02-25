<?php

namespace Rouda\OpenProvider\Api\Endpoint;

class ListTlds extends \Rouda\OpenProvider\Api\Runtime\Client\BaseEndpoint implements \Rouda\OpenProvider\Api\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $limit Search query limit.
     *     @var int $offset Search query offset.
     *     @var string $order Sorts output ASC or DESC.
     *     @var string $order_by Sorts output by a field.
     *     @var array $extensions Array of extensions.
     *     @var string $name_pattern Extension name pattern. Wildcard (*) can be used.
     *     @var bool $only_names Returns only extension names in the output.
     *     @var bool $with_description Returns additional extension description.
     *     @var bool $with_restrictions Returns list of extension restrictions.
     *     @var bool $with_usage_count Returns number of domains using specified extension in this account.
     *     @var array $with_application_mode Array of extension application modes.
     *     @var bool $with_price Returns extension prices.
     *     @var bool $with_level_prices Returns extension prices for each Openprovider discount tier.
     *     @var bool $is_active Indicates, if extension is active.
     *     @var bool $is_new_gtld Indicates, if extension is a newGTLD.
     *     @var string $status Extension status.
     *     @var string $application_mode Pre-registration mode.
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
        return '/v1beta/tlds';
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
        $optionsResolver->setDefined(['limit', 'offset', 'order', 'order_by', 'extensions', 'name_pattern', 'only_names', 'with_description', 'with_restrictions', 'with_usage_count', 'with_application_mode', 'with_price', 'with_level_prices', 'is_active', 'is_new_gtld', 'status', 'application_mode']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('order', ['string']);
        $optionsResolver->addAllowedTypes('order_by', ['string']);
        $optionsResolver->addAllowedTypes('extensions', ['array']);
        $optionsResolver->addAllowedTypes('name_pattern', ['string']);
        $optionsResolver->addAllowedTypes('only_names', ['bool']);
        $optionsResolver->addAllowedTypes('with_description', ['bool']);
        $optionsResolver->addAllowedTypes('with_restrictions', ['bool']);
        $optionsResolver->addAllowedTypes('with_usage_count', ['bool']);
        $optionsResolver->addAllowedTypes('with_application_mode', ['array']);
        $optionsResolver->addAllowedTypes('with_price', ['bool']);
        $optionsResolver->addAllowedTypes('with_level_prices', ['bool']);
        $optionsResolver->addAllowedTypes('is_active', ['bool']);
        $optionsResolver->addAllowedTypes('is_new_gtld', ['bool']);
        $optionsResolver->addAllowedTypes('status', ['string']);
        $optionsResolver->addAllowedTypes('application_mode', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Rouda\OpenProvider\Api\Model\TldListTldsResponse|\Rouda\OpenProvider\Api\Model\ErrorError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Rouda\\OpenProvider\\Api\\Model\\TldListTldsResponse', 'json');
        }
        return $serializer->deserialize($body, 'Rouda\\OpenProvider\\Api\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return ['Bearer'];
    }
}