<?php

namespace App\Repositories\Property;


use App\Models\Property;

class PropertyRepository implements PropertyInterface
{

	private $model;

	public function __construct(Property $model){
		$this->model = $model;
	}

	public function getAll(){
	    return $this->model->with('informations')->get();
	}

	public function find($id){
		return $this->model->find($id);
	}

	public function create(array $attributes){
		return $this->model->create($attributes);
	}

	public function update($id, array $attributes ){
		$result = $this->model->find($id);
        $result->update($attributes);
        return $result;
	}

	public function destroy($id){
	    $this->model->find($id)->delete();
	    return "true";
	}
}