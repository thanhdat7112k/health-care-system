<?php

namespace App\Services\Domains\API;

use App\Traits\ApiResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountService
{
    use ApiResponse;

    public function updateInfo($request)
    {
        $data = $request->only(['name', 'phone', 'email', 'birthday', 'gender']);
        $user = Auth::user();
        $user->update($data);

        return $this->apiSuccess(trans('messages.update_success'));
    }

    public function updatePassword($request)
    {
        $user = Auth::user();
        $user->update(['password'=> Hash::make($request->new_password)]);

        return $this->apiSuccess();
    }

    public function index()
    {
        return Auth::user();
    }
}
