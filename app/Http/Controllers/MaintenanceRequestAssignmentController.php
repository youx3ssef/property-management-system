<?php
// app/Http/Controllers/MaintenanceRequestAssignmentController.php

namespace App\Http\Controllers;

use App\Models\MaintenanceRequestAssignment;
use App\Http\Resources\MaintenanceRequestAssignmentResource;
use Illuminate\Http\Request;

class MaintenanceRequestAssignmentController extends Controller
{
    public function index()
    {
        return MaintenanceRequestAssignmentResource::collection(MaintenanceRequestAssignment::all());
    }

    public function store(Request $request)
    {
        $maintenanceRequestAssignment = MaintenanceRequestAssignment::create($request->all());
        return new MaintenanceRequestAssignmentResource($maintenanceRequestAssignment);
    }

    public function show(MaintenanceRequestAssignment $maintenanceRequestAssignment)
    {
        return new MaintenanceRequestAssignmentResource($maintenanceRequestAssignment);
    }

    public function update(Request $request, MaintenanceRequestAssignment $maintenanceRequestAssignment)
    {
        $maintenanceRequestAssignment->update($request->all());
        return new MaintenanceRequestAssignmentResource($maintenanceRequestAssignment);
    }

    public function destroy(MaintenanceRequestAssignment $maintenanceRequestAssignment)
    {
        $maintenanceRequestAssignment->delete();
        return response()->noContent();
    }
}
