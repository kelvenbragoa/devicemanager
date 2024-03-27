<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;


class Company extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'name',
        'address',
        'city',
        'province_id'
    ];

    public function province(): HasOne
    {
        return $this->hasOne(Province::class);
    }


}