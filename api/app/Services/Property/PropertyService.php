<?php
namespace App\Services\Property;

use App\Repositories\Property\PropertyInterface;

class PropertyService
{

    protected $repository;
    public function __construct(PropertyInterface $repository)
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
        $comp = $this->repository->create($request->except('custom_field_id','details'));
         
        if(!empty($request->custom_field_id)){

            foreach($request->custom_field_id as $key => $value){
              $entry['custom_field_id'] = $value;
              $entry['details'] = $request->details[$key];
              $comp->informations()->updateOrCreate($entry);    
            }
            
        }
       
        return $comp->load(['informations']);
    }

    public function update($request,$id){
        $comp = $this->repository->update($id,$request->all());
        return $comp;
    }

}
