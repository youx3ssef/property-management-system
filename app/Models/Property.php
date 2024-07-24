<?php
// app/Models/Property.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'units',
        'rent',
    ];

    public function leases()
    {
        return $this->hasMany(Lease::class);
    }

    public function maintenanceRequests()
    {
        return $this->hasMany(MaintenanceRequest::class);
    }

    public function propertyImages()
    {
        return $this->hasMany(PropertyImage::class);
    }
}
