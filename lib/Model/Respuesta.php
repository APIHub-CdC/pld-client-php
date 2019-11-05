<?php

namespace PLD\Client\Model;

use \ArrayAccess;
use \PLD\Client\ObjectSerializer;

class Respuesta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    protected static $PLDModelName = 'Respuesta';

    protected static $PLDTypes = [
        'personas' => '\PLD\Client\Model\Persona[]'
    ];

    protected static $PLDFormats = [
        'personas' => null
    ];

    public static function PLDTypes()
    {
        return self::$PLDTypes;
    }

    public static function PLDFormats()
    {
        return self::$PLDFormats;
    }

    protected static $attributeMap = [
        'personas' => 'personas'
    ];

    protected static $setters = [
        'personas' => 'setPersonas'
    ];

    protected static $getters = [
        'personas' => 'getPersonas'
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

    public function getModelName()
    {
        return self::$PLDModelName;
    }

    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['personas'] = isset($data['personas']) ? $data['personas'] : null;
    }

    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['personas'] === null) {
            $invalidProperties[] = "'personas' can't be null";
        }
        return $invalidProperties;
    }

    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    public function getPersonas()
    {
        return $this->container['personas'];
    }

    public function setPersonas($personas)
    {
        $this->container['personas'] = $personas;

        return $this;
    }
    
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

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


