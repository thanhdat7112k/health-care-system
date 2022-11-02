<?php

namespace App\Services\Domains\Web;

use App\Models\User;

class CustomerService
{
    public function search()
    {
        return User::querySearch()->get();
    }

    public function show($id)
    {
        return User::findOrFail($id);
    }
}
