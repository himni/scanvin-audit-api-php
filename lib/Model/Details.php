<?php
/**
 * Details
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * AUDITORIA
 *
 * # Introducão  Seja bem-vindo a documentação da API do [SCANVIN](https://scanvin.com.br) para auditorias    Nossa API foi criada utilizando o padrão [REST](https://restfulapi.net/) e [HATEOAS](https://restfulapi.net/hateoas/), possibilitando a integração de seu sistema ao nosso, e está documentada abaixo.  # Como usar a API?  Logo a seguir você encontrará todos os recursos e métodos suportados pela API, sendo que essa página possibilita que você teste os recursos e métodos diretamente através dela.  # Autenticação  Você precisa de uma [API KEY](https://en.wikipedia.org/wiki/Application_programming_interface_key#HTTP_APIs) para identificar a conta que está realizando solicitações para a API. Você pode obter seu token de autenticação no seu [Painel do Cliente](https://auditoria.scanvin.com.br/client/).  Insira seu token no campo que se encontra topo desta página para testar os métodos da API.  # Webhook  Você também deve configurar seu [Webhook](https://en.wikipedia.org/wiki/Webhook) no [Painel do Cliente](https://auditoria.scanvin.com.br/client/webhook). Quando os resultados da auditoria estiverem disponíveis, uma notificação será enviada para a URL informada, via [HTTP POST](https://en.wikipedia.org/wiki/POST_(HTTP)). A notificação possui ```Content-type``` do tipo ```application/json```. O [JSON](https://en.wikipedia.org/wiki/JSON) postado contém um único campo, ```notification_id```, que contém o identificador único do evento que gerou a notificação. Deve-se então chamar o endpoint ```Inspection - Get Inspection```, informando esse mesmo identificador único, para recuperar os dados da vistoria, e da auditoria realizada.
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.16
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Details Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Details implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Details';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'auditor' => 'string',
'started_at' => 'string',
'ended_at' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'auditor' => null,
'started_at' => null,
'ended_at' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'auditor' => 'auditor',
'started_at' => 'started_at',
'ended_at' => 'ended_at'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auditor' => 'setAuditor',
'started_at' => 'setStartedAt',
'ended_at' => 'setEndedAt'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auditor' => 'getAuditor',
'started_at' => 'getStartedAt',
'ended_at' => 'getEndedAt'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['auditor'] = isset($data['auditor']) ? $data['auditor'] : null;
        $this->container['started_at'] = isset($data['started_at']) ? $data['started_at'] : null;
        $this->container['ended_at'] = isset($data['ended_at']) ? $data['ended_at'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['auditor'] === null) {
            $invalidProperties[] = "'auditor' can't be null";
        }
        if ($this->container['started_at'] === null) {
            $invalidProperties[] = "'started_at' can't be null";
        }
        if ($this->container['ended_at'] === null) {
            $invalidProperties[] = "'ended_at' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets auditor
     *
     * @return string
     */
    public function getAuditor()
    {
        return $this->container['auditor'];
    }

    /**
     * Sets auditor
     *
     * @param string $auditor E-mail do auditor.
     *
     * @return $this
     */
    public function setAuditor($auditor)
    {
        $this->container['auditor'] = $auditor;

        return $this;
    }

    /**
     * Gets started_at
     *
     * @return string
     */
    public function getStartedAt()
    {
        return $this->container['started_at'];
    }

    /**
     * Sets started_at
     *
     * @param string $started_at Início da auditoria.
     *
     * @return $this
     */
    public function setStartedAt($started_at)
    {
        $this->container['started_at'] = $started_at;

        return $this;
    }

    /**
     * Gets ended_at
     *
     * @return string
     */
    public function getEndedAt()
    {
        return $this->container['ended_at'];
    }

    /**
     * Sets ended_at
     *
     * @param string $ended_at Término da auditoria.
     *
     * @return $this
     */
    public function setEndedAt($ended_at)
    {
        $this->container['ended_at'] = $ended_at;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}