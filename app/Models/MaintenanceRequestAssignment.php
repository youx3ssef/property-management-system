<?php
// app/Models/MaintenanceRequestAssignment.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintenanceRequestAssignment extends Model
{
    use HasFactory;

    protected $fillable = [
        'maintenance_request_id',
        'maintenance_worker_id',
    ];

    public function maintenanceRequest()
    {
        return $this->belongsTo(MaintenanceRequest::class);
    }

    public function maintenanceWorker()
    {
        return $this->belongsTo(MaintenanceWorker::class);
    }
}
