<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;


class Employee extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'name',
        'email',
        'mobile',
        'company_id'
    ];

    public function company(): HasOne
    {
        return $this->hasOne(Device::class);
    }
}
