<?php
/**
 * V2SnapshotLocaleGlobalMarketsCryptoTickersGet200ResponseAllOfTickersInnerMin
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Polygon API
 *
 * The future of fintech.
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * V2SnapshotLocaleGlobalMarketsCryptoTickersGet200ResponseAllOfTickersInnerMin Class Doc Comment
 *
 * @category Class
 * @description The most recent minute bar for this ticker.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class V2SnapshotLocaleGlobalMarketsCryptoTickersGet200ResponseAllOfTickersInnerMin implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_v2_snapshot_locale_global_markets_crypto_tickers_get_200_response_allOf_tickers_inner_min';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'c' => 'float',
        'h' => 'float',
        'l' => 'float',
        'n' => 'int',
        'o' => 'float',
        't' => 'int',
        'v' => 'float',
        'vw' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'c' => 'double',
        'h' => 'double',
        'l' => 'double',
        'n' => null,
        'o' => 'double',
        't' => null,
        'v' => 'double',
        'vw' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'c' => false,
        'h' => false,
        'l' => false,
        'n' => false,
        'o' => false,
        't' => false,
        'v' => false,
        'vw' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'c' => 'c',
        'h' => 'h',
        'l' => 'l',
        'n' => 'n',
        'o' => 'o',
        't' => 't',
        'v' => 'v',
        'vw' => 'vw'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'c' => 'setC',
        'h' => 'setH',
        'l' => 'setL',
        'n' => 'setN',
        'o' => 'setO',
        't' => 'setT',
        'v' => 'setV',
        'vw' => 'setVw'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'c' => 'getC',
        'h' => 'getH',
        'l' => 'getL',
        'n' => 'getN',
        'o' => 'getO',
        't' => 'getT',
        'v' => 'getV',
        'vw' => 'getVw'
    ];

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
        return self::$openAPIModelName;
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
        $this->setIfExists('c', $data ?? [], null);
        $this->setIfExists('h', $data ?? [], null);
        $this->setIfExists('l', $data ?? [], null);
        $this->setIfExists('n', $data ?? [], null);
        $this->setIfExists('o', $data ?? [], null);
        $this->setIfExists('t', $data ?? [], null);
        $this->setIfExists('v', $data ?? [], null);
        $this->setIfExists('vw', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['c'] === null) {
            $invalidProperties[] = "'c' can't be null";
        }
        if ($this->container['h'] === null) {
            $invalidProperties[] = "'h' can't be null";
        }
        if ($this->container['l'] === null) {
            $invalidProperties[] = "'l' can't be null";
        }
        if ($this->container['n'] === null) {
            $invalidProperties[] = "'n' can't be null";
        }
        if ($this->container['o'] === null) {
            $invalidProperties[] = "'o' can't be null";
        }
        if ($this->container['t'] === null) {
            $invalidProperties[] = "'t' can't be null";
        }
        if ($this->container['v'] === null) {
            $invalidProperties[] = "'v' can't be null";
        }
        if ($this->container['vw'] === null) {
            $invalidProperties[] = "'vw' can't be null";
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
     * Gets c
     *
     * @return float
     */
    public function getC()
    {
        return $this->container['c'];
    }

    /**
     * Sets c
     *
     * @param float $c The close price for the symbol in the given time period.
     *
     * @return self
     */
    public function setC($c)
    {
        if (is_null($c)) {
            throw new \InvalidArgumentException('non-nullable c cannot be null');
        }
        $this->container['c'] = $c;

        return $this;
    }

    /**
     * Gets h
     *
     * @return float
     */
    public function getH()
    {
        return $this->container['h'];
    }

    /**
     * Sets h
     *
     * @param float $h The highest price for the symbol in the given time period.
     *
     * @return self
     */
    public function setH($h)
    {
        if (is_null($h)) {
            throw new \InvalidArgumentException('non-nullable h cannot be null');
        }
        $this->container['h'] = $h;

        return $this;
    }

    /**
     * Gets l
     *
     * @return float
     */
    public function getL()
    {
        return $this->container['l'];
    }

    /**
     * Sets l
     *
     * @param float $l The lowest price for the symbol in the given time period.
     *
     * @return self
     */
    public function setL($l)
    {
        if (is_null($l)) {
            throw new \InvalidArgumentException('non-nullable l cannot be null');
        }
        $this->container['l'] = $l;

        return $this;
    }

    /**
     * Gets n
     *
     * @return int
     */
    public function getN()
    {
        return $this->container['n'];
    }

    /**
     * Sets n
     *
     * @param int $n The number of transactions in the aggregate window.
     *
     * @return self
     */
    public function setN($n)
    {
        if (is_null($n)) {
            throw new \InvalidArgumentException('non-nullable n cannot be null');
        }
        $this->container['n'] = $n;

        return $this;
    }

    /**
     * Gets o
     *
     * @return float
     */
    public function getO()
    {
        return $this->container['o'];
    }

    /**
     * Sets o
     *
     * @param float $o The open price for the symbol in the given time period.
     *
     * @return self
     */
    public function setO($o)
    {
        if (is_null($o)) {
            throw new \InvalidArgumentException('non-nullable o cannot be null');
        }
        $this->container['o'] = $o;

        return $this;
    }

    /**
     * Gets t
     *
     * @return int
     */
    public function getT()
    {
        return $this->container['t'];
    }

    /**
     * Sets t
     *
     * @param int $t The Unix Msec timestamp for the start of the aggregate window.
     *
     * @return self
     */
    public function setT($t)
    {
        if (is_null($t)) {
            throw new \InvalidArgumentException('non-nullable t cannot be null');
        }
        $this->container['t'] = $t;

        return $this;
    }

    /**
     * Gets v
     *
     * @return float
     */
    public function getV()
    {
        return $this->container['v'];
    }

    /**
     * Sets v
     *
     * @param float $v The trading volume of the symbol in the given time period.
     *
     * @return self
     */
    public function setV($v)
    {
        if (is_null($v)) {
            throw new \InvalidArgumentException('non-nullable v cannot be null');
        }
        $this->container['v'] = $v;

        return $this;
    }

    /**
     * Gets vw
     *
     * @return float
     */
    public function getVw()
    {
        return $this->container['vw'];
    }

    /**
     * Sets vw
     *
     * @param float $vw The volume weighted average price.
     *
     * @return self
     */
    public function setVw($vw)
    {
        if (is_null($vw)) {
            throw new \InvalidArgumentException('non-nullable vw cannot be null');
        }
        $this->container['vw'] = $vw;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


