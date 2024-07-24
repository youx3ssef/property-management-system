<?php
// app/Http/Controllers/MaintenanceRequestController.php

namespace App\Http\Controllers;

use App\Models\MaintenanceRequest;
use App\Http\Resources\MaintenanceRequestResource;
use Illuminate\Http\Request;

class MaintenanceRequestController extends Controller
{
    public function index()
    {
        return MaintenanceRequestResource::collection(MaintenanceRequest::all());
    }

    public function store(Request $request)
    {
        $maintenanceRequest = MaintenanceRequest::create($request->all());
        return new MaintenanceRequestResource($maintenanceRequest);
    }

    public function show(MaintenanceRequest $maintenanceRequest)
    {
        return new MaintenanceRequestResource($maintenanceRequest);
    }

    public function update(Request $request, MaintenanceRequest $maintenanceRequest)
    {
        $maintenanceRequest->update($request->all());
        return new MaintenanceRequestResource($maintenanceRequest);
    }

    public function destroy(MaintenanceRequest $maintenanceRequest)
    {
        $maintenanceRequest->delete();
        return response()->noContent();
    }
}
