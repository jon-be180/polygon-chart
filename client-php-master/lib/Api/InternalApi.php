<?php
/**
 * InternalApi
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Polygon API
 *
 * The future of fintech.
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * InternalApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InternalApi
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
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'listTickerTaxonomyClassifications' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation listTickerTaxonomyClassifications
     *
     * Ticker Taxonomies
     *
     * @param  string $ticker ticker (optional)
     * @param  string $category Filter by taxonomy category. (optional)
     * @param  string $tag Filter by taxonomy tag. Each category has a set of associated tags. (optional)
     * @param  string $ticker_gte Range by ticker. (optional)
     * @param  string $ticker_gt Range by ticker. (optional)
     * @param  string $ticker_lte Range by ticker. (optional)
     * @param  string $ticker_lt Range by ticker. (optional)
     * @param  string $ticker_any_of Comma separated list of tickers, up to a maximum of 250. If no tickers are passed then all results will be returned in a paginated manner.  Warning: The maximum number of characters allowed in a URL are subject to your technology stack. (optional)
     * @param  string $order Order results based on the &#x60;sort&#x60; field. (optional)
     * @param  int $limit Limit the number of results returned, default is 10 and max is 250. (optional, default to 10)
     * @param  string $sort Sort field used for ordering. (optional, default to 'ticker')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listTickerTaxonomyClassifications'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\ListTickerTaxonomyClassifications200Response
     */
    public function listTickerTaxonomyClassifications($ticker = null, $category = null, $tag = null, $ticker_gte = null, $ticker_gt = null, $ticker_lte = null, $ticker_lt = null, $ticker_any_of = null, $order = null, $limit = 10, $sort = 'ticker', string $contentType = self::contentTypes['listTickerTaxonomyClassifications'][0])
    {
        list($response) = $this->listTickerTaxonomyClassificationsWithHttpInfo($ticker, $category, $tag, $ticker_gte, $ticker_gt, $ticker_lte, $ticker_lt, $ticker_any_of, $order, $limit, $sort, $contentType);
        return $response;
    }

    /**
     * Operation listTickerTaxonomyClassificationsWithHttpInfo
     *
     * Ticker Taxonomies
     *
     * @param  string $ticker (optional)
     * @param  string $category Filter by taxonomy category. (optional)
     * @param  string $tag Filter by taxonomy tag. Each category has a set of associated tags. (optional)
     * @param  string $ticker_gte Range by ticker. (optional)
     * @param  string $ticker_gt Range by ticker. (optional)
     * @param  string $ticker_lte Range by ticker. (optional)
     * @param  string $ticker_lt Range by ticker. (optional)
     * @param  string $ticker_any_of Comma separated list of tickers, up to a maximum of 250. If no tickers are passed then all results will be returned in a paginated manner.  Warning: The maximum number of characters allowed in a URL are subject to your technology stack. (optional)
     * @param  string $order Order results based on the &#x60;sort&#x60; field. (optional)
     * @param  int $limit Limit the number of results returned, default is 10 and max is 250. (optional, default to 10)
     * @param  string $sort Sort field used for ordering. (optional, default to 'ticker')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listTickerTaxonomyClassifications'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\ListTickerTaxonomyClassifications200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function listTickerTaxonomyClassificationsWithHttpInfo($ticker = null, $category = null, $tag = null, $ticker_gte = null, $ticker_gt = null, $ticker_lte = null, $ticker_lt = null, $ticker_any_of = null, $order = null, $limit = 10, $sort = 'ticker', string $contentType = self::contentTypes['listTickerTaxonomyClassifications'][0])
    {
        $request = $this->listTickerTaxonomyClassificationsRequest($ticker, $category, $tag, $ticker_gte, $ticker_gt, $ticker_lte, $ticker_lt, $ticker_any_of, $order, $limit, $sort, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\Client\Model\ListTickerTaxonomyClassifications200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\ListTickerTaxonomyClassifications200Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\ListTickerTaxonomyClassifications200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\ListTickerTaxonomyClassifications200Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
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
                        '\OpenAPI\Client\Model\ListTickerTaxonomyClassifications200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listTickerTaxonomyClassificationsAsync
     *
     * Ticker Taxonomies
     *
     * @param  string $ticker (optional)
     * @param  string $category Filter by taxonomy category. (optional)
     * @param  string $tag Filter by taxonomy tag. Each category has a set of associated tags. (optional)
     * @param  string $ticker_gte Range by ticker. (optional)
     * @param  string $ticker_gt Range by ticker. (optional)
     * @param  string $ticker_lte Range by ticker. (optional)
     * @param  string $ticker_lt Range by ticker. (optional)
     * @param  string $ticker_any_of Comma separated list of tickers, up to a maximum of 250. If no tickers are passed then all results will be returned in a paginated manner.  Warning: The maximum number of characters allowed in a URL are subject to your technology stack. (optional)
     * @param  string $order Order results based on the &#x60;sort&#x60; field. (optional)
     * @param  int $limit Limit the number of results returned, default is 10 and max is 250. (optional, default to 10)
     * @param  string $sort Sort field used for ordering. (optional, default to 'ticker')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listTickerTaxonomyClassifications'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listTickerTaxonomyClassificationsAsync($ticker = null, $category = null, $tag = null, $ticker_gte = null, $ticker_gt = null, $ticker_lte = null, $ticker_lt = null, $ticker_any_of = null, $order = null, $limit = 10, $sort = 'ticker', string $contentType = self::contentTypes['listTickerTaxonomyClassifications'][0])
    {
        return $this->listTickerTaxonomyClassificationsAsyncWithHttpInfo($ticker, $category, $tag, $ticker_gte, $ticker_gt, $ticker_lte, $ticker_lt, $ticker_any_of, $order, $limit, $sort, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listTickerTaxonomyClassificationsAsyncWithHttpInfo
     *
     * Ticker Taxonomies
     *
     * @param  string $ticker (optional)
     * @param  string $category Filter by taxonomy category. (optional)
     * @param  string $tag Filter by taxonomy tag. Each category has a set of associated tags. (optional)
     * @param  string $ticker_gte Range by ticker. (optional)
     * @param  string $ticker_gt Range by ticker. (optional)
     * @param  string $ticker_lte Range by ticker. (optional)
     * @param  string $ticker_lt Range by ticker. (optional)
     * @param  string $ticker_any_of Comma separated list of tickers, up to a maximum of 250. If no tickers are passed then all results will be returned in a paginated manner.  Warning: The maximum number of characters allowed in a URL are subject to your technology stack. (optional)
     * @param  string $order Order results based on the &#x60;sort&#x60; field. (optional)
     * @param  int $limit Limit the number of results returned, default is 10 and max is 250. (optional, default to 10)
     * @param  string $sort Sort field used for ordering. (optional, default to 'ticker')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listTickerTaxonomyClassifications'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listTickerTaxonomyClassificationsAsyncWithHttpInfo($ticker = null, $category = null, $tag = null, $ticker_gte = null, $ticker_gt = null, $ticker_lte = null, $ticker_lt = null, $ticker_any_of = null, $order = null, $limit = 10, $sort = 'ticker', string $contentType = self::contentTypes['listTickerTaxonomyClassifications'][0])
    {
        $returnType = '\OpenAPI\Client\Model\ListTickerTaxonomyClassifications200Response';
        $request = $this->listTickerTaxonomyClassificationsRequest($ticker, $category, $tag, $ticker_gte, $ticker_gt, $ticker_lte, $ticker_lt, $ticker_any_of, $order, $limit, $sort, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'listTickerTaxonomyClassifications'
     *
     * @param  string $ticker (optional)
     * @param  string $category Filter by taxonomy category. (optional)
     * @param  string $tag Filter by taxonomy tag. Each category has a set of associated tags. (optional)
     * @param  string $ticker_gte Range by ticker. (optional)
     * @param  string $ticker_gt Range by ticker. (optional)
     * @param  string $ticker_lte Range by ticker. (optional)
     * @param  string $ticker_lt Range by ticker. (optional)
     * @param  string $ticker_any_of Comma separated list of tickers, up to a maximum of 250. If no tickers are passed then all results will be returned in a paginated manner.  Warning: The maximum number of characters allowed in a URL are subject to your technology stack. (optional)
     * @param  string $order Order results based on the &#x60;sort&#x60; field. (optional)
     * @param  int $limit Limit the number of results returned, default is 10 and max is 250. (optional, default to 10)
     * @param  string $sort Sort field used for ordering. (optional, default to 'ticker')
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listTickerTaxonomyClassifications'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listTickerTaxonomyClassificationsRequest($ticker = null, $category = null, $tag = null, $ticker_gte = null, $ticker_gt = null, $ticker_lte = null, $ticker_lt = null, $ticker_any_of = null, $order = null, $limit = 10, $sort = 'ticker', string $contentType = self::contentTypes['listTickerTaxonomyClassifications'][0])
    {










        if ($limit !== null && $limit > 250) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling InternalApi.listTickerTaxonomyClassifications, must be smaller than or equal to 250.');
        }
        if ($limit !== null && $limit < 1) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling InternalApi.listTickerTaxonomyClassifications, must be bigger than or equal to 1.');
        }
        


        $resourcePath = '/vX/reference/tickers/taxonomies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticker,
            'ticker', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $category,
            'category', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $tag,
            'tag', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticker_gte,
            'ticker.gte', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticker_gt,
            'ticker.gt', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticker_lte,
            'ticker.lte', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticker_lt,
            'ticker.lt', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ticker_any_of,
            'ticker.any_of', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $order,
            'order', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sort,
            'sort', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('apiKey');
        if ($apiKey !== null) {
            $queryParams['apiKey'] = $apiKey;
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

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
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
