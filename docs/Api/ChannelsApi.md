# Swagger\Client\ChannelsApi

All URIs are relative to *https://api.teletype.app/public/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**channelsGet**](ChannelsApi.md#channelsget) | **GET** /channels | Получение списка каналов

# **channelsGet**
> \Swagger\Client\Model\InlineResponse2004 channelsGet($x_auth_token, $token, $page, $page_size, $channel_type)

Получение списка каналов

Возвращает список активных каналов в текущем проекте

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | Токен для авторизации
$token = "token_example"; // string | Токен для авторизации
$page = 56; // int | Текущая страница
$page_size = 56; // int | Количество данных на странице
$channel_type = "channel_type_example"; // string | Тип канала

try {
    $result = $apiInstance->channelsGet($x_auth_token, $token, $page, $page_size, $channel_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->channelsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| Токен для авторизации |
 **token** | **string**| Токен для авторизации |
 **page** | **int**| Текущая страница | [optional]
 **page_size** | **int**| Количество данных на странице | [optional]
 **channel_type** | **string**| Тип канала | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

