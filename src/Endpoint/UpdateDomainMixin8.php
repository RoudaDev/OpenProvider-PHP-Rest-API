<?php

namespace Rouda\OpenProviderAPI\Endpoint;

class UpdateDomainMixin8 extends \Rouda\OpenProviderAPI\Runtime\Client\BaseEndpoint implements \Rouda\OpenProviderAPI\Runtime\Client\Endpoint
{
    protected $domain_name;
    /**
     * 
     *
     * @param string $domainName Domain full name
     * @param \Rouda\OpenProviderAPI\Model\SeDomainUpdateDomainRequest $body 
     */
    public function __construct(string $domainName, \Rouda\OpenProviderAPI\Model\SeDomainUpdateDomainRequest $body)
    {
        $this->domain_name = $domainName;
        $this->body = $body;
    }
    use \Rouda\OpenProviderAPI\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(['{domain_name}'], [$this->domain_name], '/v1beta/spam-expert/domains/{domain_name}');
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
     * @return null|\Rouda\OpenProviderAPI\Model\ResponseBoolResponse|\Rouda\OpenProviderAPI\Model\ErrorError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Rouda\\OpenProviderAPI\\Model\\ResponseBoolResponse', 'json');
        }
        return $serializer->deserialize($body, 'Rouda\\OpenProviderAPI\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return ['Bearer'];
    }
}