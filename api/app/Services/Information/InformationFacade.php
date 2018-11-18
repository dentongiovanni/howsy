<?php
namespace App\Services\Information;

use \Illuminate\Support\Facades\Facade;

class InformationFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'App\Services\Information\InformationService';
    }
}
