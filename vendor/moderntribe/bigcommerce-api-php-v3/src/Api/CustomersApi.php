<?php
/**
 * CustomersApi
 * PHP version 5
 *
 * @category Class
 * @package  BigCommerce\Api\v3
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BigCommerce API
 *
 * A Swagger Document for the BigCommmerce v3 API.
 *
 * OpenAPI spec version: 3.0.0b
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
 * CustomersApi Class Doc Comment
 *
 * @category Class
 * @package  BigCommerce\Api\v3
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomersApi
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
            $apiClient->getConfig()->setHost('https://api.bigcommerce.com/stores/{{store_id}}/v3');
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
     * @return CustomersApi
     */
    public function setApiClient(\BigCommerce\Api\v3\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createSubscriber
     *
     * 
     *
     * @param \BigCommerce\Api\v3\Model\SubscriberPost $subscriber &#x60;Subscriber&#x60; object. (required)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return \BigCommerce\Api\v3\Model\SubscriberResponse
     */
    public function createSubscriber($subscriber)
    {
        list($response) = $this->createSubscriberWithHttpInfo($subscriber);
        return $response;
    }

    /**
     * Operation createSubscriberWithHttpInfo
     *
     * 
     *
     * @param \BigCommerce\Api\v3\Model\SubscriberPost $subscriber &#x60;Subscriber&#x60; object. (required)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return array of \BigCommerce\Api\v3\Model\SubscriberResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createSubscriberWithHttpInfo($subscriber)
    {
        // verify the required parameter 'subscriber' is set
        if ($subscriber === null) {
            throw new \InvalidArgumentException('Missing the required parameter $subscriber when calling createSubscriber');
        }
        // parse inputs
        $resourcePath = "/customers/subscribers";
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
        if (isset($subscriber)) {
            $_tempBody = $subscriber;
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
                '\BigCommerce\Api\v3\Model\SubscriberResponse',
                '/customers/subscribers'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\v3\Model\SubscriberResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\SubscriberResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteSubscriberById
     *
     * 
     *
     * @param int $subscriber_id The ID of the &#x60;Subscriber&#x60; requested. (required)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return void
     */
    public function deleteSubscriberById($subscriber_id)
    {
        list($response) = $this->deleteSubscriberByIdWithHttpInfo($subscriber_id);
        return $response;
    }

    /**
     * Operation deleteSubscriberByIdWithHttpInfo
     *
     * 
     *
     * @param int $subscriber_id The ID of the &#x60;Subscriber&#x60; requested. (required)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteSubscriberByIdWithHttpInfo($subscriber_id)
    {
        // verify the required parameter 'subscriber_id' is set
        if ($subscriber_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $subscriber_id when calling deleteSubscriberById');
        }
        // parse inputs
        $resourcePath = "/customers/subscribers/{subscriber_id}";
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
        if ($subscriber_id !== null) {
            $resourcePath = str_replace(
                "{" . "subscriber_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($subscriber_id),
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
                '/customers/subscribers/{subscriber_id}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation deleteSubscribers
     *
     * 
     *
     * @param string $email Filter items by email. (optional)
     * @param string $first_name Filter items by first_name. (optional)
     * @param string $last_name Filter items by last_name. (optional)
     * @param string $source Filter items by source. (optional)
     * @param int $order_id Filter items by order_id. (optional)
     * @param \DateTime $date_created Filter items by date_created. (optional)
     * @param \DateTime $date_modified Filter items by date_modified. (optional)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return void
     */
    public function deleteSubscribers($email = null, $first_name = null, $last_name = null, $source = null, $order_id = null, $date_created = null, $date_modified = null)
    {
        list($response) = $this->deleteSubscribersWithHttpInfo($email, $first_name, $last_name, $source, $order_id, $date_created, $date_modified);
        return $response;
    }

    /**
     * Operation deleteSubscribersWithHttpInfo
     *
     * 
     *
     * @param string $email Filter items by email. (optional)
     * @param string $first_name Filter items by first_name. (optional)
     * @param string $last_name Filter items by last_name. (optional)
     * @param string $source Filter items by source. (optional)
     * @param int $order_id Filter items by order_id. (optional)
     * @param \DateTime $date_created Filter items by date_created. (optional)
     * @param \DateTime $date_modified Filter items by date_modified. (optional)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteSubscribersWithHttpInfo($email = null, $first_name = null, $last_name = null, $source = null, $order_id = null, $date_created = null, $date_modified = null)
    {
        // parse inputs
        $resourcePath = "/customers/subscribers";
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
        if ($email !== null) {
            $queryParams['email'] = $this->apiClient->getSerializer()->toQueryValue($email);
        }
        // query params
        if ($first_name !== null) {
            $queryParams['first_name'] = $this->apiClient->getSerializer()->toQueryValue($first_name);
        }
        // query params
        if ($last_name !== null) {
            $queryParams['last_name'] = $this->apiClient->getSerializer()->toQueryValue($last_name);
        }
        // query params
        if ($source !== null) {
            $queryParams['source'] = $this->apiClient->getSerializer()->toQueryValue($source);
        }
        // query params
        if ($order_id !== null) {
            $queryParams['order_id'] = $this->apiClient->getSerializer()->toQueryValue($order_id);
        }
        // query params
        if ($date_created !== null) {
            $queryParams['date_created'] = $this->apiClient->getSerializer()->toQueryValue($date_created);
        }
        // query params
        if ($date_modified !== null) {
            $queryParams['date_modified'] = $this->apiClient->getSerializer()->toQueryValue($date_modified);
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
                '/customers/subscribers'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getSubscriberById
     *
     * 
     *
     * @param int $subscriber_id The ID of the &#x60;Subscriber&#x60; requested. (required)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return \BigCommerce\Api\v3\Model\SubscriberResponse
     */
    public function getSubscriberById($subscriber_id)
    {
        list($response) = $this->getSubscriberByIdWithHttpInfo($subscriber_id);
        return $response;
    }

    /**
     * Operation getSubscriberByIdWithHttpInfo
     *
     * 
     *
     * @param int $subscriber_id The ID of the &#x60;Subscriber&#x60; requested. (required)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return array of \BigCommerce\Api\v3\Model\SubscriberResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSubscriberByIdWithHttpInfo($subscriber_id)
    {
        // verify the required parameter 'subscriber_id' is set
        if ($subscriber_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $subscriber_id when calling getSubscriberById');
        }
        // parse inputs
        $resourcePath = "/customers/subscribers/{subscriber_id}";
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
        if ($subscriber_id !== null) {
            $resourcePath = str_replace(
                "{" . "subscriber_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($subscriber_id),
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
                '\BigCommerce\Api\v3\Model\SubscriberResponse',
                '/customers/subscribers/{subscriber_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\v3\Model\SubscriberResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\SubscriberResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\NotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getSubscribers
     *
     * 
     *
     * @param string $email Filter items by email. (optional)
     * @param string $first_name Filter items by first_name. (optional)
     * @param string $last_name Filter items by last_name. (optional)
     * @param string $source Filter items by source. (optional)
     * @param int $order_id Filter items by order_id. (optional)
     * @param \DateTime $date_created Filter items by date_created. (optional)
     * @param \DateTime $date_modified Filter items by date_modified. (optional)
     * @param int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return \BigCommerce\Api\v3\Model\SubscriberCollectionResponse
     */
    public function getSubscribers($email = null, $first_name = null, $last_name = null, $source = null, $order_id = null, $date_created = null, $date_modified = null, $page = null, $limit = null)
    {
        list($response) = $this->getSubscribersWithHttpInfo($email, $first_name, $last_name, $source, $order_id, $date_created, $date_modified, $page, $limit);
        return $response;
    }

    /**
     * Operation getSubscribersWithHttpInfo
     *
     * 
     *
     * @param string $email Filter items by email. (optional)
     * @param string $first_name Filter items by first_name. (optional)
     * @param string $last_name Filter items by last_name. (optional)
     * @param string $source Filter items by source. (optional)
     * @param int $order_id Filter items by order_id. (optional)
     * @param \DateTime $date_created Filter items by date_created. (optional)
     * @param \DateTime $date_modified Filter items by date_modified. (optional)
     * @param int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return array of \BigCommerce\Api\v3\Model\SubscriberCollectionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSubscribersWithHttpInfo($email = null, $first_name = null, $last_name = null, $source = null, $order_id = null, $date_created = null, $date_modified = null, $page = null, $limit = null)
    {
        // parse inputs
        $resourcePath = "/customers/subscribers";
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
        if ($email !== null) {
            $queryParams['email'] = $this->apiClient->getSerializer()->toQueryValue($email);
        }
        // query params
        if ($first_name !== null) {
            $queryParams['first_name'] = $this->apiClient->getSerializer()->toQueryValue($first_name);
        }
        // query params
        if ($last_name !== null) {
            $queryParams['last_name'] = $this->apiClient->getSerializer()->toQueryValue($last_name);
        }
        // query params
        if ($source !== null) {
            $queryParams['source'] = $this->apiClient->getSerializer()->toQueryValue($source);
        }
        // query params
        if ($order_id !== null) {
            $queryParams['order_id'] = $this->apiClient->getSerializer()->toQueryValue($order_id);
        }
        // query params
        if ($date_created !== null) {
            $queryParams['date_created'] = $this->apiClient->getSerializer()->toQueryValue($date_created);
        }
        // query params
        if ($date_modified !== null) {
            $queryParams['date_modified'] = $this->apiClient->getSerializer()->toQueryValue($date_modified);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
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
                '\BigCommerce\Api\v3\Model\SubscriberCollectionResponse',
                '/customers/subscribers'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\v3\Model\SubscriberCollectionResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\SubscriberCollectionResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateSubscriber
     *
     * 
     *
     * @param int $subscriber_id The ID of the &#x60;Subscriber&#x60; requested. (required)
     * @param \BigCommerce\Api\v3\Model\SubscriberPut $subscriber Returns a &#x60;Subscriber&#x60; object. (required)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return \BigCommerce\Api\v3\Model\SubscriberResponse
     */
    public function updateSubscriber($subscriber_id, $subscriber)
    {
        list($response) = $this->updateSubscriberWithHttpInfo($subscriber_id, $subscriber);
        return $response;
    }

    /**
     * Operation updateSubscriberWithHttpInfo
     *
     * 
     *
     * @param int $subscriber_id The ID of the &#x60;Subscriber&#x60; requested. (required)
     * @param \BigCommerce\Api\v3\Model\SubscriberPut $subscriber Returns a &#x60;Subscriber&#x60; object. (required)
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @return array of \BigCommerce\Api\v3\Model\SubscriberResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateSubscriberWithHttpInfo($subscriber_id, $subscriber)
    {
        // verify the required parameter 'subscriber_id' is set
        if ($subscriber_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $subscriber_id when calling updateSubscriber');
        }
        // verify the required parameter 'subscriber' is set
        if ($subscriber === null) {
            throw new \InvalidArgumentException('Missing the required parameter $subscriber when calling updateSubscriber');
        }
        // parse inputs
        $resourcePath = "/customers/subscribers/{subscriber_id}";
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
        if ($subscriber_id !== null) {
            $resourcePath = str_replace(
                "{" . "subscriber_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($subscriber_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($subscriber)) {
            $_tempBody = $subscriber;
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
                '\BigCommerce\Api\v3\Model\SubscriberResponse',
                '/customers/subscribers/{subscriber_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\v3\Model\SubscriberResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\SubscriberResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\NotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}