<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class medical_histories extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_time',
        'symptoms',
        'disease_name',
        'username'
    ];

    public $timestamps = false;

    //Eloquent

    //Query Builder
    public function scopeQuerySearch($query)
    {
        $request = request();
        $builder = $query->where(function ($query) use ($request) {
            if (!empty($request->symptoms))
                $query->where('symptoms', 'like', '%'.$request->symptoms.'%');
                if (!empty($request->disease_name))
                $query->where('disease_name', 'like', '%'.$request->disease_name.'%');
                if (!empty($request->username))
                $query->where('username', 'like', '%'.$request->username.'%');
        })->orderBy('symptoms', 'asc');

        return $builder;
    }

}



