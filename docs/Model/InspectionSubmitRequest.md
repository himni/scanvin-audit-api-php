# InspectionSubmitRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_id** | **string** | Número ou ID do protocolo fornecidos pelo cliente. Obrigatório. | 
**car_engine** | **string** | Número do motor. | 
**car_plate** | **string** | Número da placa de identificação veicular. Obrigatório se &#x60;&#x60;&#x60;car_vin&#x60;&#x60;&#x60; estiver ausente. | 
**car_renavam** | **string** | Número do RENAVAM. | 
**car_state** | **string** | UF da placa de identificação veicular. Obrigatório se &#x60;&#x60;&#x60;car_plate&#x60;&#x60;&#x60; estiver presente. | 
**car_vin** | **string** | Número de chassi. Obrigatório se &#x60;&#x60;&#x60;car_plate&#x60;&#x60;&#x60; estiver ausente. | 
**engine_accepted** | **bool** | Informa se o vistoriador aprovou ou reprovou a numeração do motor. Obrigatório se &#x60;&#x60;&#x60;car_engine&#x60;&#x60;&#x60;estiver presente. | 
**vin_accepted** | **bool** | Informa se o vistoriador aprovou ou reprovação a numeração do chassi. Obrigatório se &#x60;&#x60;&#x60;car_vin&#x60;&#x60;&#x60; estiver presente. | 
**surveyor_email** | **string** | E-mail do vistoriador. Obrigatório. | 
**postback_url** | **string** | URL do webhook para o qual o resultado da auditoria deve ser postado, quando disponível. Aplica-se somente a este protocolo. Se omitido, será utilizada a URL padrão, que deve ser configurada no Painel do Cliente. | 
**pictures** | [**\Swagger\Client\Model\Picture[]**](Picture.md) | Imagens do veículo, para serem auditadas. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

