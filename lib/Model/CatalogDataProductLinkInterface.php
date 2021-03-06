<?php
/**
 * CatalogDataProductLinkInterface
 *
 * PHP version 5
 *
 * @category Class
 * @package  Webgriffe\MagentoApiClient
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Magento Enterprise
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Webgriffe\MagentoApiClient\Model;

use \ArrayAccess;

/**
 * CatalogDataProductLinkInterface Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Webgriffe\MagentoApiClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CatalogDataProductLinkInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'catalog-data-product-link-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sku' => 'string',
        'linkType' => 'string',
        'linkedProductSku' => 'string',
        'linkedProductType' => 'string',
        'position' => 'int',
        'extensionAttributes' => '\Webgriffe\MagentoApiClient\Model\CatalogDataProductLinkExtensionInterface'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'sku' => 'sku',
        'linkType' => 'link_type',
        'linkedProductSku' => 'linked_product_sku',
        'linkedProductType' => 'linked_product_type',
        'position' => 'position',
        'extensionAttributes' => 'extension_attributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'sku' => 'setSku',
        'linkType' => 'setLinkType',
        'linkedProductSku' => 'setLinkedProductSku',
        'linkedProductType' => 'setLinkedProductType',
        'position' => 'setPosition',
        'extensionAttributes' => 'setExtensionAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'sku' => 'getSku',
        'linkType' => 'getLinkType',
        'linkedProductSku' => 'getLinkedProductSku',
        'linkedProductType' => 'getLinkedProductType',
        'position' => 'getPosition',
        'extensionAttributes' => 'getExtensionAttributes'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['linkType'] = isset($data['linkType']) ? $data['linkType'] : null;
        $this->container['linkedProductSku'] = isset($data['linkedProductSku']) ? $data['linkedProductSku'] : null;
        $this->container['linkedProductType'] = isset($data['linkedProductType']) ? $data['linkedProductType'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['extensionAttributes'] = isset($data['extensionAttributes']) ? $data['extensionAttributes'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['sku'] === null) {
            $invalid_properties[] = "'sku' can't be null";
        }
        if ($this->container['linkType'] === null) {
            $invalid_properties[] = "'linkType' can't be null";
        }
        if ($this->container['linkedProductSku'] === null) {
            $invalid_properties[] = "'linkedProductSku' can't be null";
        }
        if ($this->container['linkedProductType'] === null) {
            $invalid_properties[] = "'linkedProductType' can't be null";
        }
        if ($this->container['position'] === null) {
            $invalid_properties[] = "'position' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['sku'] === null) {
            return false;
        }
        if ($this->container['linkType'] === null) {
            return false;
        }
        if ($this->container['linkedProductSku'] === null) {
            return false;
        }
        if ($this->container['linkedProductType'] === null) {
            return false;
        }
        if ($this->container['position'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets sku
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     * @param string $sku SKU
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets linkType
     * @return string
     */
    public function getLinkType()
    {
        return $this->container['linkType'];
    }

    /**
     * Sets linkType
     * @param string $linkType Link type
     * @return $this
     */
    public function setLinkType($linkType)
    {
        $this->container['linkType'] = $linkType;

        return $this;
    }

    /**
     * Gets linkedProductSku
     * @return string
     */
    public function getLinkedProductSku()
    {
        return $this->container['linkedProductSku'];
    }

    /**
     * Sets linkedProductSku
     * @param string $linkedProductSku Linked product sku
     * @return $this
     */
    public function setLinkedProductSku($linkedProductSku)
    {
        $this->container['linkedProductSku'] = $linkedProductSku;

        return $this;
    }

    /**
     * Gets linkedProductType
     * @return string
     */
    public function getLinkedProductType()
    {
        return $this->container['linkedProductType'];
    }

    /**
     * Sets linkedProductType
     * @param string $linkedProductType Linked product type (simple, virtual, etc)
     * @return $this
     */
    public function setLinkedProductType($linkedProductType)
    {
        $this->container['linkedProductType'] = $linkedProductType;

        return $this;
    }

    /**
     * Gets position
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     * @param int $position Linked item position
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets extensionAttributes
     * @return \Webgriffe\MagentoApiClient\Model\CatalogDataProductLinkExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     * @param \Webgriffe\MagentoApiClient\Model\CatalogDataProductLinkExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes($extensionAttributes)
    {
        $this->container['extensionAttributes'] = $extensionAttributes;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Webgriffe\MagentoApiClient\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Webgriffe\MagentoApiClient\ObjectSerializer::sanitizeForSerialization($this));
    }
}


