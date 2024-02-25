<?php

namespace Rouda\OpenProvider\Api\Endpoint;

class ListEmails extends \Rouda\OpenProvider\Api\Runtime\Client\BaseEndpoint implements \Rouda\OpenProvider\Api\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $id Object ID.
     *     @var string $name Template name.
     *     @var string $group Email template type. There are several types of ICANN emails that can be customized in Openprovider: -errp (Expired Registration Recovery policy emails) -foa (Form of Authorization emails for domain transfers approval rejection) -ive (Information verification emails, such emails used to verify email address of the customer) -tcn (Trademark Claims Notification emails) -wdrp (Whois Data Reminder Policy emails).
     *     @var int $limit Output limit.
     *     @var int $offset Output offset.
     *     @var bool $is_system Is system.
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
        return '/v1beta/emails';
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
        $optionsResolver->setDefined(['id', 'name', 'group', 'limit', 'offset', 'is_system']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('id', ['int']);
        $optionsResolver->addAllowedTypes('name', ['string']);
        $optionsResolver->addAllowedTypes('group', ['string']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('is_system', ['bool']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Rouda\OpenProvider\Api\Model\EmailListEmailsResponse|\Rouda\OpenProvider\Api\Model\ErrorError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Rouda\\OpenProvider\\Api\\Model\\EmailListEmailsResponse', 'json');
        }
        return $serializer->deserialize($body, 'Rouda\\OpenProvider\\Api\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return ['Bearer'];
    }
}