<?php

use Illuminate\Database\Seeder;
use App\Models\Property;

class PropertyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 $properties = [
			  ['property_name' => 'Nuvali'],
			  ['property_name' => 'Camelia'],
			  ['property_name' => 'Alveo'],
		 ];

        foreach ($properties as $property) {
        	Property::create($property);
        }
    }
}
