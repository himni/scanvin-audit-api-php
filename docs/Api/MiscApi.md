# Swagger\Client\MiscApi

All URIs are relative to *https://auditoria.scanvin.com.br/api/inspection*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inspectionGetInspection**](MiscApi.md#inspectiongetinspection) | **GET** /{notification_id} | Inspection - Get Inspection
[**inspectionPictureTypes**](MiscApi.md#inspectionpicturetypes) | **GET** /picture-types | Inspection - Picture Types
[**inspectionSubmit**](MiscApi.md#inspectionsubmit) | **POST** /submit | Inspection - Submit

# **inspectionGetInspection**
> \Swagger\Client\Model\InspectionGetInspection inspectionGetInspection($notification_id)

Inspection - Get Inspection

Recupera as informações da vistoria e o resultado da auditoria, se estiver disponível.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Api-Key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\MiscApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$notification_id = "notification_id_example"; // string | O código da notificação, recebido pelo seu webhook via HTTP POST

try {
    $result = $apiInstance->inspectionGetInspection($notification_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscApi->inspectionGetInspection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_id** | **string**| O código da notificação, recebido pelo seu webhook via HTTP POST |

### Return type

[**\Swagger\Client\Model\InspectionGetInspection**](../Model/InspectionGetInspection.md)

### Authorization

[Api-Key](../../README.md#Api-Key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inspectionPictureTypes**
> string inspectionPictureTypes()

Inspection - Picture Types

Utilize este endpoint para obter a lista de códigos para os tipos de imagem que devem ser utilizados ao realizar chamadas ao endpoint ```Inspection - Submit```.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Api-Key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\MiscApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->inspectionPictureTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscApi->inspectionPictureTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

[Api-Key](../../README.md#Api-Key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inspectionSubmit**
> \Swagger\Client\Model\InspectionSubmit inspectionSubmit($body)

Inspection - Submit

Utilize este endpoint para enviar uma vistoria para auditoria. As vistorias são colocadas em uma fila e distribuídas aleatoriamente entre os auditores, e são processadas na ordem de chegada. Para receber uma notificação assim que a auditoria for realizada, configure o webhook no [Painel do Cliente](https://auditoria.scanvin.com.br/client/webhook). Alternativamente, caso prefira especificar um webhook customizado para cada vistoria, informe o parâmetro ```postback_url```.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Api-Key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\MiscApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\InspectionSubmitRequest(); // \Swagger\Client\Model\InspectionSubmitRequest | 

try {
    $result = $apiInstance->inspectionSubmit($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscApi->inspectionSubmit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\InspectionSubmitRequest**](../Model/InspectionSubmitRequest.md)|  |

### Return type

[**\Swagger\Client\Model\InspectionSubmit**](../Model/InspectionSubmit.md)

### Authorization

[Api-Key](../../README.md#Api-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

