<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Log extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'message',
        'user_id',
        'action',
        'ip'
    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
