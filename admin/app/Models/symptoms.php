<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class symptoms extends Model
{
    use HasFactory;

    protected $fillable = [
        'symptom_name',
        'weight',
        'disease_name',
    ];

    public $timestamps = false;

    //Query Builder
    public function scopeQuerySearch($query)
    {
        $request = request();
        $builder = $query->where(function ($query) use ($request) {
            if (!empty($request->symptom_name))
                $query->where('symptom_name', 'like', '%'.$request->symptom_name.'%');
            if (!empty($request->weight))
                $query->where('weight', 'like', '%'.$request->weight.'%');
            if (!empty($request->disease_name))
                $query->where('disease_name', 'like', '%'.$request->disease_name.'%');
        })->orderBy('symptom_name', 'asc');

        return $builder;
    }

}
