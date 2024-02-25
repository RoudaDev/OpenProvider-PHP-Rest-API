<?php

namespace Rouda\OpenProvider\Api\Endpoint;

class UpdateVirtuozzoLicense extends \Rouda\OpenProvider\Api\Runtime\Client\BaseEndpoint implements \Rouda\OpenProvider\Api\Runtime\Client\Endpoint
{
    protected $key_id;
    /**
     * 
     *
     * @param int $keyId License key ID
     * @param \Rouda\OpenProvider\Api\Model\LicenseUpdateVirtuozzoLicenseRequest $body 
     */
    public function __construct(int $keyId, \Rouda\OpenProvider\Api\Model\LicenseUpdateVirtuozzoLicenseRequest $body)
    {
        $this->key_id = $keyId;
        $this->body = $body;
    }
    use \Rouda\OpenProvider\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(['{key_id}'], [$this->key_id], '/v1beta/licenses/virtuozzo/{key_id}');
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
     * @return null|\Rouda\OpenProvider\Api\Model\LicenseUpdateLicenseResponse|\Rouda\OpenProvider\Api\Model\ErrorError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Rouda\\OpenProvider\\Api\\Model\\LicenseUpdateLicenseResponse', 'json');
        }
        return $serializer->deserialize($body, 'Rouda\\OpenProvider\\Api\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return ['Bearer'];
    }
}