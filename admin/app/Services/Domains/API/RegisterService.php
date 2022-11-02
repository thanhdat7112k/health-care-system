<?php

namespace App\Services\Domains\API;

use App\Models\User;
use App\Traits\ApiResponse;
use App\Events\CustomerRegisteredEvent;
use http\Message;
use Illuminate\Database\QueryException;

class RegisterService
{
    use ApiResponse;

    public function store($request)
    {
        $data = $request->only(['email', 'password', 'phone']);
        try {
            $user = User::create($data);
            event(new CustomerRegisteredEvent($user));
            return $this->apiSuccess(trans('messages.register_success'));
        } catch(QueryException $e){
            $messageError = $e->getMessage();
            return $this->apiError($messageError);
        }
    }
}
