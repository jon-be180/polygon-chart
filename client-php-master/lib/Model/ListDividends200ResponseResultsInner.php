<?php
/**
 * ListDividends200ResponseResultsInner
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
 * ListDividends200ResponseResultsInner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ListDividends200ResponseResultsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListDividends_200_response_results_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cash_amount' => 'float',
        'currency' => 'string',
        'declaration_date' => 'string',
        'dividend_type' => 'string',
        'ex_dividend_date' => 'string',
        'frequency' => 'int',
        'pay_date' => 'string',
        'record_date' => 'string',
        'ticker' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cash_amount' => null,
        'currency' => null,
        'declaration_date' => null,
        'dividend_type' => null,
        'ex_dividend_date' => null,
        'frequency' => null,
        'pay_date' => null,
        'record_date' => null,
        'ticker' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cash_amount' => false,
        'currency' => false,
        'declaration_date' => false,
        'dividend_type' => false,
        'ex_dividend_date' => false,
        'frequency' => false,
        'pay_date' => false,
        'record_date' => false,
        'ticker' => false
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
        'cash_amount' => 'cash_amount',
        'currency' => 'currency',
        'declaration_date' => 'declaration_date',
        'dividend_type' => 'dividend_type',
        'ex_dividend_date' => 'ex_dividend_date',
        'frequency' => 'frequency',
        'pay_date' => 'pay_date',
        'record_date' => 'record_date',
        'ticker' => 'ticker'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cash_amount' => 'setCashAmount',
        'currency' => 'setCurrency',
        'declaration_date' => 'setDeclarationDate',
        'dividend_type' => 'setDividendType',
        'ex_dividend_date' => 'setExDividendDate',
        'frequency' => 'setFrequency',
        'pay_date' => 'setPayDate',
        'record_date' => 'setRecordDate',
        'ticker' => 'setTicker'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cash_amount' => 'getCashAmount',
        'currency' => 'getCurrency',
        'declaration_date' => 'getDeclarationDate',
        'dividend_type' => 'getDividendType',
        'ex_dividend_date' => 'getExDividendDate',
        'frequency' => 'getFrequency',
        'pay_date' => 'getPayDate',
        'record_date' => 'getRecordDate',
        'ticker' => 'getTicker'
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

    public const DIVIDEND_TYPE_CD = 'CD';
    public const DIVIDEND_TYPE_SC = 'SC';
    public const DIVIDEND_TYPE_LT = 'LT';
    public const DIVIDEND_TYPE_ST = 'ST';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDividendTypeAllowableValues()
    {
        return [
            self::DIVIDEND_TYPE_CD,
            self::DIVIDEND_TYPE_SC,
            self::DIVIDEND_TYPE_LT,
            self::DIVIDEND_TYPE_ST,
        ];
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
        $this->setIfExists('cash_amount', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('declaration_date', $data ?? [], null);
        $this->setIfExists('dividend_type', $data ?? [], null);
        $this->setIfExists('ex_dividend_date', $data ?? [], null);
        $this->setIfExists('frequency', $data ?? [], null);
        $this->setIfExists('pay_date', $data ?? [], null);
        $this->setIfExists('record_date', $data ?? [], null);
        $this->setIfExists('ticker', $data ?? [], null);
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

        if ($this->container['cash_amount'] === null) {
            $invalidProperties[] = "'cash_amount' can't be null";
        }
        if ($this->container['dividend_type'] === null) {
            $invalidProperties[] = "'dividend_type' can't be null";
        }
        $allowedValues = $this->getDividendTypeAllowableValues();
        if (!is_null($this->container['dividend_type']) && !in_array($this->container['dividend_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'dividend_type', must be one of '%s'",
                $this->container['dividend_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['ex_dividend_date'] === null) {
            $invalidProperties[] = "'ex_dividend_date' can't be null";
        }
        if ($this->container['frequency'] === null) {
            $invalidProperties[] = "'frequency' can't be null";
        }
        if ($this->container['ticker'] === null) {
            $invalidProperties[] = "'ticker' can't be null";
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
     * Gets cash_amount
     *
     * @return float
     */
    public function getCashAmount()
    {
        return $this->container['cash_amount'];
    }

    /**
     * Sets cash_amount
     *
     * @param float $cash_amount The cash amount of the dividend per share owned.
     *
     * @return self
     */
    public function setCashAmount($cash_amount)
    {
        if (is_null($cash_amount)) {
            throw new \InvalidArgumentException('non-nullable cash_amount cannot be null');
        }
        $this->container['cash_amount'] = $cash_amount;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency The currency in which the dividend is paid.
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets declaration_date
     *
     * @return string|null
     */
    public function getDeclarationDate()
    {
        return $this->container['declaration_date'];
    }

    /**
     * Sets declaration_date
     *
     * @param string|null $declaration_date The date that the dividend was announced.
     *
     * @return self
     */
    public function setDeclarationDate($declaration_date)
    {
        if (is_null($declaration_date)) {
            throw new \InvalidArgumentException('non-nullable declaration_date cannot be null');
        }
        $this->container['declaration_date'] = $declaration_date;

        return $this;
    }

    /**
     * Gets dividend_type
     *
     * @return string
     */
    public function getDividendType()
    {
        return $this->container['dividend_type'];
    }

    /**
     * Sets dividend_type
     *
     * @param string $dividend_type The type of dividend. Dividends that have been paid and/or are expected to be paid on consistent schedules are denoted as CD. Special Cash dividends that have been paid that are infrequent or unusual, and/or can not be expected to occur in the future are denoted as SC. Long-Term and Short-Term capital gain distributions are denoted as LT and ST, respectively.
     *
     * @return self
     */
    public function setDividendType($dividend_type)
    {
        if (is_null($dividend_type)) {
            throw new \InvalidArgumentException('non-nullable dividend_type cannot be null');
        }
        $allowedValues = $this->getDividendTypeAllowableValues();
        if (!in_array($dividend_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'dividend_type', must be one of '%s'",
                    $dividend_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['dividend_type'] = $dividend_type;

        return $this;
    }

    /**
     * Gets ex_dividend_date
     *
     * @return string
     */
    public function getExDividendDate()
    {
        return $this->container['ex_dividend_date'];
    }

    /**
     * Sets ex_dividend_date
     *
     * @param string $ex_dividend_date The date that the stock first trades without the dividend, determined by the exchange.
     *
     * @return self
     */
    public function setExDividendDate($ex_dividend_date)
    {
        if (is_null($ex_dividend_date)) {
            throw new \InvalidArgumentException('non-nullable ex_dividend_date cannot be null');
        }
        $this->container['ex_dividend_date'] = $ex_dividend_date;

        return $this;
    }

    /**
     * Gets frequency
     *
     * @return int
     */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
     * Sets frequency
     *
     * @param int $frequency The number of times per year the dividend is paid out.  Possible values are 0 (one-time), 1 (annually), 2 (bi-annually), 4 (quarterly), and 12 (monthly).
     *
     * @return self
     */
    public function setFrequency($frequency)
    {
        if (is_null($frequency)) {
            throw new \InvalidArgumentException('non-nullable frequency cannot be null');
        }
        $this->container['frequency'] = $frequency;

        return $this;
    }

    /**
     * Gets pay_date
     *
     * @return string|null
     */
    public function getPayDate()
    {
        return $this->container['pay_date'];
    }

    /**
     * Sets pay_date
     *
     * @param string|null $pay_date The date that the dividend is paid out.
     *
     * @return self
     */
    public function setPayDate($pay_date)
    {
        if (is_null($pay_date)) {
            throw new \InvalidArgumentException('non-nullable pay_date cannot be null');
        }
        $this->container['pay_date'] = $pay_date;

        return $this;
    }

    /**
     * Gets record_date
     *
     * @return string|null
     */
    public function getRecordDate()
    {
        return $this->container['record_date'];
    }

    /**
     * Sets record_date
     *
     * @param string|null $record_date The date that the stock must be held to receive the dividend, set by the company.
     *
     * @return self
     */
    public function setRecordDate($record_date)
    {
        if (is_null($record_date)) {
            throw new \InvalidArgumentException('non-nullable record_date cannot be null');
        }
        $this->container['record_date'] = $record_date;

        return $this;
    }

    /**
     * Gets ticker
     *
     * @return string
     */
    public function getTicker()
    {
        return $this->container['ticker'];
    }

    /**
     * Sets ticker
     *
     * @param string $ticker The ticker symbol of the dividend.
     *
     * @return self
     */
    public function setTicker($ticker)
    {
        if (is_null($ticker)) {
            throw new \InvalidArgumentException('non-nullable ticker cannot be null');
        }
        $this->container['ticker'] = $ticker;

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

