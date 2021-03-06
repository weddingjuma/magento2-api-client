<?php
/**
 * GiftWrappingWrappingRepositoryV1Api
 * PHP version 5
 *
 * @category Class
 * @package  Webgriffe\MagentoApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Magento Enterprise
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Webgriffe\MagentoApiClient\Api;

use \Webgriffe\MagentoApiClient\ApiClient;
use \Webgriffe\MagentoApiClient\ApiException;
use \Webgriffe\MagentoApiClient\Configuration;
use \Webgriffe\MagentoApiClient\ObjectSerializer;

/**
 * GiftWrappingWrappingRepositoryV1Api Class Doc Comment
 *
 * @category Class
 * @package  Webgriffe\MagentoApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GiftWrappingWrappingRepositoryV1Api
{
    /**
     * API Client
     *
     * @var \Webgriffe\MagentoApiClient\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Webgriffe\MagentoApiClient\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Webgriffe\MagentoApiClient\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Webgriffe\MagentoApiClient\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Webgriffe\MagentoApiClient\ApiClient $apiClient set the API client
     *
     * @return GiftWrappingWrappingRepositoryV1Api
     */
    public function setApiClient(\Webgriffe\MagentoApiClient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation giftWrappingWrappingRepositoryV1DeleteByIdDelete
     *
     * 
     *
     * @param int $id  (required)
     * @throws \Webgriffe\MagentoApiClient\ApiException on non-2xx response
     * @return bool
     */
    public function giftWrappingWrappingRepositoryV1DeleteByIdDelete($id)
    {
        list($response) = $this->giftWrappingWrappingRepositoryV1DeleteByIdDeleteWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation giftWrappingWrappingRepositoryV1DeleteByIdDeleteWithHttpInfo
     *
     * 
     *
     * @param int $id  (required)
     * @throws \Webgriffe\MagentoApiClient\ApiException on non-2xx response
     * @return array of bool, HTTP status code, HTTP response headers (array of strings)
     */
    public function giftWrappingWrappingRepositoryV1DeleteByIdDeleteWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling giftWrappingWrappingRepositoryV1DeleteByIdDelete');
        }
        // parse inputs
        $resourcePath = "/V1/gift-wrappings/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
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
                'bool',
                '/V1/gift-wrappings/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'bool', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'bool', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation giftWrappingWrappingRepositoryV1GetGet
     *
     * 
     *
     * @param int $id  (required)
     * @param int $storeId  (optional)
     * @throws \Webgriffe\MagentoApiClient\ApiException on non-2xx response
     * @return \Webgriffe\MagentoApiClient\Model\GiftWrappingDataWrappingInterface
     */
    public function giftWrappingWrappingRepositoryV1GetGet($id, $storeId = null)
    {
        list($response) = $this->giftWrappingWrappingRepositoryV1GetGetWithHttpInfo($id, $storeId);
        return $response;
    }

    /**
     * Operation giftWrappingWrappingRepositoryV1GetGetWithHttpInfo
     *
     * 
     *
     * @param int $id  (required)
     * @param int $storeId  (optional)
     * @throws \Webgriffe\MagentoApiClient\ApiException on non-2xx response
     * @return array of \Webgriffe\MagentoApiClient\Model\GiftWrappingDataWrappingInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function giftWrappingWrappingRepositoryV1GetGetWithHttpInfo($id, $storeId = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling giftWrappingWrappingRepositoryV1GetGet');
        }
        // parse inputs
        $resourcePath = "/V1/gift-wrappings/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($storeId !== null) {
            $queryParams['storeId'] = $this->apiClient->getSerializer()->toQueryValue($storeId);
        }
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
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
                '\Webgriffe\MagentoApiClient\Model\GiftWrappingDataWrappingInterface',
                '/V1/gift-wrappings/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Webgriffe\MagentoApiClient\Model\GiftWrappingDataWrappingInterface', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Model\GiftWrappingDataWrappingInterface', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation giftWrappingWrappingRepositoryV1GetListGet
     *
     * 
     *
     * @param string $searchCriteriaFilterGroupsFiltersField Field (optional)
     * @param string $searchCriteriaFilterGroupsFiltersValue Value (optional)
     * @param string $searchCriteriaFilterGroupsFiltersConditionType Condition type (optional)
     * @param string $searchCriteriaSortOrdersField Sorting field. (optional)
     * @param string $searchCriteriaSortOrdersDirection Sorting direction. (optional)
     * @param int $searchCriteriaPageSize Page size. (optional)
     * @param int $searchCriteriaCurrentPage Current page. (optional)
     * @throws \Webgriffe\MagentoApiClient\ApiException on non-2xx response
     * @return \Webgriffe\MagentoApiClient\Model\GiftWrappingDataWrappingSearchResultsInterface
     */
    public function giftWrappingWrappingRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField = null, $searchCriteriaFilterGroupsFiltersValue = null, $searchCriteriaFilterGroupsFiltersConditionType = null, $searchCriteriaSortOrdersField = null, $searchCriteriaSortOrdersDirection = null, $searchCriteriaPageSize = null, $searchCriteriaCurrentPage = null)
    {
        list($response) = $this->giftWrappingWrappingRepositoryV1GetListGetWithHttpInfo($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
        return $response;
    }

    /**
     * Operation giftWrappingWrappingRepositoryV1GetListGetWithHttpInfo
     *
     * 
     *
     * @param string $searchCriteriaFilterGroupsFiltersField Field (optional)
     * @param string $searchCriteriaFilterGroupsFiltersValue Value (optional)
     * @param string $searchCriteriaFilterGroupsFiltersConditionType Condition type (optional)
     * @param string $searchCriteriaSortOrdersField Sorting field. (optional)
     * @param string $searchCriteriaSortOrdersDirection Sorting direction. (optional)
     * @param int $searchCriteriaPageSize Page size. (optional)
     * @param int $searchCriteriaCurrentPage Current page. (optional)
     * @throws \Webgriffe\MagentoApiClient\ApiException on non-2xx response
     * @return array of \Webgriffe\MagentoApiClient\Model\GiftWrappingDataWrappingSearchResultsInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function giftWrappingWrappingRepositoryV1GetListGetWithHttpInfo($searchCriteriaFilterGroupsFiltersField = null, $searchCriteriaFilterGroupsFiltersValue = null, $searchCriteriaFilterGroupsFiltersConditionType = null, $searchCriteriaSortOrdersField = null, $searchCriteriaSortOrdersDirection = null, $searchCriteriaPageSize = null, $searchCriteriaCurrentPage = null)
    {
        // parse inputs
        $resourcePath = "/V1/gift-wrappings";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($searchCriteriaFilterGroupsFiltersField !== null) {
            $queryParams['searchCriteria[filterGroups][][filters][][field]'] = $this->apiClient->getSerializer()->toQueryValue($searchCriteriaFilterGroupsFiltersField);
        }
        // query params
        if ($searchCriteriaFilterGroupsFiltersValue !== null) {
            $queryParams['searchCriteria[filterGroups][][filters][][value]'] = $this->apiClient->getSerializer()->toQueryValue($searchCriteriaFilterGroupsFiltersValue);
        }
        // query params
        if ($searchCriteriaFilterGroupsFiltersConditionType !== null) {
            $queryParams['searchCriteria[filterGroups][][filters][][conditionType]'] = $this->apiClient->getSerializer()->toQueryValue($searchCriteriaFilterGroupsFiltersConditionType);
        }
        // query params
        if ($searchCriteriaSortOrdersField !== null) {
            $queryParams['searchCriteria[sortOrders][][field]'] = $this->apiClient->getSerializer()->toQueryValue($searchCriteriaSortOrdersField);
        }
        // query params
        if ($searchCriteriaSortOrdersDirection !== null) {
            $queryParams['searchCriteria[sortOrders][][direction]'] = $this->apiClient->getSerializer()->toQueryValue($searchCriteriaSortOrdersDirection);
        }
        // query params
        if ($searchCriteriaPageSize !== null) {
            $queryParams['searchCriteria[pageSize]'] = $this->apiClient->getSerializer()->toQueryValue($searchCriteriaPageSize);
        }
        // query params
        if ($searchCriteriaCurrentPage !== null) {
            $queryParams['searchCriteria[currentPage]'] = $this->apiClient->getSerializer()->toQueryValue($searchCriteriaCurrentPage);
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
                '\Webgriffe\MagentoApiClient\Model\GiftWrappingDataWrappingSearchResultsInterface',
                '/V1/gift-wrappings'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Webgriffe\MagentoApiClient\Model\GiftWrappingDataWrappingSearchResultsInterface', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Model\GiftWrappingDataWrappingSearchResultsInterface', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation giftWrappingWrappingRepositoryV1SavePost
     *
     * 
     *
     * @param \Webgriffe\MagentoApiClient\Model\Body129 $body  (optional)
     * @throws \Webgriffe\MagentoApiClient\ApiException on non-2xx response
     * @return \Webgriffe\MagentoApiClient\Model\GiftWrappingDataWrappingInterface
     */
    public function giftWrappingWrappingRepositoryV1SavePost($body = null)
    {
        list($response) = $this->giftWrappingWrappingRepositoryV1SavePostWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation giftWrappingWrappingRepositoryV1SavePostWithHttpInfo
     *
     * 
     *
     * @param \Webgriffe\MagentoApiClient\Model\Body129 $body  (optional)
     * @throws \Webgriffe\MagentoApiClient\ApiException on non-2xx response
     * @return array of \Webgriffe\MagentoApiClient\Model\GiftWrappingDataWrappingInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function giftWrappingWrappingRepositoryV1SavePostWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/V1/gift-wrappings";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

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
                '\Webgriffe\MagentoApiClient\Model\GiftWrappingDataWrappingInterface',
                '/V1/gift-wrappings'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Webgriffe\MagentoApiClient\Model\GiftWrappingDataWrappingInterface', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Model\GiftWrappingDataWrappingInterface', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation giftWrappingWrappingRepositoryV1SavePut
     *
     * 
     *
     * @param string $wrappingId  (required)
     * @param \Webgriffe\MagentoApiClient\Model\Body130 $body  (optional)
     * @throws \Webgriffe\MagentoApiClient\ApiException on non-2xx response
     * @return \Webgriffe\MagentoApiClient\Model\GiftWrappingDataWrappingInterface
     */
    public function giftWrappingWrappingRepositoryV1SavePut($wrappingId, $body = null)
    {
        list($response) = $this->giftWrappingWrappingRepositoryV1SavePutWithHttpInfo($wrappingId, $body);
        return $response;
    }

    /**
     * Operation giftWrappingWrappingRepositoryV1SavePutWithHttpInfo
     *
     * 
     *
     * @param string $wrappingId  (required)
     * @param \Webgriffe\MagentoApiClient\Model\Body130 $body  (optional)
     * @throws \Webgriffe\MagentoApiClient\ApiException on non-2xx response
     * @return array of \Webgriffe\MagentoApiClient\Model\GiftWrappingDataWrappingInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function giftWrappingWrappingRepositoryV1SavePutWithHttpInfo($wrappingId, $body = null)
    {
        // verify the required parameter 'wrappingId' is set
        if ($wrappingId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $wrappingId when calling giftWrappingWrappingRepositoryV1SavePut');
        }
        // parse inputs
        $resourcePath = "/V1/gift-wrappings/{wrappingId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($wrappingId !== null) {
            $resourcePath = str_replace(
                "{" . "wrappingId" . "}",
                $this->apiClient->getSerializer()->toPathValue($wrappingId),
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
                '\Webgriffe\MagentoApiClient\Model\GiftWrappingDataWrappingInterface',
                '/V1/gift-wrappings/{wrappingId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Webgriffe\MagentoApiClient\Model\GiftWrappingDataWrappingInterface', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Model\GiftWrappingDataWrappingInterface', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Webgriffe\MagentoApiClient\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
