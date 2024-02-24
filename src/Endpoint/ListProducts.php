<?php

namespace Rouda\OpenProviderAPI\Endpoint;

class ListProducts extends \Rouda\OpenProviderAPI\Runtime\Client\BaseEndpoint implements \Rouda\OpenProviderAPI\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $limit Search query limit.
     *     @var int $offset Search query offset.
     *     @var bool $with_price Returns product price in the response.
     *     @var bool $with_supported_software Returns a list of supported software patforms.
     *     @var bool $with_description Returns a description for each product, if exists.
     *     @var string $order_by.name Sorting type (asc/desc).
     *     @var string $order_by.brand_name Sorting type (asc/desc).
     *     @var string $order_by.category Sorting type (asc/desc).
     *     @var string $order_by.sub_category Sorting type (asc/desc).
     *     @var string $order_by.brand_seqno Sorting type (asc/desc).
     *     @var string $order_by.product_seqno Sorting type (asc/desc).
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
        return '/v1beta/ssl/products';
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
        $optionsResolver->setDefined(['limit', 'offset', 'with_price', 'with_supported_software', 'with_description', 'order_by.name', 'order_by.brand_name', 'order_by.category', 'order_by.sub_category', 'order_by.brand_seqno', 'order_by.product_seqno']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['with_supported_software' => false]);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('with_price', ['bool']);
        $optionsResolver->addAllowedTypes('with_supported_software', ['bool']);
        $optionsResolver->addAllowedTypes('with_description', ['bool']);
        $optionsResolver->addAllowedTypes('order_by.name', ['string']);
        $optionsResolver->addAllowedTypes('order_by.brand_name', ['string']);
        $optionsResolver->addAllowedTypes('order_by.category', ['string']);
        $optionsResolver->addAllowedTypes('order_by.sub_category', ['string']);
        $optionsResolver->addAllowedTypes('order_by.brand_seqno', ['string']);
        $optionsResolver->addAllowedTypes('order_by.product_seqno', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Rouda\OpenProviderAPI\Model\ProductListProductsResponse|\Rouda\OpenProviderAPI\Model\ErrorError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Rouda\\OpenProviderAPI\\Model\\ProductListProductsResponse', 'json');
        }
        return $serializer->deserialize($body, 'Rouda\\OpenProviderAPI\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return ['Bearer'];
    }
}