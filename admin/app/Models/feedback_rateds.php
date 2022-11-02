<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class feedback_rateds extends Model
{
    use HasFactory;

    protected $fillable = [
        'rate',
        'feedback',
        'username'
    ];

    public $timestamps = false;

    //Eloquent

    //Query Builder
    public function scopeQuerySearch($query)
    {
        $request = request();
        $builder = $query->where(function ($query) use ($request) {
            if (!empty($request->rate))
                $query->where('rate', 'like', '%'.$request->rate.'%');
            if (!empty($request->feedback))
                $query->where('feedback', 'like', '%'.$request->feedback.'%');
            if (!empty($request->username))
                $query->where('username', 'like', '%'.$request->username.'%');
        })->orderBy('rate', 'asc');

        return $builder;
    }

}



