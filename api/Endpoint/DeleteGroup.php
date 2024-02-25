<?php

namespace Rouda\OpenProvider\Api\Endpoint;

class DeleteGroup extends \Rouda\OpenProvider\Api\Runtime\Client\BaseEndpoint implements \Rouda\OpenProvider\Api\Runtime\Client\Endpoint
{
    protected $ns_group;
    /**
     * 
     *
     * @param string $nsGroup Plain text name of the nameserver group, which can consist of several nameservers with attached IPs. Once created in Openprovider reseller account, nameserver group can be reused for operations with domains.
     */
    public function __construct(string $nsGroup)
    {
        $this->ns_group = $nsGroup;
    }
    use \Rouda\OpenProvider\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(['{ns_group}'], [$this->ns_group], '/v1beta/dns/nameservers/groups/{ns_group}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Rouda\OpenProvider\Api\Model\NsGroupGroupBoolResponse|\Rouda\OpenProvider\Api\Model\ErrorError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Rouda\\OpenProvider\\Api\\Model\\NsGroupGroupBoolResponse', 'json');
        }
        return $serializer->deserialize($body, 'Rouda\\OpenProvider\\Api\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return ['Bearer'];
    }
}