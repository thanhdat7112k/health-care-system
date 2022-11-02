<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class user_accounts extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'firstname',
        'lastname',
        'phonenumber',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public $timestamps = false;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    public function scopeQuerySearch($query)
    {
        $request = request();
        $builder = $query->where(function ($query) use ($request) {
            if (!empty($request->username))
                $query->where('username', 'like', '%' . $request->username . '%');
            if (!empty($request->phonenumber))
                $query->where('phonenumber', 'like', '%' . $request->phonenumber . '%');
            if (!empty($request->email))
                $query->where('email', 'like', '%' . $request->email . '%');
        })->orderBy('username', 'asc');

        return $builder;
    }
}
