<?php
/**
 * GetMarketStatus200ResponseIndicesGroups
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
 * GetMarketStatus200ResponseIndicesGroups Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetMarketStatus200ResponseIndicesGroups implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetMarketStatus_200_response_indicesGroups';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cccy' => 'string',
        'dow_jones' => 'string',
        'ftse_russell' => 'string',
        'msci' => 'string',
        'mstar' => 'string',
        'mstarc' => 'mixed',
        'nasdaq' => 'string',
        's_and_p' => 'string',
        'societe_generale' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cccy' => null,
        'dow_jones' => null,
        'ftse_russell' => null,
        'msci' => null,
        'mstar' => null,
        'mstarc' => null,
        'nasdaq' => null,
        's_and_p' => null,
        'societe_generale' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cccy' => false,
        'dow_jones' => false,
        'ftse_russell' => false,
        'msci' => false,
        'mstar' => false,
        'mstarc' => true,
        'nasdaq' => false,
        's_and_p' => false,
        'societe_generale' => false
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
        'cccy' => 'cccy',
        'dow_jones' => 'dow_jones',
        'ftse_russell' => 'ftse_russell',
        'msci' => 'msci',
        'mstar' => 'mstar',
        'mstarc' => 'mstarc',
        'nasdaq' => 'nasdaq',
        's_and_p' => 's_and_p',
        'societe_generale' => 'societe_generale'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cccy' => 'setCccy',
        'dow_jones' => 'setDowJones',
        'ftse_russell' => 'setFtseRussell',
        'msci' => 'setMsci',
        'mstar' => 'setMstar',
        'mstarc' => 'setMstarc',
        'nasdaq' => 'setNasdaq',
        's_and_p' => 'setSAndP',
        'societe_generale' => 'setSocieteGenerale'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cccy' => 'getCccy',
        'dow_jones' => 'getDowJones',
        'ftse_russell' => 'getFtseRussell',
        'msci' => 'getMsci',
        'mstar' => 'getMstar',
        'mstarc' => 'getMstarc',
        'nasdaq' => 'getNasdaq',
        's_and_p' => 'getSAndP',
        'societe_generale' => 'getSocieteGenerale'
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
        $this->setIfExists('cccy', $data ?? [], null);
        $this->setIfExists('dow_jones', $data ?? [], null);
        $this->setIfExists('ftse_russell', $data ?? [], null);
        $this->setIfExists('msci', $data ?? [], null);
        $this->setIfExists('mstar', $data ?? [], null);
        $this->setIfExists('mstarc', $data ?? [], null);
        $this->setIfExists('nasdaq', $data ?? [], null);
        $this->setIfExists('s_and_p', $data ?? [], null);
        $this->setIfExists('societe_generale', $data ?? [], null);
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
     * Gets cccy
     *
     * @return string|null
     */
    public function getCccy()
    {
        return $this->container['cccy'];
    }

    /**
     * Sets cccy
     *
     * @param string|null $cccy The status of Cboe Streaming Market Indices Cryptocurrency (\"CCCY\") indices trading hours.
     *
     * @return self
     */
    public function setCccy($cccy)
    {
        if (is_null($cccy)) {
            throw new \InvalidArgumentException('non-nullable cccy cannot be null');
        }
        $this->container['cccy'] = $cccy;

        return $this;
    }

    /**
     * Gets dow_jones
     *
     * @return string|null
     */
    public function getDowJones()
    {
        return $this->container['dow_jones'];
    }

    /**
     * Sets dow_jones
     *
     * @param string|null $dow_jones The status of Dow Jones indices trading hours
     *
     * @return self
     */
    public function setDowJones($dow_jones)
    {
        if (is_null($dow_jones)) {
            throw new \InvalidArgumentException('non-nullable dow_jones cannot be null');
        }
        $this->container['dow_jones'] = $dow_jones;

        return $this;
    }

    /**
     * Gets ftse_russell
     *
     * @return string|null
     */
    public function getFtseRussell()
    {
        return $this->container['ftse_russell'];
    }

    /**
     * Sets ftse_russell
     *
     * @param string|null $ftse_russell The status of Financial Times Stock Exchange Group (\"FTSE\") Russell indices trading hours.
     *
     * @return self
     */
    public function setFtseRussell($ftse_russell)
    {
        if (is_null($ftse_russell)) {
            throw new \InvalidArgumentException('non-nullable ftse_russell cannot be null');
        }
        $this->container['ftse_russell'] = $ftse_russell;

        return $this;
    }

    /**
     * Gets msci
     *
     * @return string|null
     */
    public function getMsci()
    {
        return $this->container['msci'];
    }

    /**
     * Sets msci
     *
     * @param string|null $msci The status of Morgan Stanley Capital International (\"MSCI\") indices trading hours.
     *
     * @return self
     */
    public function setMsci($msci)
    {
        if (is_null($msci)) {
            throw new \InvalidArgumentException('non-nullable msci cannot be null');
        }
        $this->container['msci'] = $msci;

        return $this;
    }

    /**
     * Gets mstar
     *
     * @return string|null
     */
    public function getMstar()
    {
        return $this->container['mstar'];
    }

    /**
     * Sets mstar
     *
     * @param string|null $mstar The status of Morningstar (\"MSTAR\") indices trading hours.
     *
     * @return self
     */
    public function setMstar($mstar)
    {
        if (is_null($mstar)) {
            throw new \InvalidArgumentException('non-nullable mstar cannot be null');
        }
        $this->container['mstar'] = $mstar;

        return $this;
    }

    /**
     * Gets mstarc
     *
     * @return mixed|null
     */
    public function getMstarc()
    {
        return $this->container['mstarc'];
    }

    /**
     * Sets mstarc
     *
     * @param mixed|null $mstarc The status of Morningstar Customer (\"MSTARC\") indices trading hours.
     *
     * @return self
     */
    public function setMstarc($mstarc)
    {
        if (is_null($mstarc)) {
            array_push($this->openAPINullablesSetToNull, 'mstarc');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mstarc', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['mstarc'] = $mstarc;

        return $this;
    }

    /**
     * Gets nasdaq
     *
     * @return string|null
     */
    public function getNasdaq()
    {
        return $this->container['nasdaq'];
    }

    /**
     * Sets nasdaq
     *
     * @param string|null $nasdaq The status of National Association of Securities Dealers Automated Quotations (\"Nasdaq\") indices trading hours.
     *
     * @return self
     */
    public function setNasdaq($nasdaq)
    {
        if (is_null($nasdaq)) {
            throw new \InvalidArgumentException('non-nullable nasdaq cannot be null');
        }
        $this->container['nasdaq'] = $nasdaq;

        return $this;
    }

    /**
     * Gets s_and_p
     *
     * @return string|null
     */
    public function getSAndP()
    {
        return $this->container['s_and_p'];
    }

    /**
     * Sets s_and_p
     *
     * @param string|null $s_and_p The status of Standard & Poors's (\"S&P\") indices trading hours.
     *
     * @return self
     */
    public function setSAndP($s_and_p)
    {
        if (is_null($s_and_p)) {
            throw new \InvalidArgumentException('non-nullable s_and_p cannot be null');
        }
        $this->container['s_and_p'] = $s_and_p;

        return $this;
    }

    /**
     * Gets societe_generale
     *
     * @return string|null
     */
    public function getSocieteGenerale()
    {
        return $this->container['societe_generale'];
    }

    /**
     * Sets societe_generale
     *
     * @param string|null $societe_generale The status of Societe Generale indices trading hours.
     *
     * @return self
     */
    public function setSocieteGenerale($societe_generale)
    {
        if (is_null($societe_generale)) {
            throw new \InvalidArgumentException('non-nullable societe_generale cannot be null');
        }
        $this->container['societe_generale'] = $societe_generale;

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

