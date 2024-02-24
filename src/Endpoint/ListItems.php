<?php

namespace Rouda\OpenProviderAPI\Endpoint;

class ListItems extends \Rouda\OpenProviderAPI\Runtime\Client\BaseEndpoint implements \Rouda\OpenProviderAPI\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $limit Output limit.
     *     @var int $offset Output offset.
     *     @var string $order_by.id Object ID.
     *     @var string $order_by.key_id License key ID.
     *     @var string $order_by.title Custom license title.
     *     @var string $order_by.product Product type (only Plesk is available).
     *     @var string $order_by.status License status.
     *     @var string $order_by.key_number License key number.
     *     @var string $order_by.expiration_date License expiration date.
     *     @var string $product Product type (only Plesk is available).
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
        return '/v1beta/licenses/items';
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
        $optionsResolver->setDefined(['limit', 'offset', 'order_by.id', 'order_by.key_id', 'order_by.title', 'order_by.product', 'order_by.status', 'order_by.key_number', 'order_by.expiration_date', 'product']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('order_by.id', ['string']);
        $optionsResolver->addAllowedTypes('order_by.key_id', ['string']);
        $optionsResolver->addAllowedTypes('order_by.title', ['string']);
        $optionsResolver->addAllowedTypes('order_by.product', ['string']);
        $optionsResolver->addAllowedTypes('order_by.status', ['string']);
        $optionsResolver->addAllowedTypes('order_by.key_number', ['string']);
        $optionsResolver->addAllowedTypes('order_by.expiration_date', ['string']);
        $optionsResolver->addAllowedTypes('product', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Rouda\OpenProviderAPI\Model\LicenseListItemsResponse|\Rouda\OpenProviderAPI\Model\ErrorError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Rouda\\OpenProviderAPI\\Model\\LicenseListItemsResponse', 'json');
        }
        return $serializer->deserialize($body, 'Rouda\\OpenProviderAPI\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return ['Bearer'];
    }
}