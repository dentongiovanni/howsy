<?php

use Illuminate\Database\Seeder;
use App\Models\CustomField;

class CustomFieldTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $fields = [
			  ['field_name' => 'Address 1','is_required'=>1],
			  ['field_name' => 'Address 2','is_required'=>0],
			  ['field_name' => 'City','is_required'=>0],
			  ['field_name' => 'Post Code','is_required'=>0],
		 ];

        foreach ($fields as $field) {
        	CustomField::create($field);
        }
    }
}
