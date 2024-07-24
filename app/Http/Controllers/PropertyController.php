<?php
// app/Http/Controllers/PropertyController.php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Http\Resources\PropertyResource;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        return PropertyResource::collection(Property::all());
    }

    public function store(Request $request)
    {
        $property = Property::create($request->all());
        return new PropertyResource($property);
    }

    public function show(Property $property)
    {
        return new PropertyResource($property);
    }

    public function update(Request $request, Property $property)
    {
        $property->update($request->all());
        return new PropertyResource($property);
    }

    public function destroy(Property $property)
    {
        $property->delete();
        return response()->noContent();
    }
}
