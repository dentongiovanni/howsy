<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\CustomField;
use App\Models\Information;

class Property extends Model
{
	protected $table = "properties";
	protected $fillable = ['property_name'];
	
	public function informations(){
    	return $this->hasMany(Information::class,'property_id','id');
    }
    public function customFields(){
    	return $this->hasMany(CustomField::class,'property_id','id');
    }
}
