<?php

namespace Rouda\OpenProviderAPI\Endpoint;

class UpdateGroup extends \Rouda\OpenProviderAPI\Runtime\Client\BaseEndpoint implements \Rouda\OpenProviderAPI\Runtime\Client\Endpoint
{
    protected $ns_group;
    /**
     * 
     *
     * @param string $nsGroup Plain text name of the nameserver group, which can consist of several nameservers with attached IPs. Once created in Openprovider reseller account, nameserver group can be reused for operations with domains.
     * @param \Rouda\OpenProviderAPI\Model\NsGroupUpdateGroupRequest $body 
     */
    public function __construct(string $nsGroup, \Rouda\OpenProviderAPI\Model\NsGroupUpdateGroupRequest $body)
    {
        $this->ns_group = $nsGroup;
        $this->body = $body;
    }
    use \Rouda\OpenProviderAPI\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(['{ns_group}'], [$this->ns_group], '/v1beta/dns/nameservers/groups/{ns_group}');
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
     * @return null|\Rouda\OpenProviderAPI\Model\NsGroupGroupBoolResponse|\Rouda\OpenProviderAPI\Model\ErrorError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Rouda\\OpenProviderAPI\\Model\\NsGroupGroupBoolResponse', 'json');
        }
        return $serializer->deserialize($body, 'Rouda\\OpenProviderAPI\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return ['Bearer'];
    }
}