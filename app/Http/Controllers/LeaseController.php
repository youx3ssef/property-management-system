<?php
// app/Http/Controllers/LeaseController.php

namespace App\Http\Controllers;

use App\Models\Lease;
use App\Http\Resources\LeaseResource;
use Illuminate\Http\Request;

class LeaseController extends Controller
{
    public function index()
    {
        return LeaseResource::collection(Lease::all());
    }

    public function store(Request $request)
    {
        $lease = Lease::create($request->all());
        return new LeaseResource($lease);
    }

    public function show(Lease $lease)
    {
        return new LeaseResource($lease);
    }

    public function update(Request $request, Lease $lease)
    {
        $lease->update($request->all());
        return new LeaseResource($lease);
    }

    public function destroy(Lease $lease)
    {
        $lease->delete();
        return response()->noContent();
    }
}
