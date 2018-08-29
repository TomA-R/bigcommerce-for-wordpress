<?php
/**
 * ChannelsApi
 * PHP version 5
 *
 * @category Class
 * @package  BigCommerce\Api\v3
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BigCommerce Channels API
 *
 * The Channels API enables you to create and manage listings across a BigCommerce merchant's sales channels.
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BigCommerce\Api\v3\Api;

use \BigCommerce\Api\v3\ApiClient;
use \BigCommerce\Api\v3\ApiException;
use \BigCommerce\Api\v3\Configuration;
use \BigCommerce\Api\v3\ObjectSerializer;

/**
 * ChannelsApi Class Doc Comment
 *
 * @category Class
 * @package  BigCommerce\Api\v3
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChannelsApi
{
    /**
     * API Client
     *
     * @var \BigCommerce\Api\v3\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \BigCommerce\Api\v3\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\BigCommerce\Api\v3\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('http://api.bigcommerce.com');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \BigCommerce\Api\v3\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \BigCommerce\Api\v3\ApiClient $apiClient set the API client
     *
     * @return ChannelsApi
     */
    public function setApiClient(\BigCommerce\Api\v3\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation channelsChannelIdDelete
     *
     * Delete Channel
     *
     * @param int $channel_id The ID of a Channel that&#39;s available through GET /channels (required)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return void
     */
    public function channelsChannelIdDelete($channel_id)
    {
        list($response) = $this->channelsChannelIdDeleteWithHttpInfo($channel_id);
        return $response;
    }

    /**
     * Operation channelsChannelIdDeleteWithHttpInfo
     *
     * Delete Channel
     *
     * @param int $channel_id The ID of a Channel that&#39;s available through GET /channels (required)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function channelsChannelIdDeleteWithHttpInfo($channel_id)
    {
        // verify the required parameter 'channel_id' is set
        if ($channel_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $channel_id when calling channelsChannelIdDelete');
        }
        // parse inputs
        $resourcePath = "/channels/{channelId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($channel_id !== null) {
            $resourcePath = str_replace(
                "{" . "channelId" . "}",
                $this->apiClient->getSerializer()->toPathValue($channel_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/channels/{channelId}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation channelsChannelIdGet
     *
     * Get Channel
     *
     * @param int $channel_id The ID of a Channel that&#39;s available through GET /channels (required)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return \BigCommerce\Api\v3\Model\Channel
     */
    public function channelsChannelIdGet($channel_id)
    {
        list($response) = $this->channelsChannelIdGetWithHttpInfo($channel_id);
        return $response;
    }

    /**
     * Operation channelsChannelIdGetWithHttpInfo
     *
     * Get Channel
     *
     * @param int $channel_id The ID of a Channel that&#39;s available through GET /channels (required)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return array of \BigCommerce\Api\v3\Model\Channel, HTTP status code, HTTP response headers (array of strings)
     */
    public function channelsChannelIdGetWithHttpInfo($channel_id)
    {
        // verify the required parameter 'channel_id' is set
        if ($channel_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $channel_id when calling channelsChannelIdGet');
        }
        // parse inputs
        $resourcePath = "/channels/{channelId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($channel_id !== null) {
            $resourcePath = str_replace(
                "{" . "channelId" . "}",
                $this->apiClient->getSerializer()->toPathValue($channel_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BigCommerce\Api\v3\Model\Channel',
                '/channels/{channelId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\v3\Model\Channel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\Channel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation channelsChannelIdPut
     *
     * Update Channel
     *
     * @param int $channel_id The ID of a Channel that&#39;s available through GET /channels (required)
     * @param \BigCommerce\Api\v3\Model\Channel $body  (required)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return \BigCommerce\Api\v3\Model\Channel
     */
    public function channelsChannelIdPut($channel_id, $body)
    {
        list($response) = $this->channelsChannelIdPutWithHttpInfo($channel_id, $body);
        return $response;
    }

    /**
     * Operation channelsChannelIdPutWithHttpInfo
     *
     * Update Channel
     *
     * @param int $channel_id The ID of a Channel that&#39;s available through GET /channels (required)
     * @param \BigCommerce\Api\v3\Model\Channel $body  (required)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return array of \BigCommerce\Api\v3\Model\Channel, HTTP status code, HTTP response headers (array of strings)
     */
    public function channelsChannelIdPutWithHttpInfo($channel_id, $body)
    {
        // verify the required parameter 'channel_id' is set
        if ($channel_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $channel_id when calling channelsChannelIdPut');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling channelsChannelIdPut');
        }
        // parse inputs
        $resourcePath = "/channels/{channelId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($channel_id !== null) {
            $resourcePath = str_replace(
                "{" . "channelId" . "}",
                $this->apiClient->getSerializer()->toPathValue($channel_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BigCommerce\Api\v3\Model\Channel',
                '/channels/{channelId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\v3\Model\Channel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\Channel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation channelsGet
     *
     * List all Channels
     *
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return \BigCommerce\Api\v3\Model\Channel[]
     */
    public function channelsGet()
    {
        list($response) = $this->channelsGetWithHttpInfo();
        return $response;
    }

    /**
     * Operation channelsGetWithHttpInfo
     *
     * List all Channels
     *
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return array of \BigCommerce\Api\v3\Model\Channel[], HTTP status code, HTTP response headers (array of strings)
     */
    public function channelsGetWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/channels";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BigCommerce\Api\v3\Model\Channel[]',
                '/channels'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\v3\Model\Channel[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\Channel[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation channelsListingsGet
     *
     * List all Channels Listings
     *
     * @param int $channel_id  (optional)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return \BigCommerce\Api\v3\Model\Listing[]
     */
    public function channelsListingsGet($channel_id = null)
    {
        list($response) = $this->channelsListingsGetWithHttpInfo($channel_id);
        return $response;
    }

    /**
     * Operation channelsListingsGetWithHttpInfo
     *
     * List all Channels Listings
     *
     * @param int $channel_id  (optional)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return array of \BigCommerce\Api\v3\Model\Listing[], HTTP status code, HTTP response headers (array of strings)
     */
    public function channelsListingsGetWithHttpInfo($channel_id = null)
    {
        // parse inputs
        $resourcePath = "/channels/listings";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($channel_id !== null) {
            $queryParams['channel_id'] = $this->apiClient->getSerializer()->toQueryValue($channel_id);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BigCommerce\Api\v3\Model\Listing[]',
                '/channels/listings'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\v3\Model\Listing[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\Listing[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation channelsListingsListingIdDelete
     *
     * Delete Channel Listing
     *
     * @param int $listing_id The ID of a Channel Listing that&#39;s available through GET /channels/listings (required)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return void
     */
    public function channelsListingsListingIdDelete($listing_id)
    {
        list($response) = $this->channelsListingsListingIdDeleteWithHttpInfo($listing_id);
        return $response;
    }

    /**
     * Operation channelsListingsListingIdDeleteWithHttpInfo
     *
     * Delete Channel Listing
     *
     * @param int $listing_id The ID of a Channel Listing that&#39;s available through GET /channels/listings (required)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function channelsListingsListingIdDeleteWithHttpInfo($listing_id)
    {
        // verify the required parameter 'listing_id' is set
        if ($listing_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $listing_id when calling channelsListingsListingIdDelete');
        }
        // parse inputs
        $resourcePath = "/channels/listings/{listingId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($listing_id !== null) {
            $resourcePath = str_replace(
                "{" . "listingId" . "}",
                $this->apiClient->getSerializer()->toPathValue($listing_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/channels/listings/{listingId}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation channelsListingsListingIdGet
     *
     * Get Channel Listing
     *
     * @param int $listing_id The ID of a Channel Listing that&#39;s available through GET /channels/listings (required)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return \BigCommerce\Api\v3\Model\Listing
     */
    public function channelsListingsListingIdGet($listing_id)
    {
        list($response) = $this->channelsListingsListingIdGetWithHttpInfo($listing_id);
        return $response;
    }

    /**
     * Operation channelsListingsListingIdGetWithHttpInfo
     *
     * Get Channel Listing
     *
     * @param int $listing_id The ID of a Channel Listing that&#39;s available through GET /channels/listings (required)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return array of \BigCommerce\Api\v3\Model\Listing, HTTP status code, HTTP response headers (array of strings)
     */
    public function channelsListingsListingIdGetWithHttpInfo($listing_id)
    {
        // verify the required parameter 'listing_id' is set
        if ($listing_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $listing_id when calling channelsListingsListingIdGet');
        }
        // parse inputs
        $resourcePath = "/channels/listings/{listingId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($listing_id !== null) {
            $resourcePath = str_replace(
                "{" . "listingId" . "}",
                $this->apiClient->getSerializer()->toPathValue($listing_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BigCommerce\Api\v3\Model\Listing',
                '/channels/listings/{listingId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\v3\Model\Listing', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\Listing', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation channelsListingsListingIdPut
     *
     * Update Channel Listing
     *
     * @param int $listing_id The ID of a Channel Listing that&#39;s available through GET /channels/listings (required)
     * @param \BigCommerce\Api\v3\Model\Listing $body  (required)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return \BigCommerce\Api\v3\Model\Listing
     */
    public function channelsListingsListingIdPut($listing_id, $body)
    {
        list($response) = $this->channelsListingsListingIdPutWithHttpInfo($listing_id, $body);
        return $response;
    }

    /**
     * Operation channelsListingsListingIdPutWithHttpInfo
     *
     * Update Channel Listing
     *
     * @param int $listing_id The ID of a Channel Listing that&#39;s available through GET /channels/listings (required)
     * @param \BigCommerce\Api\v3\Model\Listing $body  (required)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return array of \BigCommerce\Api\v3\Model\Listing, HTTP status code, HTTP response headers (array of strings)
     */
    public function channelsListingsListingIdPutWithHttpInfo($listing_id, $body)
    {
        // verify the required parameter 'listing_id' is set
        if ($listing_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $listing_id when calling channelsListingsListingIdPut');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling channelsListingsListingIdPut');
        }
        // parse inputs
        $resourcePath = "/channels/listings/{listingId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($listing_id !== null) {
            $resourcePath = str_replace(
                "{" . "listingId" . "}",
                $this->apiClient->getSerializer()->toPathValue($listing_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BigCommerce\Api\v3\Model\Listing',
                '/channels/listings/{listingId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\v3\Model\Listing', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\Listing', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation channelsListingsPost
     *
     * Create a Channel Listing
     *
     * @param \BigCommerce\Api\v3\Model\Listing $body  (required)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return \BigCommerce\Api\v3\Model\Listing
     */
    public function channelsListingsPost($body)
    {
        list($response) = $this->channelsListingsPostWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation channelsListingsPostWithHttpInfo
     *
     * Create a Channel Listing
     *
     * @param \BigCommerce\Api\v3\Model\Listing $body  (required)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return array of \BigCommerce\Api\v3\Model\Listing, HTTP status code, HTTP response headers (array of strings)
     */
    public function channelsListingsPostWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling channelsListingsPost');
        }
        // parse inputs
        $resourcePath = "/channels/listings";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BigCommerce\Api\v3\Model\Listing',
                '/channels/listings'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\v3\Model\Listing', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\Listing', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation channelsPost
     *
     * Create a Channel
     *
     * @param \BigCommerce\Api\v3\Model\Channel $body  (required)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return \BigCommerce\Api\v3\Model\Channel
     */
    public function channelsPost($body)
    {
        list($response) = $this->channelsPostWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation channelsPostWithHttpInfo
     *
     * Create a Channel
     *
     * @param \BigCommerce\Api\v3\Model\Channel $body  (required)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return array of \BigCommerce\Api\v3\Model\Channel, HTTP status code, HTTP response headers (array of strings)
     */
    public function channelsPostWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling channelsPost');
        }
        // parse inputs
        $resourcePath = "/channels";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BigCommerce\Api\v3\Model\Channel',
                '/channels'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\v3\Model\Channel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\Channel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}