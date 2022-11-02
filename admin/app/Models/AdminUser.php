<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdminUser extends Authenticatable
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'prefecture',
        'address',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function facility()
    {
        return $this->belongsTo(Facility::class);
    }
}
