<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class diseases extends Model
{
    use HasFactory;

    protected $fillable = [
        'disease_name',
        'description',
    ];
    public $timestamps = false;

    public function scopeQuerySearch($query)
    {
        $request= request();
        $builder = $query->where(function ($query) use ($request) {
            if(!empty($request->disease_name))
                $query->where('disease_name', 'like', '%'.$request->disease_name.'%');
            if(!empty($request->description))
                $query->where('description', 'like', '%'.$request->description.'%');
        })->orderBy('disease_name', 'asc');

        return $builder;
    }

    public function adminUsers()
    {
        return $this->hasMany(AdminUser::class);
    }

}
