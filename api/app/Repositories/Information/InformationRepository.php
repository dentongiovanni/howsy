<?php

namespace App\Repositories\Information;


use App\Models\Information;

class InformationRepository implements InformationInterface
{

	private $model;

	public function __construct(Information $model){
		$this->model = $model;
	}

	public function getAll(){
	    return $this->model->all();
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