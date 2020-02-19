<?php
/**
 * ChannelsApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Teletype Public API
 *
 * ## Общая информация Вы можете использовать данную документацию для ознакомления с методами API. Описание произведено в формате [**Swagger 3.0**](https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.0.md). Для генерации базового кода для работы с API на удобном для вас языке программирования воспользуйтесь утилитой [**Swagger Codegen**](https://swagger.io/swagger-codegen/) или online сервисом [**Swagger Editor**](https://editor.swagger.io/).  По всем вопросам работы с API обращайтесь к нам по email: <a href=\"mailto:p@teletype.app\">p@teletype.app</a></li>
 *
 * OpenAPI spec version: 1.0.4
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.16
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * ChannelsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChannelsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation channelsGet
     *
     * Получение списка каналов
     *
     * @param  string $x_auth_token Токен для авторизации (required)
     * @param  string $token Токен для авторизации (required)
     * @param  int $page Текущая страница (optional)
     * @param  int $page_size Количество данных на странице (optional)
     * @param  string $channel_type Тип канала (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse2004
     */
    public function channelsGet($x_auth_token, $token, $page = null, $page_size = null, $channel_type = null)
    {
        list($response) = $this->channelsGetWithHttpInfo($x_auth_token, $token, $page, $page_size, $channel_type);
        return $response;
    }

    /**
     * Operation channelsGetWithHttpInfo
     *
     * Получение списка каналов
     *
     * @param  string $x_auth_token Токен для авторизации (required)
     * @param  string $token Токен для авторизации (required)
     * @param  int $page Текущая страница (optional)
     * @param  int $page_size Количество данных на странице (optional)
     * @param  string $channel_type Тип канала (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse2004, HTTP status code, HTTP response headers (array of strings)
     */
    public function channelsGetWithHttpInfo($x_auth_token, $token, $page = null, $page_size = null, $channel_type = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2004';
        $request = $this->channelsGetRequest($x_auth_token, $token, $page, $page_size, $channel_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse2004',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation channelsGetAsync
     *
     * Получение списка каналов
     *
     * @param  string $x_auth_token Токен для авторизации (required)
     * @param  string $token Токен для авторизации (required)
     * @param  int $page Текущая страница (optional)
     * @param  int $page_size Количество данных на странице (optional)
     * @param  string $channel_type Тип канала (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function channelsGetAsync($x_auth_token, $token, $page = null, $page_size = null, $channel_type = null)
    {
        return $this->channelsGetAsyncWithHttpInfo($x_auth_token, $token, $page, $page_size, $channel_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation channelsGetAsyncWithHttpInfo
     *
     * Получение списка каналов
     *
     * @param  string $x_auth_token Токен для авторизации (required)
     * @param  string $token Токен для авторизации (required)
     * @param  int $page Текущая страница (optional)
     * @param  int $page_size Количество данных на странице (optional)
     * @param  string $channel_type Тип канала (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function channelsGetAsyncWithHttpInfo($x_auth_token, $token, $page = null, $page_size = null, $channel_type = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2004';
        $request = $this->channelsGetRequest($x_auth_token, $token, $page, $page_size, $channel_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'channelsGet'
     *
     * @param  string $x_auth_token Токен для авторизации (required)
     * @param  string $token Токен для авторизации (required)
     * @param  int $page Текущая страница (optional)
     * @param  int $page_size Количество данных на странице (optional)
     * @param  string $channel_type Тип канала (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function channelsGetRequest($x_auth_token, $token, $page = null, $page_size = null, $channel_type = null)
    {
        // verify the required parameter 'x_auth_token' is set
        if ($x_auth_token === null || (is_array($x_auth_token) && count($x_auth_token) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_auth_token when calling channelsGet'
            );
        }
        // verify the required parameter 'token' is set
        if ($token === null || (is_array($token) && count($token) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $token when calling channelsGet'
            );
        }

        $resourcePath = '/channels';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($token !== null) {
            $queryParams['token'] = ObjectSerializer::toQueryValue($token);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($page_size !== null) {
            $queryParams['pageSize'] = ObjectSerializer::toQueryValue($page_size);
        }
        // query params
        if ($channel_type !== null) {
            $queryParams['channelType'] = ObjectSerializer::toQueryValue($channel_type);
        }
        // header params
        if ($x_auth_token !== null) {
            $headerParams['X-Auth-Token'] = ObjectSerializer::toHeaderValue($x_auth_token);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
