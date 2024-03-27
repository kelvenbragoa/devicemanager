<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Delivery extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'observation',
        'device_id',
        'operation_id',
        'user_id',
        'employee_id',
        'company_id',
    ];

    public function device(): HasOne
    {
        return $this->hasOne(Device::class);
    }

    public function operation(): HasOne
    {
        return $this->hasOne(Operation::class);
    }


    public function employee(): HasOne
    {
        return $this->hasOne(Employee::class);
    }

    public function company(): HasOne
    {
        return $this->hasOne(Company::class);
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }

}
