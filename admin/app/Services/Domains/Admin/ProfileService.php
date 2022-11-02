<?php

namespace App\Services\Domains\Admin;

use App\Models\AdminUser;
use Illuminate\Support\Facades\Hash;

class ProfileService
{
    public function edit()
    {
        return auth()->user();
    }

    public function update($request)
    {
        $admin = auth()->user();
        $data = $request->only('name', 'phone', 'email', 'address');

        if ($request['password']) {
            $data['password'] = Hash::make($request['password']);
        }
        $admin->update($data);

        return $admin;
    }
}
