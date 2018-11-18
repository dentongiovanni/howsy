<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\CustomField\CustomFieldFacade as CustomField;

class CustomFieldController extends Controller
{
    
    public function index()
    {
       return  CustomField::getAll();
    }
   
    public function store(Request $request)
    {
       return CustomField::create($request);      
    }

    public function show($id)
    {
       return CustomField::find($id);
    }

    public function update(Request $request, $id)
    {
        return CustomField::update($request,$id);
    }

    public function destroy($id)
    {
        return CustomField::destroy($id);
    }
}
