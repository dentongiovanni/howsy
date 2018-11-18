<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\Property\PropertyFacade as Property;

class PropertyController extends Controller
{
     public function index()
    {
        return Property::getAll();
    }
   
    public function store(Request $request)
    {
       return Property::create($request);      
    }

    public function show($id)
    {
        return Property::find($id);
    }

    public function update(Request $request, $id)
    {
        return Property::update($request,$id);
    }

    public function destroy($id)
    {
        return Property::destroy($id);
    }

}
