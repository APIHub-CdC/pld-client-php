<?php

namespace pld\mx\Client\Model;

use \ArrayAccess;
use \pld\mx\Client\ObjectSerializer;

class Peticion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'Peticion';
    
    protected static $apihubTypes = [
        'nombres' => 'string',
        'apellido_paterno' => 'string',
        'apellido_materno' => 'string'
    ];
    
    protected static $apihubFormats = [
        'nombres' => null,
        'apellido_paterno' => null,
        'apellido_materno' => null
    ];
    
    public static function apihubTypes()
    {
        return self::$apihubTypes;
    }
    
    public static function apihubFormats()
    {
        return self::$apihubFormats;
    }
    
    protected static $attributeMap = [
        'nombres' => 'nombres',
        'apellido_paterno' => 'apellidoPaterno',
        'apellido_materno' => 'apellidoMaterno'
    ];
    
    protected static $setters = [
        'nombres' => 'setNombres',
        'apellido_paterno' => 'setApellidoPaterno',
        'apellido_materno' => 'setApellidoMaterno'
    ];
    
    protected static $getters = [
        'nombres' => 'getNombres',
        'apellido_paterno' => 'getApellidoPaterno',
        'apellido_materno' => 'getApellidoMaterno'
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
        return self::$apihubModelName;
    }
    
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['nombres'] = isset($data['nombres']) ? $data['nombres'] : null;
        $this->container['apellido_paterno'] = isset($data['apellido_paterno']) ? $data['apellido_paterno'] : null;
        $this->container['apellido_materno'] = isset($data['apellido_materno']) ? $data['apellido_materno'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nombres'] === null) {
            $invalidProperties[] = "'nombres' can't be null";
        }
        if ((mb_strlen($this->container['nombres']) > 50)) {
            $invalidProperties[] = "invalid value for 'nombres', the character length must be smaller than or equal to 50.";
        }
        if ((mb_strlen($this->container['nombres']) < 0)) {
            $invalidProperties[] = "invalid value for 'nombres', the character length must be bigger than or equal to 0.";
        }
        if ($this->container['apellido_paterno'] === null) {
            $invalidProperties[] = "'apellido_paterno' can't be null";
        }
        if ((mb_strlen($this->container['apellido_paterno']) > 90)) {
            $invalidProperties[] = "invalid value for 'apellido_paterno', the character length must be smaller than or equal to 90.";
        }
        if ((mb_strlen($this->container['apellido_paterno']) < 0)) {
            $invalidProperties[] = "invalid value for 'apellido_paterno', the character length must be bigger than or equal to 0.";
        }
        if ($this->container['apellido_materno'] === null) {
            $invalidProperties[] = "'apellido_materno' can't be null";
        }
        if ((mb_strlen($this->container['apellido_materno']) > 90)) {
            $invalidProperties[] = "invalid value for 'apellido_materno', the character length must be smaller than or equal to 90.";
        }
        if ((mb_strlen($this->container['apellido_materno']) < 0)) {
            $invalidProperties[] = "invalid value for 'apellido_materno', the character length must be bigger than or equal to 0.";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getNombres()
    {
        return $this->container['nombres'];
    }
    
    public function setNombres($nombres)
    {
        if ((mb_strlen($nombres) > 50)) {
            throw new \InvalidArgumentException('invalid length for $nombres when calling Peticion., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($nombres) < 0)) {
            throw new \InvalidArgumentException('invalid length for $nombres when calling Peticion., must be bigger than or equal to 0.');
        }
        $this->container['nombres'] = $nombres;
        return $this;
    }
    
    public function getApellidoPaterno()
    {
        return $this->container['apellido_paterno'];
    }
    
    public function setApellidoPaterno($apellido_paterno)
    {
        if ((mb_strlen($apellido_paterno) > 90)) {
            throw new \InvalidArgumentException('invalid length for $apellido_paterno when calling Peticion., must be smaller than or equal to 90.');
        }
        if ((mb_strlen($apellido_paterno) < 0)) {
            throw new \InvalidArgumentException('invalid length for $apellido_paterno when calling Peticion., must be bigger than or equal to 0.');
        }
        $this->container['apellido_paterno'] = $apellido_paterno;
        return $this;
    }
    
    public function getApellidoMaterno()
    {
        return $this->container['apellido_materno'];
    }
    
    public function setApellidoMaterno($apellido_materno)
    {
        if ((mb_strlen($apellido_materno) > 90)) {
            throw new \InvalidArgumentException('invalid length for $apellido_materno when calling Peticion., must be smaller than or equal to 90.');
        }
        if ((mb_strlen($apellido_materno) < 0)) {
            throw new \InvalidArgumentException('invalid length for $apellido_materno when calling Peticion., must be bigger than or equal to 0.');
        }
        $this->container['apellido_materno'] = $apellido_materno;
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
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
