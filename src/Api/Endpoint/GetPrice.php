<?php

namespace Rouda\OpenProvider\Api\Endpoint;

class GetPrice extends \Rouda\OpenProvider\Api\Runtime\Client\BaseEndpoint implements \Rouda\OpenProvider\Api\Runtime\Client\Endpoint
{
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var string $domain.name Domain name without extension.
    *     @var string $domain.extension Domain extension.
    *     @var string $operation Domain operation.
    *     @var string $additional_data.idn_script The idn script states what language or character set the domain name is in
    Applicable to: .actor, .ae.org, .airforce, .army, .art, .attorney, .auction, .band, .bar, .best, .br.com, .ceo, .cn.com, .college, .com, .com.de, .com.se, .consulting, .dance, .de.com, .degree, .democrat, .dentist, .design, .engineer, .eu.com, .eus, .feedback, .fm, .forsale, .frl, .fun, .futbol, .gal, .gb.net, .gives, .gr.com, .haus, .hiv, .host, .immobilien, .in.net, .info, .ink, .jp.net, .jpn.com, .kaufen, .kyoto, .lawyer, .love, .market, .me, .mex.com, .moda, .mortgage, .navy, .net, .ninja, .nrw, .online, .ooo, .org, .press, .protection, .pub, .pw, .quebec, .radio.am, .radio.fm, .realty, .rehab, .rent, .republican, .rest, .reviews, .rip, .rocks, .ru.com, .sa.com, .scot, .se.net, .security, .site, .social, .software, .space, .store, .tech, .theatre, .tickets, .top, .uk.com, .uk.net, .us.com, .us.org, .vet, .website, .wiki, .xn--4gbrim, .xn--55qx5d, .xn--5tzm5g, .xn--80asehdb, .xn--80aswg, .xn--c1avg, .xn--czru2d, .xn--i1b6b1a6a2e, .xn--io0a7i, .xn--mk1bu44c, .xn--ngbc5azd, .xn--nqv7f, .xn--t60b56a, .xn--tckwe, .xyz, .za.com.
    *     @var int $period Operation period.
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
        return '/v1beta/domains/prices';
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
        $optionsResolver->setDefined(['domain.name', 'domain.extension', 'operation', 'additional_data.idn_script', 'period']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('domain.name', ['string']);
        $optionsResolver->addAllowedTypes('domain.extension', ['string']);
        $optionsResolver->addAllowedTypes('operation', ['string']);
        $optionsResolver->addAllowedTypes('additional_data.idn_script', ['string']);
        $optionsResolver->addAllowedTypes('period', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Rouda\OpenProvider\Api\Model\PriceGetPriceResponse|\Rouda\OpenProvider\Api\Model\ErrorError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Rouda\\OpenProvider\\Api\\Model\\PriceGetPriceResponse', 'json');
        }
        return $serializer->deserialize($body, 'Rouda\\OpenProvider\\Api\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return ['Bearer'];
    }
}