<?php

namespace Rouda\OpenProvider;

use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;
use Rouda\OpenProvider\Api\Authentication\BearerAuthentication;

use Rouda\OpenProvider\Api\Client;
use Rouda\OpenProvider\Api\Model\AuthLoginRequest;

class OpenProvider extends Client
{

    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $host = getenv('OPENPROVIDER_HOST') ?: 'https://api.openprovider.eu';

            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri($host);
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }

        return parent::create($httpClient, $additionalPlugins, $additionalNormalizers);
    }

    public static function authenticate(string $username = null, string $password = null): string
    {
        $username = $username ?: getenv('OPENPROVIDER_USERNAME');
        $password = $password ?: getenv('OPENPROVIDER_PASSWORD');

        if (null === $username || null === $password) {
            throw new \Exception('Username and password are required');
        }

        $authRequest = new AuthLoginRequest();
        $authRequest->setUsername($username);
        $authRequest->setPassword($password);

        $client = self::create();
        $authLoginResponse = $client->login($authRequest);

        $authLoginResponseData = $authLoginResponse->getData();
        if (null === $authLoginResponseData) {
            throw new \Exception('Authentication failed');
        }

        $token = $authLoginResponseData->getToken();
        if (null === $token) {
            throw new \Exception('No token found in response data');
        }

        return $token;
    }

    public static function authenticatedClient($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [], array $authenticationCredentials = [])
    {
        $username = $authenticationCredentials['username'] ?? null;
        $password = $authenticationCredentials['password'] ?? null;

        $authToken = self::authenticate($username, $password);

        $authenticationRegistry = new AuthenticationRegistry([new BearerAuthentication($authToken)]);

        array_push($additionalPlugins, $authenticationRegistry);

        return self::create($httpClient, $additionalPlugins, $additionalNormalizers);
    }
}
