# Swagger\Client\ClientsApi

All URIs are relative to *https://api.teletype.app/public/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**clientDialogGet**](ClientsApi.md#clientdialogget) | **GET** /client/dialog | Получение последнего диалога клиента
[**clientsGet**](ClientsApi.md#clientsget) | **GET** /clients | Получение списка клиентов

# **clientDialogGet**
> \Swagger\Client\Model\InlineResponse2003 clientDialogGet($x_auth_token, $token, $client_id, $channel_id, $channel_type)

Получение последнего диалога клиента

Возвращает диалог с клиентом полученный по дате последнего сообщения по убыванию

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | Токен для авторизации
$token = "token_example"; // string | Токен для авторизации
$client_id = "client_id_example"; // string | Идентификатор клиента
$channel_id = "channel_id_example"; // string | Идентификатор канала
$channel_type = "channel_type_example"; // string | Тип канала

try {
    $result = $apiInstance->clientDialogGet($x_auth_token, $token, $client_id, $channel_id, $channel_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientDialogGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| Токен для авторизации |
 **token** | **string**| Токен для авторизации |
 **client_id** | **string**| Идентификатор клиента |
 **channel_id** | **string**| Идентификатор канала | [optional]
 **channel_type** | **string**| Тип канала | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientsGet**
> \Swagger\Client\Model\InlineResponse2002 clientsGet($x_auth_token, $token, $page, $page_size, $client_id, $client_phone)

Получение списка клиентов

Возврашает список клиентов, с которыми присутствуют диалоги в данном проекте

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | Токен для авторизации
$token = "token_example"; // string | Токен для авторизации
$page = 56; // int | Текущая страница
$page_size = 56; // int | Количество данных на странице
$client_id = "client_id_example"; // string | Идентификатор клиента
$client_phone = "client_phone_example"; // string | Номер телефона клиента

try {
    $result = $apiInstance->clientsGet($x_auth_token, $token, $page, $page_size, $client_id, $client_phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->clientsGet: ', $e->getMessage(), PHP_EOL;
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
 **client_id** | **string**| Идентификатор клиента | [optional]
 **client_phone** | **string**| Номер телефона клиента | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

