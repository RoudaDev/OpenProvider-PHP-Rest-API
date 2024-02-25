<?php

namespace Rouda\OpenProvider\Api\Endpoint;

class ListOrders extends \Rouda\OpenProvider\Api\Runtime\Client\BaseEndpoint implements \Rouda\OpenProvider\Api\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $limit Search query limit.
     *     @var int $offset Search query offset.
     *     @var string $order_by.common_name desc/asc.
     *     @var string $order_by.order_date desc/asc.
     *     @var string $order_by.active_date desc/asc.
     *     @var string $order_by.expiration_date desc/asc.
     *     @var string $order_by.status desc/asc.
     *     @var string $order_by.product_name desc/asc.
     *     @var string $common_name_pattern Certificate common name pattern. Wildcard (*) can be used.
     *     @var array $status Array of order statuses.
     *     @var string $contact_handle Contact handle.
     *     @var bool $show_expiring Indicates, whether to return only certificates that are expiring within 30 days.
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
        return '/v1beta/ssl/orders';
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
        $optionsResolver->setDefined(['limit', 'offset', 'order_by.common_name', 'order_by.order_date', 'order_by.active_date', 'order_by.expiration_date', 'order_by.status', 'order_by.product_name', 'common_name_pattern', 'status', 'contact_handle', 'show_expiring']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['limit' => 100, 'order_by.order_date' => 'desc']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('order_by.common_name', ['string']);
        $optionsResolver->addAllowedTypes('order_by.order_date', ['string']);
        $optionsResolver->addAllowedTypes('order_by.active_date', ['string']);
        $optionsResolver->addAllowedTypes('order_by.expiration_date', ['string']);
        $optionsResolver->addAllowedTypes('order_by.status', ['string']);
        $optionsResolver->addAllowedTypes('order_by.product_name', ['string']);
        $optionsResolver->addAllowedTypes('common_name_pattern', ['string']);
        $optionsResolver->addAllowedTypes('status', ['array']);
        $optionsResolver->addAllowedTypes('contact_handle', ['string']);
        $optionsResolver->addAllowedTypes('show_expiring', ['bool']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Rouda\OpenProvider\Api\Model\OrderListOrdersResponse|\Rouda\OpenProvider\Api\Model\ErrorError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Rouda\\OpenProvider\\Api\\Model\\OrderListOrdersResponse', 'json');
        }
        return $serializer->deserialize($body, 'Rouda\\OpenProvider\\Api\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return ['Bearer'];
    }
}