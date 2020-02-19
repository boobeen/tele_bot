# Swagger\Client\MessagesApi

All URIs are relative to *https://api.teletype.app/public/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**messageSendPost**](MessagesApi.md#messagesendpost) | **POST** /message/send | Отправка сообщения
[**messagesGet**](MessagesApi.md#messagesget) | **GET** /messages | Получение списка сообщений

# **messageSendPost**
> \Swagger\Client\Model\InlineResponse2001 messageSendPost($dialog_id, $text, $file, $url, $x_auth_token, $token)

Отправка сообщения

Позволяет отправить сообщение с опциональным вложением медиафайла в диалог с клиентом по ID диалога

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dialog_id = "dialog_id_example"; // string | 
$text = "text_example"; // string | 
$file = "file_example"; // string | 
$url = "url_example"; // string | 
$x_auth_token = "x_auth_token_example"; // string | Токен для авторизации
$token = "token_example"; // string | Токен для авторизации

try {
    $result = $apiInstance->messageSendPost($dialog_id, $text, $file, $url, $x_auth_token, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->messageSendPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dialog_id** | **string**|  |
 **text** | **string**|  |
 **file** | **string****string**|  |
 **url** | **string**|  |
 **x_auth_token** | **string**| Токен для авторизации |
 **token** | **string**| Токен для авторизации |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messagesGet**
> \Swagger\Client\Model\InlineResponse200 messagesGet($x_auth_token, $token, $page, $page_size, $dialog_id, $channel_id, $client_id)

Получение списка сообщений

Возвращает список сообщений отсортированый в порядке убывания даты отправки сообщения с группировкой по диалогам

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | Токен для авторизации
$token = "token_example"; // string | Токен для авторизации
$page = 56; // int | Текущая страница
$page_size = 56; // int | Количество данных на странице
$dialog_id = "dialog_id_example"; // string | Идентификатор диалога
$channel_id = "channel_id_example"; // string | Идентификатор канала
$client_id = "client_id_example"; // string | Идентификатор клиента

try {
    $result = $apiInstance->messagesGet($x_auth_token, $token, $page, $page_size, $dialog_id, $channel_id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->messagesGet: ', $e->getMessage(), PHP_EOL;
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
 **dialog_id** | **string**| Идентификатор диалога | [optional]
 **channel_id** | **string**| Идентификатор канала | [optional]
 **client_id** | **string**| Идентификатор клиента | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

