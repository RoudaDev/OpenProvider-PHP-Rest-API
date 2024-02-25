<?php

declare(strict_types=1);

namespace Rouda\OpenProvider;

use GuzzleHttp\Psr7\Uri;
use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\ContentLengthPlugin;
use Http\Client\Common\Plugin\DecoderPlugin;
use Http\Client\Common\PluginClientFactory;
use Http\Client\HttpClient;
use Http\Client\Socket\Client as SocketHttpClient;
use Http\Message\MessageFactory\GuzzleMessageFactory;

final class OpenProviderClientFactory
{
    /**
     * ( .
     */
    public static function create(array $config = [], PluginClientFactory $pluginClientFactory = null): HttpClient
    {
        if (!\array_key_exists('remote_socket', $config)) {
            $config['remote_socket'] = 'https://api.openprovider.eu/';
        }

        $messageFactory = new GuzzleMessageFactory();
        $socketClient = new SocketHttpClient($messageFactory, $config);
        $host = \preg_match('/unix:\/\//', $config['remote_socket']) ? 'http://localhost' : $config['remote_socket'];

        $pluginClientFactory = $pluginClientFactory ?? new PluginClientFactory();

        return $pluginClientFactory->createClient($socketClient, [
            new ContentLengthPlugin(),
            new DecoderPlugin(),
            new AddHostPlugin(new Uri($host)),
        ], [
            'client_name' => 'rouda-open-provider-client',
        ]);
    }

    public static function createFromEnv(PluginClientFactory $pluginClientFactory = null): HttpClient
    {
        $config = [
            'remote_socket' => \getenv('OPENPROVIDER_HOST') ? \getenv('OPENPROVIDER_HOST') : 'https://api.openprovider.eu/',
        ];

        $userName = \getenv('OPENPROVIDER_USERNAME');
        $password = \getenv('OPENPROVIDER_PASSWORD');

        return self::create($options, $pluginClientFactory);
    }
}
