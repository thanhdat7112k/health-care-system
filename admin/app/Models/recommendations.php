<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class recommendations extends Model
{
    use HasFactory;

    protected $fillable = [
        'recommendation',
        'disease_name',
    ];

    //Eloquent

    public $timestamps = false;

    //Query Builder
    public function scopeQuerySearch($query)
    {
        $request = request();
        $builder = $query->where(function ($query) use ($request) {
            if (!empty($request->recommendation))
                $query->where('recommendation', 'like', '%'.$request->recommendation.'%');
            if (!empty($request->disease_name))
                $query->where('disease_name', 'like', '%'.$request->disease_name.'%');
        })->orderBy('recommendation', 'asc');

        return $builder;
    }

    public function adminUsers()
    {
        return $this->hasMany(AdminUser::class);
    }

    public function diseases()
    {
        return $this->hasMany(diseases::class);
    }

}

