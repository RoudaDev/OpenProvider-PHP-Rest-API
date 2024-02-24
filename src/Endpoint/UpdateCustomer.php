<?php

namespace Rouda\OpenProviderAPI\Endpoint;

class UpdateCustomer extends \Rouda\OpenProviderAPI\Runtime\Client\BaseEndpoint implements \Rouda\OpenProviderAPI\Runtime\Client\Endpoint
{
    protected $handle;
    /**
     * 
     *
     * @param string $handle Customer unique identifier or handle, which can be created via CreateCustomer API method
     * @param \Rouda\OpenProviderAPI\Model\CustomerUpdateCustomerRequest $body 
     */
    public function __construct(string $handle, \Rouda\OpenProviderAPI\Model\CustomerUpdateCustomerRequest $body)
    {
        $this->handle = $handle;
        $this->body = $body;
    }
    use \Rouda\OpenProviderAPI\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(['{handle}'], [$this->handle], '/v1beta/customers/{handle}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Rouda\OpenProviderAPI\Model\CustomerUpdateCustomerResponse|\Rouda\OpenProviderAPI\Model\ErrorError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Rouda\\OpenProviderAPI\\Model\\CustomerUpdateCustomerResponse', 'json');
        }
        return $serializer->deserialize($body, 'Rouda\\OpenProviderAPI\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return ['Bearer'];
    }
}