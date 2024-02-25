<?php

namespace Rouda\OpenProvider\Api\Endpoint;

class ListDomains extends \Rouda\OpenProvider\Api\Runtime\Client\BaseEndpoint implements \Rouda\OpenProvider\Api\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $order_by.id Domain id number.
     *     @var string $order_by.domain_name The domain name.
     *     @var string $order_by.domain_extension Domain extension.
     *     @var string $order_by.order_date The order date.
     *     @var string $order_by.active_date The active date.
     *     @var string $order_by.expiration_date Domain expiration date.
     *     @var string $order_by.renewal_date Date on which domain will be renewed.
     *     @var string $order_by.status Domain status.
     *     @var string $order_by.transfer_date The transfer date.
     *     @var int $limit The limit.
     *     @var int $offset The offset.
     *     @var int $id Domain id number.
     *     @var string $extension Domain extension.
     *     @var string $renewal_date Date on which domain will be renewed.
     *     @var string $full_name Full name of the domain.
     *     @var string $domain_name_pattern The domain name pattern.
     *     @var string $ns_group_pattern Nameserver group name pattern.
     *     @var string $status Domain status.
     *     @var array $status_not_equal Array of domain statuses to exclude.
     *     @var string $queue_status The queue status.
     *     @var string $contact_handle Handle to filter by.
     *     @var string $comment_pattern The comment pattern.
     *     @var bool $with_history With history.
     *     @var bool $with_api_history With api history.
     *     @var bool $with_additional_data With additional data.
     *     @var string $application_mode When new gTLD is started it gets through several phases before it becomes available for registration to everybody (General availability or GA). There are several phases before GA when it is still possible to apply for a domain, but with some restrictions.
     *     @var bool $with_verification_email Returns information about domain owner email verification status.
     *     @var bool $with_registry_statuses Indicates, if registry EPP statuses should be retrieved.
     *     @var string $response.type The type.
     *     @var string $response.to The to.
     *     @var bool $is_deleted Indicates whether object is deleted.
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
        return '/v1beta/domains';
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
        $optionsResolver->setDefined(['order_by.id', 'order_by.domain_name', 'order_by.domain_extension', 'order_by.order_date', 'order_by.active_date', 'order_by.expiration_date', 'order_by.renewal_date', 'order_by.status', 'order_by.transfer_date', 'limit', 'offset', 'id', 'extension', 'renewal_date', 'full_name', 'domain_name_pattern', 'ns_group_pattern', 'status', 'status_not_equal', 'queue_status', 'contact_handle', 'comment_pattern', 'with_history', 'with_api_history', 'with_additional_data', 'application_mode', 'with_verification_email', 'with_registry_statuses', 'response.type', 'response.to', 'is_deleted']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('order_by.id', ['string']);
        $optionsResolver->addAllowedTypes('order_by.domain_name', ['string']);
        $optionsResolver->addAllowedTypes('order_by.domain_extension', ['string']);
        $optionsResolver->addAllowedTypes('order_by.order_date', ['string']);
        $optionsResolver->addAllowedTypes('order_by.active_date', ['string']);
        $optionsResolver->addAllowedTypes('order_by.expiration_date', ['string']);
        $optionsResolver->addAllowedTypes('order_by.renewal_date', ['string']);
        $optionsResolver->addAllowedTypes('order_by.status', ['string']);
        $optionsResolver->addAllowedTypes('order_by.transfer_date', ['string']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('id', ['int']);
        $optionsResolver->addAllowedTypes('extension', ['string']);
        $optionsResolver->addAllowedTypes('renewal_date', ['string']);
        $optionsResolver->addAllowedTypes('full_name', ['string']);
        $optionsResolver->addAllowedTypes('domain_name_pattern', ['string']);
        $optionsResolver->addAllowedTypes('ns_group_pattern', ['string']);
        $optionsResolver->addAllowedTypes('status', ['string']);
        $optionsResolver->addAllowedTypes('status_not_equal', ['array']);
        $optionsResolver->addAllowedTypes('queue_status', ['string']);
        $optionsResolver->addAllowedTypes('contact_handle', ['string']);
        $optionsResolver->addAllowedTypes('comment_pattern', ['string']);
        $optionsResolver->addAllowedTypes('with_history', ['bool']);
        $optionsResolver->addAllowedTypes('with_api_history', ['bool']);
        $optionsResolver->addAllowedTypes('with_additional_data', ['bool']);
        $optionsResolver->addAllowedTypes('application_mode', ['string']);
        $optionsResolver->addAllowedTypes('with_verification_email', ['bool']);
        $optionsResolver->addAllowedTypes('with_registry_statuses', ['bool']);
        $optionsResolver->addAllowedTypes('response.type', ['string']);
        $optionsResolver->addAllowedTypes('response.to', ['string']);
        $optionsResolver->addAllowedTypes('is_deleted', ['bool']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Rouda\OpenProvider\Api\Model\DomainListDomainsResponse|\Rouda\OpenProvider\Api\Model\ErrorError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Rouda\\OpenProvider\\Api\\Model\\DomainListDomainsResponse', 'json');
        }
        return $serializer->deserialize($body, 'Rouda\\OpenProvider\\Api\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return ['Bearer'];
    }
}