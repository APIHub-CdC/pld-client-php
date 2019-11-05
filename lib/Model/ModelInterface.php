<?php

namespace PLD\Client\Model;

interface ModelInterface
{
    
    public function getModelName();

    public static function PLDTypes();

    public static function PLDFormats();

    public static function attributeMap();

    public static function setters();

    public static function getters();

    public function listInvalidProperties();

    public function valid();
}
