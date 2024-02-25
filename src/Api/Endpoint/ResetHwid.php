<?php

namespace Rouda\OpenProvider\Api\Endpoint;

class ResetHwid extends \Rouda\OpenProvider\Api\Runtime\Client\BaseEndpoint implements \Rouda\OpenProvider\Api\Runtime\Client\Endpoint
{
    protected $product;
    protected $key_id;
    /**
     * 
     *
     * @param string $product Product type (only Plesk is available)
     * @param int $keyId License key ID
     * @param \Rouda\OpenProvider\Api\Model\LicenseResetHwidRequest $body 
     */
    public function __construct(string $product, int $keyId, \Rouda\OpenProvider\Api\Model\LicenseResetHwidRequest $body)
    {
        $this->product = $product;
        $this->key_id = $keyId;
        $this->body = $body;
    }
    use \Rouda\OpenProvider\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(['{product}', '{key_id}'], [$this->product, $this->key_id], '/v1beta/licenses/hwids/reset/{product}/{key_id}');
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
     * @return null|\Rouda\OpenProvider\Api\Model\LicenseResetHwidResponse|\Rouda\OpenProvider\Api\Model\ErrorError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Rouda\\OpenProvider\\Api\\Model\\LicenseResetHwidResponse', 'json');
        }
        return $serializer->deserialize($body, 'Rouda\\OpenProvider\\Api\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return ['Bearer'];
    }
}