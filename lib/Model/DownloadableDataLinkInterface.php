<?php
/**
 * DownloadableDataLinkInterface
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
 * DownloadableDataLinkInterface Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Webgriffe\MagentoApiClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DownloadableDataLinkInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'downloadable-data-link-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'title' => 'string',
        'sortOrder' => 'int',
        'isShareable' => 'int',
        'price' => 'float',
        'numberOfDownloads' => 'int',
        'linkType' => 'string',
        'linkFile' => 'string',
        'linkFileContent' => '\Webgriffe\MagentoApiClient\Model\DownloadableDataFileContentInterface',
        'linkUrl' => 'string',
        'sampleType' => 'string',
        'sampleFile' => 'string',
        'sampleFileContent' => '\Webgriffe\MagentoApiClient\Model\DownloadableDataFileContentInterface',
        'sampleUrl' => 'string',
        'extensionAttributes' => '\Webgriffe\MagentoApiClient\Model\DownloadableDataLinkExtensionInterface'
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
        'id' => 'id',
        'title' => 'title',
        'sortOrder' => 'sort_order',
        'isShareable' => 'is_shareable',
        'price' => 'price',
        'numberOfDownloads' => 'number_of_downloads',
        'linkType' => 'link_type',
        'linkFile' => 'link_file',
        'linkFileContent' => 'link_file_content',
        'linkUrl' => 'link_url',
        'sampleType' => 'sample_type',
        'sampleFile' => 'sample_file',
        'sampleFileContent' => 'sample_file_content',
        'sampleUrl' => 'sample_url',
        'extensionAttributes' => 'extension_attributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'title' => 'setTitle',
        'sortOrder' => 'setSortOrder',
        'isShareable' => 'setIsShareable',
        'price' => 'setPrice',
        'numberOfDownloads' => 'setNumberOfDownloads',
        'linkType' => 'setLinkType',
        'linkFile' => 'setLinkFile',
        'linkFileContent' => 'setLinkFileContent',
        'linkUrl' => 'setLinkUrl',
        'sampleType' => 'setSampleType',
        'sampleFile' => 'setSampleFile',
        'sampleFileContent' => 'setSampleFileContent',
        'sampleUrl' => 'setSampleUrl',
        'extensionAttributes' => 'setExtensionAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'title' => 'getTitle',
        'sortOrder' => 'getSortOrder',
        'isShareable' => 'getIsShareable',
        'price' => 'getPrice',
        'numberOfDownloads' => 'getNumberOfDownloads',
        'linkType' => 'getLinkType',
        'linkFile' => 'getLinkFile',
        'linkFileContent' => 'getLinkFileContent',
        'linkUrl' => 'getLinkUrl',
        'sampleType' => 'getSampleType',
        'sampleFile' => 'getSampleFile',
        'sampleFileContent' => 'getSampleFileContent',
        'sampleUrl' => 'getSampleUrl',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['sortOrder'] = isset($data['sortOrder']) ? $data['sortOrder'] : null;
        $this->container['isShareable'] = isset($data['isShareable']) ? $data['isShareable'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['numberOfDownloads'] = isset($data['numberOfDownloads']) ? $data['numberOfDownloads'] : null;
        $this->container['linkType'] = isset($data['linkType']) ? $data['linkType'] : null;
        $this->container['linkFile'] = isset($data['linkFile']) ? $data['linkFile'] : null;
        $this->container['linkFileContent'] = isset($data['linkFileContent']) ? $data['linkFileContent'] : null;
        $this->container['linkUrl'] = isset($data['linkUrl']) ? $data['linkUrl'] : null;
        $this->container['sampleType'] = isset($data['sampleType']) ? $data['sampleType'] : null;
        $this->container['sampleFile'] = isset($data['sampleFile']) ? $data['sampleFile'] : null;
        $this->container['sampleFileContent'] = isset($data['sampleFileContent']) ? $data['sampleFileContent'] : null;
        $this->container['sampleUrl'] = isset($data['sampleUrl']) ? $data['sampleUrl'] : null;
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

        if ($this->container['sortOrder'] === null) {
            $invalid_properties[] = "'sortOrder' can't be null";
        }
        if ($this->container['isShareable'] === null) {
            $invalid_properties[] = "'isShareable' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalid_properties[] = "'price' can't be null";
        }
        if ($this->container['linkType'] === null) {
            $invalid_properties[] = "'linkType' can't be null";
        }
        if ($this->container['sampleType'] === null) {
            $invalid_properties[] = "'sampleType' can't be null";
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

        if ($this->container['sortOrder'] === null) {
            return false;
        }
        if ($this->container['isShareable'] === null) {
            return false;
        }
        if ($this->container['price'] === null) {
            return false;
        }
        if ($this->container['linkType'] === null) {
            return false;
        }
        if ($this->container['sampleType'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id Sample(or link) id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets sortOrder
     * @return int
     */
    public function getSortOrder()
    {
        return $this->container['sortOrder'];
    }

    /**
     * Sets sortOrder
     * @param int $sortOrder
     * @return $this
     */
    public function setSortOrder($sortOrder)
    {
        $this->container['sortOrder'] = $sortOrder;

        return $this;
    }

    /**
     * Gets isShareable
     * @return int
     */
    public function getIsShareable()
    {
        return $this->container['isShareable'];
    }

    /**
     * Sets isShareable
     * @param int $isShareable Shareable status
     * @return $this
     */
    public function setIsShareable($isShareable)
    {
        $this->container['isShareable'] = $isShareable;

        return $this;
    }

    /**
     * Gets price
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param float $price Price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets numberOfDownloads
     * @return int
     */
    public function getNumberOfDownloads()
    {
        return $this->container['numberOfDownloads'];
    }

    /**
     * Sets numberOfDownloads
     * @param int $numberOfDownloads Of downloads per user
     * @return $this
     */
    public function setNumberOfDownloads($numberOfDownloads)
    {
        $this->container['numberOfDownloads'] = $numberOfDownloads;

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
     * @param string $linkType
     * @return $this
     */
    public function setLinkType($linkType)
    {
        $this->container['linkType'] = $linkType;

        return $this;
    }

    /**
     * Gets linkFile
     * @return string
     */
    public function getLinkFile()
    {
        return $this->container['linkFile'];
    }

    /**
     * Sets linkFile
     * @param string $linkFile relative file path
     * @return $this
     */
    public function setLinkFile($linkFile)
    {
        $this->container['linkFile'] = $linkFile;

        return $this;
    }

    /**
     * Gets linkFileContent
     * @return \Webgriffe\MagentoApiClient\Model\DownloadableDataFileContentInterface
     */
    public function getLinkFileContent()
    {
        return $this->container['linkFileContent'];
    }

    /**
     * Sets linkFileContent
     * @param \Webgriffe\MagentoApiClient\Model\DownloadableDataFileContentInterface $linkFileContent
     * @return $this
     */
    public function setLinkFileContent($linkFileContent)
    {
        $this->container['linkFileContent'] = $linkFileContent;

        return $this;
    }

    /**
     * Gets linkUrl
     * @return string
     */
    public function getLinkUrl()
    {
        return $this->container['linkUrl'];
    }

    /**
     * Sets linkUrl
     * @param string $linkUrl Link url or null when type is 'file'
     * @return $this
     */
    public function setLinkUrl($linkUrl)
    {
        $this->container['linkUrl'] = $linkUrl;

        return $this;
    }

    /**
     * Gets sampleType
     * @return string
     */
    public function getSampleType()
    {
        return $this->container['sampleType'];
    }

    /**
     * Sets sampleType
     * @param string $sampleType
     * @return $this
     */
    public function setSampleType($sampleType)
    {
        $this->container['sampleType'] = $sampleType;

        return $this;
    }

    /**
     * Gets sampleFile
     * @return string
     */
    public function getSampleFile()
    {
        return $this->container['sampleFile'];
    }

    /**
     * Sets sampleFile
     * @param string $sampleFile relative file path
     * @return $this
     */
    public function setSampleFile($sampleFile)
    {
        $this->container['sampleFile'] = $sampleFile;

        return $this;
    }

    /**
     * Gets sampleFileContent
     * @return \Webgriffe\MagentoApiClient\Model\DownloadableDataFileContentInterface
     */
    public function getSampleFileContent()
    {
        return $this->container['sampleFileContent'];
    }

    /**
     * Sets sampleFileContent
     * @param \Webgriffe\MagentoApiClient\Model\DownloadableDataFileContentInterface $sampleFileContent
     * @return $this
     */
    public function setSampleFileContent($sampleFileContent)
    {
        $this->container['sampleFileContent'] = $sampleFileContent;

        return $this;
    }

    /**
     * Gets sampleUrl
     * @return string
     */
    public function getSampleUrl()
    {
        return $this->container['sampleUrl'];
    }

    /**
     * Sets sampleUrl
     * @param string $sampleUrl file URL
     * @return $this
     */
    public function setSampleUrl($sampleUrl)
    {
        $this->container['sampleUrl'] = $sampleUrl;

        return $this;
    }

    /**
     * Gets extensionAttributes
     * @return \Webgriffe\MagentoApiClient\Model\DownloadableDataLinkExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     * @param \Webgriffe\MagentoApiClient\Model\DownloadableDataLinkExtensionInterface $extensionAttributes
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


