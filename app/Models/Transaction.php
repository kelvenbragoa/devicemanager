<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;


class Transaction extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'delivery_id',
        'device_id',
        'user_id',
        'employee_id',
        'operation_id'
    ];

    public function delivery(): HasOne
    {
        return $this->hasOne(Delivery::class);
    }

    public function device(): HasOne
    {
        return $this->hasOne(Device::class);
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }

    public function employee(): HasOne
    {
        return $this->hasOne(Employee::class);
    }

    public function operation(): HasOne
    {
        return $this->hasOne(Operation::class);
    }

}
