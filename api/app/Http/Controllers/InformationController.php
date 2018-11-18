<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\Information\InformationFacade as Information;

class InformationController extends Controller
{
    public function index()
    {
        return  Information::getAll();
    }
   
    public function store(Request $request)
    {
        return Information::create($request);      
    }

    public function show($id)
    {
        return Information::find($id);
    }

    public function update(Request $request, $id)
    {
        return Information::update($request,$id);
    }

    public function destroy($id)
    {
        return Information::destroy($id);
    }
}
