<?php
namespace App\Services\Property;

use \Illuminate\Support\Facades\Facade;

class PropertyFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'App\Services\Property\PropertyService';
    }
}
