<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Information;

class CustomField extends Model
{
    protected $table = "custom_fields";
	protected $fillable = ["field_name","is_required"];

	public function informations(){

		return $this->hasMany(Information::class,'custom_field_id','id');
	}
}
