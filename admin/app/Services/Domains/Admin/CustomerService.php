<?php

namespace App\Services\Domains\Admin;

use App\Models\user_accounts;
use App\Models\medical_histories;
use Illuminate\Support\Facades\Hash;
use App\Events\CustomerCreatedEvent;
use Illuminate\Support\Str;

class CustomerService
{
    public function index()
    {
        return user_accounts::querySearch()->paginate(PAGINATION_PER_PAGE);
    }

    public function store($request)
    {
        $data = $request->only(['username', 'email', 'phonenumber', 'firstname', 'lastname', 'password']);

        return user_accounts::create($data);

        // return recommendations::create([
        //     'recommendation' => $request->name,
        //     'disease_name' => $request->status
        // ]);

    }

    public function edit($id)
    {
        return user_accounts::findOrFail($id);
    }

    public function update($request, $id)
    {
        $user = user_accounts::findOrFail($id);
        $data = $request->only(['username', 'phonenumber', 'email', 'firstname', 'lastname']);
        $user->update($data);
        return $user;
    }

    public function getCustomerByEmail($email)
    {
        return user_accounts::where('email', $email)->first();
    }

    public function getUserById($id)
    {
        return user_accounts::findOrFail($id);
    }

    public function destroy($id)
    {
        $user = $this->getUserById($id);
        $user->delete();
        medical_histories::where('username', 'like', '%'.$user->username.'%')->delete();

        return $user->destroy($id);
    }
}
