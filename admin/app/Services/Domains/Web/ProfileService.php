<?php

namespace App\Services\Domains\Web;

use App\Models\FacilityUser;
use Illuminate\Support\Facades\Hash;

class ProfileService
{
    public function edit()
    {
        return auth()->user();
    }

    public function update($request)
    {
        $client = auth()->user();
        $data = $request->only('name', 'phone', 'email', 'prefecture', 'address');

        if ($request['password']) {
            $data['password'] = Hash::make($request['password']);
        }
        $client->update($data);

        return $client;
    }
}
