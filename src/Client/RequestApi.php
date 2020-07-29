<?php

declare(strict_types=1);

namespace ChurakovMike\Accuweather\Client;

use GuzzleHttp\Client;
use stdClass;

/**
 * Class RequestApi.
 *
 * @property string $host
 * @property Client $http_client
 * @property string $apiKey
 */
class RequestApi
{
    protected const CONNECTION_TIMEOUT = 10;
    protected const HTTP_STATUS_CODE = 200;

    /**
     * @var string $host
     */
    private $host;

    /**
     * @var Client $http_client
     */
    private $http_client;

    /**
     * @var string
     */
    private $apiKey;

    /**
     * RequestApi constructor.
     * @param string $host
     * @param string $apiKey
     */
    public function __construct(string $host, string $apiKey)
    {
        $this->http_client = new Client([
            'base_uri' => $host,
            'timeout' => static::CONNECTION_TIMEOUT,
        ]);

        $this->apiKey = $apiKey;
        $this->host = $host;
    }

    /**
     * @param string $path
     * @param array $params
     * @param string $method
     * @return stdClass
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function send(string $path, array $params = [], string $method = 'get')
    {
        $params['apikey'] = $this->apiKey;
        $rowData = http_build_query($params);
        $response = $this->http_client->request($method, $path, [
            'query' => $rowData
        ]);

        return json_decode((string) $response->getBody());
    }
}
