<?php
// app/Http/Controllers/TenantController.php

namespace App\Http\Controllers;

use App\Models\Tenant;
use App\Http\Resources\TenantResource;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    public function index()
    {
        return TenantResource::collection(Tenant::all());
    }

    public function store(Request $request)
    {
        $tenant = Tenant::create($request->all());
        return new TenantResource($tenant);
    }

    public function show(Tenant $tenant)
    {
        return new TenantResource($tenant);
    }

    public function update(Request $request, Tenant $tenant)
    {
        $tenant->update($request->all());
        return new TenantResource($tenant);
    }

    public function destroy(Tenant $tenant)
    {
        $tenant->delete();
        return response()->noContent();
    }
}
