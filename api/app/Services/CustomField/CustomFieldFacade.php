<?php
namespace App\Services\CustomField;

use \Illuminate\Support\Facades\Facade;

class CustomFieldFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'App\Services\CustomField\CustomFieldService';
    }
}
