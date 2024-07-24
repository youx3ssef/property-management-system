<?php
// app/Http/Controllers/PropertyImageController.php

namespace App\Http\Controllers;

use App\Models\PropertyImage;
use App\Http\Resources\PropertyImageResource;
use Illuminate\Http\Request;

class PropertyImageController extends Controller
{
    public function index()
    {
        return PropertyImageResource::collection(PropertyImage::all());
    }

    public function store(Request $request)
    {
        $propertyImage = PropertyImage::create($request->all());
        return new PropertyImageResource($propertyImage);
    }

    public function show(PropertyImage $propertyImage)
    {
        return new PropertyImageResource($propertyImage);
    }

    public function update(Request $request, PropertyImage $propertyImage)
    {
        $propertyImage->update($request->all());
        return new PropertyImageResource($propertyImage);
    }

    public function destroy(PropertyImage $propertyImage)
    {
        $propertyImage->delete();
        return response()->noContent();
    }
}
