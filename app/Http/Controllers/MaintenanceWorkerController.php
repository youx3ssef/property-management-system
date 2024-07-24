<?php
// app/Http/Controllers/MaintenanceWorkerController.php

namespace App\Http\Controllers;

use App\Models\MaintenanceWorker;
use App\Http\Resources\MaintenanceWorkerResource;
use Illuminate\Http\Request;

class MaintenanceWorkerController extends Controller
{
    public function index()
    {
        return MaintenanceWorkerResource::collection(MaintenanceWorker::all());
    }

    public function store(Request $request)
    {
        $maintenanceWorker = MaintenanceWorker::create($request->all());
        return new MaintenanceWorkerResource($maintenanceWorker);
    }

    public function show(MaintenanceWorker $maintenanceWorker)
    {
        return new MaintenanceWorkerResource($maintenanceWorker);
    }

    public function update(Request $request, MaintenanceWorker $maintenanceWorker)
    {
        $maintenanceWorker->update($request->all());
        return new MaintenanceWorkerResource($maintenanceWorker);
    }

    public function destroy(MaintenanceWorker $maintenanceWorker)
    {
        $maintenanceWorker->delete();
        return response()->noContent();
    }
}
