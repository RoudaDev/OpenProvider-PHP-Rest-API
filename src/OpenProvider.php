<?php

namespace Rouda\OpenProvider;

use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;
use Rouda\OpenProvider\Api\Authentication\BearerAuthentication;
use Rouda\OpenProvider\Api\Client;

use GuzzleHttp\Psr7\Uri;
use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\ContentLengthPlugin;
use Http\Client\Common\Plugin\DecoderPlugin;
use Http\Client\Common\PluginClientFactory;
use Http\Client\HttpClient;
use Http\Client\Socket\Client as SocketHttpClient;
use Http\Message\MessageFactory\GuzzleMessageFactory;
use Rouda\OpenProvider\Api\Model\AuthLoginRequest;

class OpenProvider extends Client
{

    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $config = [
                'remote_socket' => getenv('OPENPROVIDER_HOST') ?: 'https://api.openprovider.eu/',
            ];

            $messageFactory = new GuzzleMessageFactory();
            $socketClient = new SocketHttpClient($messageFactory, $config);
            $host = $config['remote_socket'];

            $pluginClientFactory = new PluginClientFactory();

            $httpClient = $pluginClientFactory->createClient($socketClient, [
                new ContentLengthPlugin(),
                new DecoderPlugin(),
                new AddHostPlugin(new Uri($host)),
            ], [
                'client_name' => 'rouda-open-provider-client',
            ]);
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
