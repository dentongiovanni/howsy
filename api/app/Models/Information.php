<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Property;
use App\Models\CustomField;

class Information extends Model
{
	protected $table = 'informations';
	protected $fillable = ['property_id','custom_field_id','details'];


    public function property(){
    	$this->hasOne(Property::class,'id','property_id');
    }

   public function customField(){
    	$this->hasOne(CustomField::class,'id','custom_field_id');
    }
}
