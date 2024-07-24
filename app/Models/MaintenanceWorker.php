<?php
// app/Models/MaintenanceWorker.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintenanceWorker extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
    ];

    public function maintenanceRequests()
    {
        return $this->belongsToMany(MaintenanceRequest::class, 'maintenance_request_assignments');
    }
}
