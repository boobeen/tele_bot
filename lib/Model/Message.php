<?php
/**
 * Message
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Teletype Public API
 *
 * ## Общая информация Вы можете использовать данную документацию для ознакомления с методами API. Описание произведено в формате [**Swagger 3.0**](https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.0.md). Для генерации базового кода для работы с API на удобном для вас языке программирования воспользуйтесь утилитой [**Swagger Codegen**](https://swagger.io/swagger-codegen/) или online сервисом [**Swagger Editor**](https://editor.swagger.io/).  По всем вопросам работы с API обращайтесь к нам по email: <a href=\"mailto:p@teletype.app\">p@teletype.app</a></li>
 *
 * OpenAPI spec version: 1.0.4
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
 * Message Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Message implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'message';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'dialog_id' => 'string',
'text' => 'string',
'attachments' => '\Swagger\Client\Model\MessageAttachments[]',
'operator' => '\Swagger\Client\Model\MessageOperator',
'client' => '\Swagger\Client\Model\MessageClient',
'channel' => '\Swagger\Client\Model\MessageChannel',
'created_at' => '\Swagger\Client\Model\MessageCreatedAt',
'is_it_client' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'dialog_id' => null,
'text' => null,
'attachments' => null,
'operator' => null,
'client' => null,
'channel' => null,
'created_at' => null,
'is_it_client' => null    ];

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
        'id' => 'id',
'dialog_id' => 'dialogId',
'text' => 'text',
'attachments' => 'attachments',
'operator' => 'operator',
'client' => 'client',
'channel' => 'channel',
'created_at' => 'createdAt',
'is_it_client' => 'isItClient'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'dialog_id' => 'setDialogId',
'text' => 'setText',
'attachments' => 'setAttachments',
'operator' => 'setOperator',
'client' => 'setClient',
'channel' => 'setChannel',
'created_at' => 'setCreatedAt',
'is_it_client' => 'setIsItClient'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'dialog_id' => 'getDialogId',
'text' => 'getText',
'attachments' => 'getAttachments',
'operator' => 'getOperator',
'client' => 'getClient',
'channel' => 'getChannel',
'created_at' => 'getCreatedAt',
'is_it_client' => 'getIsItClient'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['dialog_id'] = isset($data['dialog_id']) ? $data['dialog_id'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['client'] = isset($data['client']) ? $data['client'] : null;
        $this->container['channel'] = isset($data['channel']) ? $data['channel'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['is_it_client'] = isset($data['is_it_client']) ? $data['is_it_client'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Идентификатор сообщения
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets dialog_id
     *
     * @return string
     */
    public function getDialogId()
    {
        return $this->container['dialog_id'];
    }

    /**
     * Sets dialog_id
     *
     * @param string $dialog_id Идентификатор диалога
     *
     * @return $this
     */
    public function setDialogId($dialog_id)
    {
        $this->container['dialog_id'] = $dialog_id;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text Текст сообщения
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \Swagger\Client\Model\MessageAttachments[]
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \Swagger\Client\Model\MessageAttachments[] $attachments Аттачменты
     *
     * @return $this
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets operator
     *
     * @return \Swagger\Client\Model\MessageOperator
     */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
     * Sets operator
     *
     * @param \Swagger\Client\Model\MessageOperator $operator operator
     *
     * @return $this
     */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;

        return $this;
    }

    /**
     * Gets client
     *
     * @return \Swagger\Client\Model\MessageClient
     */
    public function getClient()
    {
        return $this->container['client'];
    }

    /**
     * Sets client
     *
     * @param \Swagger\Client\Model\MessageClient $client client
     *
     * @return $this
     */
    public function setClient($client)
    {
        $this->container['client'] = $client;

        return $this;
    }

    /**
     * Gets channel
     *
     * @return \Swagger\Client\Model\MessageChannel
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param \Swagger\Client\Model\MessageChannel $channel channel
     *
     * @return $this
     */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \Swagger\Client\Model\MessageCreatedAt
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \Swagger\Client\Model\MessageCreatedAt $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets is_it_client
     *
     * @return bool
     */
    public function getIsItClient()
    {
        return $this->container['is_it_client'];
    }

    /**
     * Sets is_it_client
     *
     * @param bool $is_it_client Признак того, что сообщение пришло от клиента
     *
     * @return $this
     */
    public function setIsItClient($is_it_client)
    {
        $this->container['is_it_client'] = $is_it_client;

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
