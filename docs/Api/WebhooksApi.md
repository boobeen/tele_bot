# Swagger\Client\WebhooksApi

All URIs are relative to *https://api.teletype.app/public/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**newMessagePost**](WebhooksApi.md#newmessagepost) | **POST** /new-message | Событие поступления нового сообщения от клиента
[**successSendPost**](WebhooksApi.md#successsendpost) | **POST** /success-send | Событие об успешной отправки сообщения

# **newMessagePost**
> newMessagePost($name, $payload)

Событие поступления нового сообщения от клиента

Событие отправляет на указанный в проекте Webhook данные о новом сообщении от клиента.  Параметр `payload` содержит сериализованный массив с информацией о сообщении

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$payload = new \Swagger\Client\Model\Message(); // \Swagger\Client\Model\Message | 

try {
    $apiInstance->newMessagePost($name, $payload);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->newMessagePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **payload** | [**\Swagger\Client\Model\Message**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **successSendPost**
> successSendPost($name, $payload)

Событие об успешной отправки сообщения

Событие отправляет на указанный в проекте Webhook уведомление об успешной отправке оператором сообщения клиенту.  Параметр `payload` содержит сериализованный массив с идентификаторами отправленного сообщения и диалога, в который оно отправлено

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$payload = new \Swagger\Client\Model\SuccesssendPayload(); // \Swagger\Client\Model\SuccesssendPayload | 

try {
    $apiInstance->successSendPost($name, $payload);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->successSendPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **payload** | [**\Swagger\Client\Model\SuccesssendPayload**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

