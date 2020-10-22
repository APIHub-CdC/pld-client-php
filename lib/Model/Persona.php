<?php

namespace pld\mx\Client\Model;

use \ArrayAccess;
use \pld\mx\Client\ObjectSerializer;

class Persona implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'Persona';
    
    protected static $apihubTypes = [
        'porcentaje' => 'int',
        'nombre' => 'string',
        'apellido_paterno' => 'string',
        'apellido_materno' => 'string',
        'rfc' => 'string',
        'curp' => 'string',
        'fecha_nacimiento' => 'string',
        'lista' => 'string',
        'estatus' => 'string',
        'dependencia' => 'string',
        'puesto' => 'string',
        'dispocisiones_id' => 'string',
        'curp_ok' => 'int',
        'parentesco_id' => 'string',
        'parentesco' => 'string',
        'razon_social' => 'string',
        'rfc_moral' => 'string',
        'issste' => 'string',
        'imss' => 'string',
        'ingresos' => 'float',
        'nombre_completo' => 'string',
        'apellidos' => 'string',
        'entidad' => 'string',
        'sexo' => 'string',
        'area' => 'string',
        'periodo' => 'string',
        'expediente' => 'string',
        'causa_irregularidad' => 'string',
        'fecha_cargo_inicio' => 'string',
        'fecha_cargo_fin' => 'string',
        'duracion' => 'string',
        'monto' => 'float',
        'autoridad_sancion' => 'string',
        'tipo_persona' => 'string'
    ];
    
    protected static $apihubFormats = [
        'porcentaje' => null,
        'nombre' => null,
        'apellido_paterno' => null,
        'apellido_materno' => null,
        'rfc' => null,
        'curp' => null,
        'fecha_nacimiento' => null,
        'lista' => null,
        'estatus' => null,
        'dependencia' => null,
        'puesto' => null,
        'dispocisiones_id' => null,
        'curp_ok' => 'int32',
        'parentesco_id' => null,
        'parentesco' => null,
        'razon_social' => null,
        'rfc_moral' => null,
        'issste' => null,
        'imss' => null,
        'ingresos' => null,
        'nombre_completo' => null,
        'apellidos' => null,
        'entidad' => null,
        'sexo' => null,
        'area' => null,
        'periodo' => null,
        'expediente' => null,
        'causa_irregularidad' => null,
        'fecha_cargo_inicio' => null,
        'fecha_cargo_fin' => null,
        'duracion' => null,
        'monto' => null,
        'autoridad_sancion' => null,
        'tipo_persona' => null
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
        'porcentaje' => 'porcentaje',
        'nombre' => 'nombre',
        'apellido_paterno' => 'apellidoPaterno',
        'apellido_materno' => 'apellidoMaterno',
        'rfc' => 'RFC',
        'curp' => 'CURP',
        'fecha_nacimiento' => 'fechaNacimiento',
        'lista' => 'lista',
        'estatus' => 'estatus',
        'dependencia' => 'dependencia',
        'puesto' => 'puesto',
        'dispocisiones_id' => 'dispocisionesId',
        'curp_ok' => 'CURPOk',
        'parentesco_id' => 'parentescoId',
        'parentesco' => 'parentesco',
        'razon_social' => 'razonSocial',
        'rfc_moral' => 'RFCMoral',
        'issste' => 'ISSSTE',
        'imss' => 'IMSS',
        'ingresos' => 'ingresos',
        'nombre_completo' => 'nombreCompleto',
        'apellidos' => 'apellidos',
        'entidad' => 'entidad',
        'sexo' => 'sexo',
        'area' => 'area',
        'periodo' => 'periodo',
        'expediente' => 'expediente',
        'causa_irregularidad' => 'causaIrregularidad',
        'fecha_cargo_inicio' => 'fechaCargoInicio',
        'fecha_cargo_fin' => 'fechaCargoFin',
        'duracion' => 'duracion',
        'monto' => 'monto',
        'autoridad_sancion' => 'autoridadSancion',
        'tipo_persona' => 'tipoPersona'
    ];
    
    protected static $setters = [
        'porcentaje' => 'setPorcentaje',
        'nombre' => 'setNombre',
        'apellido_paterno' => 'setApellidoPaterno',
        'apellido_materno' => 'setApellidoMaterno',
        'rfc' => 'setRfc',
        'curp' => 'setCurp',
        'fecha_nacimiento' => 'setFechaNacimiento',
        'lista' => 'setLista',
        'estatus' => 'setEstatus',
        'dependencia' => 'setDependencia',
        'puesto' => 'setPuesto',
        'dispocisiones_id' => 'setDispocisionesId',
        'curp_ok' => 'setCurpOk',
        'parentesco_id' => 'setParentescoId',
        'parentesco' => 'setParentesco',
        'razon_social' => 'setRazonSocial',
        'rfc_moral' => 'setRfcMoral',
        'issste' => 'setIssste',
        'imss' => 'setImss',
        'ingresos' => 'setIngresos',
        'nombre_completo' => 'setNombreCompleto',
        'apellidos' => 'setApellidos',
        'entidad' => 'setEntidad',
        'sexo' => 'setSexo',
        'area' => 'setArea',
        'periodo' => 'setPeriodo',
        'expediente' => 'setExpediente',
        'causa_irregularidad' => 'setCausaIrregularidad',
        'fecha_cargo_inicio' => 'setFechaCargoInicio',
        'fecha_cargo_fin' => 'setFechaCargoFin',
        'duracion' => 'setDuracion',
        'monto' => 'setMonto',
        'autoridad_sancion' => 'setAutoridadSancion',
        'tipo_persona' => 'setTipoPersona'
    ];
    
    protected static $getters = [
        'porcentaje' => 'getPorcentaje',
        'nombre' => 'getNombre',
        'apellido_paterno' => 'getApellidoPaterno',
        'apellido_materno' => 'getApellidoMaterno',
        'rfc' => 'getRfc',
        'curp' => 'getCurp',
        'fecha_nacimiento' => 'getFechaNacimiento',
        'lista' => 'getLista',
        'estatus' => 'getEstatus',
        'dependencia' => 'getDependencia',
        'puesto' => 'getPuesto',
        'dispocisiones_id' => 'getDispocisionesId',
        'curp_ok' => 'getCurpOk',
        'parentesco_id' => 'getParentescoId',
        'parentesco' => 'getParentesco',
        'razon_social' => 'getRazonSocial',
        'rfc_moral' => 'getRfcMoral',
        'issste' => 'getIssste',
        'imss' => 'getImss',
        'ingresos' => 'getIngresos',
        'nombre_completo' => 'getNombreCompleto',
        'apellidos' => 'getApellidos',
        'entidad' => 'getEntidad',
        'sexo' => 'getSexo',
        'area' => 'getArea',
        'periodo' => 'getPeriodo',
        'expediente' => 'getExpediente',
        'causa_irregularidad' => 'getCausaIrregularidad',
        'fecha_cargo_inicio' => 'getFechaCargoInicio',
        'fecha_cargo_fin' => 'getFechaCargoFin',
        'duracion' => 'getDuracion',
        'monto' => 'getMonto',
        'autoridad_sancion' => 'getAutoridadSancion',
        'tipo_persona' => 'getTipoPersona'
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
        $this->container['porcentaje'] = isset($data['porcentaje']) ? $data['porcentaje'] : null;
        $this->container['nombre'] = isset($data['nombre']) ? $data['nombre'] : null;
        $this->container['apellido_paterno'] = isset($data['apellido_paterno']) ? $data['apellido_paterno'] : null;
        $this->container['apellido_materno'] = isset($data['apellido_materno']) ? $data['apellido_materno'] : null;
        $this->container['rfc'] = isset($data['rfc']) ? $data['rfc'] : null;
        $this->container['curp'] = isset($data['curp']) ? $data['curp'] : null;
        $this->container['fecha_nacimiento'] = isset($data['fecha_nacimiento']) ? $data['fecha_nacimiento'] : null;
        $this->container['lista'] = isset($data['lista']) ? $data['lista'] : null;
        $this->container['estatus'] = isset($data['estatus']) ? $data['estatus'] : null;
        $this->container['dependencia'] = isset($data['dependencia']) ? $data['dependencia'] : null;
        $this->container['puesto'] = isset($data['puesto']) ? $data['puesto'] : null;
        $this->container['dispocisiones_id'] = isset($data['dispocisiones_id']) ? $data['dispocisiones_id'] : null;
        $this->container['curp_ok'] = isset($data['curp_ok']) ? $data['curp_ok'] : null;
        $this->container['parentesco_id'] = isset($data['parentesco_id']) ? $data['parentesco_id'] : null;
        $this->container['parentesco'] = isset($data['parentesco']) ? $data['parentesco'] : null;
        $this->container['razon_social'] = isset($data['razon_social']) ? $data['razon_social'] : null;
        $this->container['rfc_moral'] = isset($data['rfc_moral']) ? $data['rfc_moral'] : null;
        $this->container['issste'] = isset($data['issste']) ? $data['issste'] : null;
        $this->container['imss'] = isset($data['imss']) ? $data['imss'] : null;
        $this->container['ingresos'] = isset($data['ingresos']) ? $data['ingresos'] : null;
        $this->container['nombre_completo'] = isset($data['nombre_completo']) ? $data['nombre_completo'] : null;
        $this->container['apellidos'] = isset($data['apellidos']) ? $data['apellidos'] : null;
        $this->container['entidad'] = isset($data['entidad']) ? $data['entidad'] : null;
        $this->container['sexo'] = isset($data['sexo']) ? $data['sexo'] : null;
        $this->container['area'] = isset($data['area']) ? $data['area'] : null;
        $this->container['periodo'] = isset($data['periodo']) ? $data['periodo'] : null;
        $this->container['expediente'] = isset($data['expediente']) ? $data['expediente'] : null;
        $this->container['causa_irregularidad'] = isset($data['causa_irregularidad']) ? $data['causa_irregularidad'] : null;
        $this->container['fecha_cargo_inicio'] = isset($data['fecha_cargo_inicio']) ? $data['fecha_cargo_inicio'] : null;
        $this->container['fecha_cargo_fin'] = isset($data['fecha_cargo_fin']) ? $data['fecha_cargo_fin'] : null;
        $this->container['duracion'] = isset($data['duracion']) ? $data['duracion'] : null;
        $this->container['monto'] = isset($data['monto']) ? $data['monto'] : null;
        $this->container['autoridad_sancion'] = isset($data['autoridad_sancion']) ? $data['autoridad_sancion'] : null;
        $this->container['tipo_persona'] = isset($data['tipo_persona']) ? $data['tipo_persona'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (!is_null($this->container['nombre']) && (mb_strlen($this->container['nombre']) > 90)) {
            $invalidProperties[] = "invalid value for 'nombre', the character length must be smaller than or equal to 90.";
        }
        if (!is_null($this->container['nombre']) && (mb_strlen($this->container['nombre']) < 0)) {
            $invalidProperties[] = "invalid value for 'nombre', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['apellido_paterno']) && (mb_strlen($this->container['apellido_paterno']) > 90)) {
            $invalidProperties[] = "invalid value for 'apellido_paterno', the character length must be smaller than or equal to 90.";
        }
        if (!is_null($this->container['apellido_paterno']) && (mb_strlen($this->container['apellido_paterno']) < 0)) {
            $invalidProperties[] = "invalid value for 'apellido_paterno', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['apellido_materno']) && (mb_strlen($this->container['apellido_materno']) > 90)) {
            $invalidProperties[] = "invalid value for 'apellido_materno', the character length must be smaller than or equal to 90.";
        }
        if (!is_null($this->container['apellido_materno']) && (mb_strlen($this->container['apellido_materno']) < 0)) {
            $invalidProperties[] = "invalid value for 'apellido_materno', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['lista']) && (mb_strlen($this->container['lista']) > 90)) {
            $invalidProperties[] = "invalid value for 'lista', the character length must be smaller than or equal to 90.";
        }
        if (!is_null($this->container['lista']) && (mb_strlen($this->container['lista']) < 0)) {
            $invalidProperties[] = "invalid value for 'lista', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['estatus']) && (mb_strlen($this->container['estatus']) > 90)) {
            $invalidProperties[] = "invalid value for 'estatus', the character length must be smaller than or equal to 90.";
        }
        if (!is_null($this->container['estatus']) && (mb_strlen($this->container['estatus']) < 0)) {
            $invalidProperties[] = "invalid value for 'estatus', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['dependencia']) && (mb_strlen($this->container['dependencia']) > 90)) {
            $invalidProperties[] = "invalid value for 'dependencia', the character length must be smaller than or equal to 90.";
        }
        if (!is_null($this->container['dependencia']) && (mb_strlen($this->container['dependencia']) < 0)) {
            $invalidProperties[] = "invalid value for 'dependencia', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['dispocisiones_id']) && (mb_strlen($this->container['dispocisiones_id']) > 90)) {
            $invalidProperties[] = "invalid value for 'dispocisiones_id', the character length must be smaller than or equal to 90.";
        }
        if (!is_null($this->container['dispocisiones_id']) && (mb_strlen($this->container['dispocisiones_id']) < 0)) {
            $invalidProperties[] = "invalid value for 'dispocisiones_id', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['razon_social']) && (mb_strlen($this->container['razon_social']) > 6)) {
            $invalidProperties[] = "invalid value for 'razon_social', the character length must be smaller than or equal to 6.";
        }
        if (!is_null($this->container['razon_social']) && (mb_strlen($this->container['razon_social']) < 5)) {
            $invalidProperties[] = "invalid value for 'razon_social', the character length must be bigger than or equal to 5.";
        }
        if (!is_null($this->container['rfc_moral']) && !preg_match("/^([A-ZÑ,&amp;]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))([A-Z\\\\d]{3})?$/", $this->container['rfc_moral'])) {
            $invalidProperties[] = "invalid value for 'rfc_moral', must be conform to the pattern /^([A-ZÑ,&amp;]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))([A-Z\\\\d]{3})?$/.";
        }
        if (!is_null($this->container['nombre_completo']) && (mb_strlen($this->container['nombre_completo']) > 90)) {
            $invalidProperties[] = "invalid value for 'nombre_completo', the character length must be smaller than or equal to 90.";
        }
        if (!is_null($this->container['nombre_completo']) && (mb_strlen($this->container['nombre_completo']) < 0)) {
            $invalidProperties[] = "invalid value for 'nombre_completo', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['apellidos']) && (mb_strlen($this->container['apellidos']) > 60)) {
            $invalidProperties[] = "invalid value for 'apellidos', the character length must be smaller than or equal to 60.";
        }
        if (!is_null($this->container['apellidos']) && (mb_strlen($this->container['apellidos']) < 0)) {
            $invalidProperties[] = "invalid value for 'apellidos', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['sexo']) && (mb_strlen($this->container['sexo']) > 10)) {
            $invalidProperties[] = "invalid value for 'sexo', the character length must be smaller than or equal to 10.";
        }
        if (!is_null($this->container['sexo']) && (mb_strlen($this->container['sexo']) < 0)) {
            $invalidProperties[] = "invalid value for 'sexo', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['area']) && (mb_strlen($this->container['area']) > 60)) {
            $invalidProperties[] = "invalid value for 'area', the character length must be smaller than or equal to 60.";
        }
        if (!is_null($this->container['area']) && (mb_strlen($this->container['area']) < 0)) {
            $invalidProperties[] = "invalid value for 'area', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['periodo']) && (mb_strlen($this->container['periodo']) < 0)) {
            $invalidProperties[] = "invalid value for 'periodo', the character length must be bigger than or equal to 0.";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getPorcentaje()
    {
        return $this->container['porcentaje'];
    }
    
    public function setPorcentaje($porcentaje)
    {
        $this->container['porcentaje'] = $porcentaje;
        return $this;
    }
    
    public function getNombre()
    {
        return $this->container['nombre'];
    }
    
    public function setNombre($nombre)
    {
        if (!is_null($nombre) && (mb_strlen($nombre) > 90)) {
            throw new \InvalidArgumentException('invalid length for $nombre when calling Persona., must be smaller than or equal to 90.');
        }
        if (!is_null($nombre) && (mb_strlen($nombre) < 0)) {
            throw new \InvalidArgumentException('invalid length for $nombre when calling Persona., must be bigger than or equal to 0.');
        }
        $this->container['nombre'] = $nombre;
        return $this;
    }
    
    public function getApellidoPaterno()
    {
        return $this->container['apellido_paterno'];
    }
    
    public function setApellidoPaterno($apellido_paterno)
    {
        if (!is_null($apellido_paterno) && (mb_strlen($apellido_paterno) > 90)) {
            throw new \InvalidArgumentException('invalid length for $apellido_paterno when calling Persona., must be smaller than or equal to 90.');
        }
        if (!is_null($apellido_paterno) && (mb_strlen($apellido_paterno) < 0)) {
            throw new \InvalidArgumentException('invalid length for $apellido_paterno when calling Persona., must be bigger than or equal to 0.');
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
        if (!is_null($apellido_materno) && (mb_strlen($apellido_materno) > 90)) {
            throw new \InvalidArgumentException('invalid length for $apellido_materno when calling Persona., must be smaller than or equal to 90.');
        }
        if (!is_null($apellido_materno) && (mb_strlen($apellido_materno) < 0)) {
            throw new \InvalidArgumentException('invalid length for $apellido_materno when calling Persona., must be bigger than or equal to 0.');
        }
        $this->container['apellido_materno'] = $apellido_materno;
        return $this;
    }
    
    public function getRfc()
    {
        return $this->container['rfc'];
    }
    
    public function setRfc($rfc)
    {
        $this->container['rfc'] = $rfc;
        return $this;
    }
    
    public function getCurp()
    {
        return $this->container['curp'];
    }
    
    public function setCurp($curp)
    {
        $this->container['curp'] = $curp;
        return $this;
    }
    
    public function getFechaNacimiento()
    {
        return $this->container['fecha_nacimiento'];
    }
    
    public function setFechaNacimiento($fecha_nacimiento)
    {
        $this->container['fecha_nacimiento'] = $fecha_nacimiento;
        return $this;
    }
    
    public function getLista()
    {
        return $this->container['lista'];
    }
    
    public function setLista($lista)
    {
        if (!is_null($lista) && (mb_strlen($lista) > 90)) {
            throw new \InvalidArgumentException('invalid length for $lista when calling Persona., must be smaller than or equal to 90.');
        }
        if (!is_null($lista) && (mb_strlen($lista) < 0)) {
            throw new \InvalidArgumentException('invalid length for $lista when calling Persona., must be bigger than or equal to 0.');
        }
        $this->container['lista'] = $lista;
        return $this;
    }
    
    public function getEstatus()
    {
        return $this->container['estatus'];
    }
    
    public function setEstatus($estatus)
    {
        if (!is_null($estatus) && (mb_strlen($estatus) > 90)) {
            throw new \InvalidArgumentException('invalid length for $estatus when calling Persona., must be smaller than or equal to 90.');
        }
        if (!is_null($estatus) && (mb_strlen($estatus) < 0)) {
            throw new \InvalidArgumentException('invalid length for $estatus when calling Persona., must be bigger than or equal to 0.');
        }
        $this->container['estatus'] = $estatus;
        return $this;
    }
    
    public function getDependencia()
    {
        return $this->container['dependencia'];
    }
    
    public function setDependencia($dependencia)
    {
        if (!is_null($dependencia) && (mb_strlen($dependencia) > 90)) {
            throw new \InvalidArgumentException('invalid length for $dependencia when calling Persona., must be smaller than or equal to 90.');
        }
        if (!is_null($dependencia) && (mb_strlen($dependencia) < 0)) {
            throw new \InvalidArgumentException('invalid length for $dependencia when calling Persona., must be bigger than or equal to 0.');
        }
        $this->container['dependencia'] = $dependencia;
        return $this;
    }
    
    public function getPuesto()
    {
        return $this->container['puesto'];
    }
    
    public function setPuesto($puesto)
    {
        $this->container['puesto'] = $puesto;
        return $this;
    }
    
    public function getDispocisionesId()
    {
        return $this->container['dispocisiones_id'];
    }
    
    public function setDispocisionesId($dispocisiones_id)
    {
        if (!is_null($dispocisiones_id) && (mb_strlen($dispocisiones_id) > 90)) {
            throw new \InvalidArgumentException('invalid length for $dispocisiones_id when calling Persona., must be smaller than or equal to 90.');
        }
        if (!is_null($dispocisiones_id) && (mb_strlen($dispocisiones_id) < 0)) {
            throw new \InvalidArgumentException('invalid length for $dispocisiones_id when calling Persona., must be bigger than or equal to 0.');
        }
        $this->container['dispocisiones_id'] = $dispocisiones_id;
        return $this;
    }
    
    public function getCurpOk()
    {
        return $this->container['curp_ok'];
    }
    
    public function setCurpOk($curp_ok)
    {
        $this->container['curp_ok'] = $curp_ok;
        return $this;
    }
    
    public function getParentescoId()
    {
        return $this->container['parentesco_id'];
    }
    
    public function setParentescoId($parentesco_id)
    {
        $this->container['parentesco_id'] = $parentesco_id;
        return $this;
    }
    
    public function getParentesco()
    {
        return $this->container['parentesco'];
    }
    
    public function setParentesco($parentesco)
    {
        $this->container['parentesco'] = $parentesco;
        return $this;
    }
    
    public function getRazonSocial()
    {
        return $this->container['razon_social'];
    }
    
    public function setRazonSocial($razon_social)
    {
        if (!is_null($razon_social) && (mb_strlen($razon_social) > 6)) {
            throw new \InvalidArgumentException('invalid length for $razon_social when calling Persona., must be smaller than or equal to 6.');
        }
        if (!is_null($razon_social) && (mb_strlen($razon_social) < 5)) {
            throw new \InvalidArgumentException('invalid length for $razon_social when calling Persona., must be bigger than or equal to 5.');
        }
        $this->container['razon_social'] = $razon_social;
        return $this;
    }
    
    public function getRfcMoral()
    {
        return $this->container['rfc_moral'];
    }
    
    public function setRfcMoral($rfc_moral)
    {
        if (!is_null($rfc_moral) && (!preg_match("/^([A-ZÑ,&amp;]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))([A-Z\\\\d]{3})?$/", $rfc_moral))) {
            throw new \InvalidArgumentException("invalid value for $rfc_moral when calling Persona., must conform to the pattern /^([A-ZÑ,&amp;]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))([A-Z\\\\d]{3})?$/.");
        }
        $this->container['rfc_moral'] = $rfc_moral;
        return $this;
    }
    
    public function getIssste()
    {
        return $this->container['issste'];
    }
    
    public function setIssste($issste)
    {
        $this->container['issste'] = $issste;
        return $this;
    }
    
    public function getImss()
    {
        return $this->container['imss'];
    }
    
    public function setImss($imss)
    {
        $this->container['imss'] = $imss;
        return $this;
    }
    
    public function getIngresos()
    {
        return $this->container['ingresos'];
    }
    
    public function setIngresos($ingresos)
    {
        $this->container['ingresos'] = $ingresos;
        return $this;
    }
    
    public function getNombreCompleto()
    {
        return $this->container['nombre_completo'];
    }
    
    public function setNombreCompleto($nombre_completo)
    {
        if (!is_null($nombre_completo) && (mb_strlen($nombre_completo) > 90)) {
            throw new \InvalidArgumentException('invalid length for $nombre_completo when calling Persona., must be smaller than or equal to 90.');
        }
        if (!is_null($nombre_completo) && (mb_strlen($nombre_completo) < 0)) {
            throw new \InvalidArgumentException('invalid length for $nombre_completo when calling Persona., must be bigger than or equal to 0.');
        }
        $this->container['nombre_completo'] = $nombre_completo;
        return $this;
    }
    
    public function getApellidos()
    {
        return $this->container['apellidos'];
    }
    
    public function setApellidos($apellidos)
    {
        if (!is_null($apellidos) && (mb_strlen($apellidos) > 60)) {
            throw new \InvalidArgumentException('invalid length for $apellidos when calling Persona., must be smaller than or equal to 60.');
        }
        if (!is_null($apellidos) && (mb_strlen($apellidos) < 0)) {
            throw new \InvalidArgumentException('invalid length for $apellidos when calling Persona., must be bigger than or equal to 0.');
        }
        $this->container['apellidos'] = $apellidos;
        return $this;
    }
    
    public function getEntidad()
    {
        return $this->container['entidad'];
    }
    
    public function setEntidad($entidad)
    {
        $this->container['entidad'] = $entidad;
        return $this;
    }
    
    public function getSexo()
    {
        return $this->container['sexo'];
    }
    
    public function setSexo($sexo)
    {
        if (!is_null($sexo) && (mb_strlen($sexo) > 10)) {
            throw new \InvalidArgumentException('invalid length for $sexo when calling Persona., must be smaller than or equal to 10.');
        }
        if (!is_null($sexo) && (mb_strlen($sexo) < 0)) {
            throw new \InvalidArgumentException('invalid length for $sexo when calling Persona., must be bigger than or equal to 0.');
        }
        $this->container['sexo'] = $sexo;
        return $this;
    }
    
    public function getArea()
    {
        return $this->container['area'];
    }
    
    public function setArea($area)
    {
        if (!is_null($area) && (mb_strlen($area) > 60)) {
            throw new \InvalidArgumentException('invalid length for $area when calling Persona., must be smaller than or equal to 60.');
        }
        if (!is_null($area) && (mb_strlen($area) < 0)) {
            throw new \InvalidArgumentException('invalid length for $area when calling Persona., must be bigger than or equal to 0.');
        }
        $this->container['area'] = $area;
        return $this;
    }
    
    public function getPeriodo()
    {
        return $this->container['periodo'];
    }
    
    public function setPeriodo($periodo)
    {
        if (!is_null($periodo) && (mb_strlen($periodo) < 0)) {
            throw new \InvalidArgumentException('invalid length for $periodo when calling Persona., must be bigger than or equal to 0.');
        }
        $this->container['periodo'] = $periodo;
        return $this;
    }
    
    public function getExpediente()
    {
        return $this->container['expediente'];
    }
    
    public function setExpediente($expediente)
    {
        $this->container['expediente'] = $expediente;
        return $this;
    }
    
    public function getCausaIrregularidad()
    {
        return $this->container['causa_irregularidad'];
    }
    
    public function setCausaIrregularidad($causa_irregularidad)
    {
        $this->container['causa_irregularidad'] = $causa_irregularidad;
        return $this;
    }
    
    public function getFechaCargoInicio()
    {
        return $this->container['fecha_cargo_inicio'];
    }
    
    public function setFechaCargoInicio($fecha_cargo_inicio)
    {
        $this->container['fecha_cargo_inicio'] = $fecha_cargo_inicio;
        return $this;
    }
    
    public function getFechaCargoFin()
    {
        return $this->container['fecha_cargo_fin'];
    }
    
    public function setFechaCargoFin($fecha_cargo_fin)
    {
        $this->container['fecha_cargo_fin'] = $fecha_cargo_fin;
        return $this;
    }
    
    public function getDuracion()
    {
        return $this->container['duracion'];
    }
    
    public function setDuracion($duracion)
    {
        $this->container['duracion'] = $duracion;
        return $this;
    }
    
    public function getMonto()
    {
        return $this->container['monto'];
    }
    
    public function setMonto($monto)
    {
        $this->container['monto'] = $monto;
        return $this;
    }
    
    public function getAutoridadSancion()
    {
        return $this->container['autoridad_sancion'];
    }
    
    public function setAutoridadSancion($autoridad_sancion)
    {
        $this->container['autoridad_sancion'] = $autoridad_sancion;
        return $this;
    }
    
    public function getTipoPersona()
    {
        return $this->container['tipo_persona'];
    }
    
    public function setTipoPersona($tipo_persona)
    {
        $this->container['tipo_persona'] = $tipo_persona;
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
