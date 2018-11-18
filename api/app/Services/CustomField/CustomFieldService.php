<?php
namespace App\Services\CustomField;

use App\Repositories\CustomField\CustomFieldInterface;

class CustomFieldService
{

    protected $repository;
    public function __construct(CustomFieldInterface $repository)
    {
        $this->repository = $repository;
    }

    public function find($id){
        $result = $this->repository->find($id);
        return $result;
    }

    public function getAll(){
        return $this->repository->getAll();
    }

     public function create($request){
        $comp = $this->repository->create($request->all());
        return $comp;
    }

    public function update($request,$id){
        $comp = $this->repository->update($id,$request->all());
        return $comp;
    }

}
\