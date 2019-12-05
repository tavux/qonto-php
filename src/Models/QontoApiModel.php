<?php

namespace Tavux\Qonto\Models;

/**
 * Class QontoApiModel
 * @package Tavux\Qonto\Models
 * @abstract
 */
abstract class QontoApiModel
{
    public function __construct($properties = [])
    {
        if (count($properties)){
            foreach ($properties as $key => $value) {
                $this->$key = $value;
            }
        }
    }
}
