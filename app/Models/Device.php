<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;



class Device extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'make',
        'name',
        'model',
        'serial',
        'type_device_id',
        'device_status_id'
    ];

    public function deviceStatus(): HasOne
    {
        return $this->hasOne(DeviceStatus::class);
    }

    public function typeDevice(): HasOne
    {
        return $this->hasOne(TypeDevice::class);
    }
}
