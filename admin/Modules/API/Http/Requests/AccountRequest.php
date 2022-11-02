<?php

namespace Modules\API\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AccountRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $userID = Auth::user()->id;
        
        return [
            'email' => 'required|email:rfc,dns|unique:users,email,' . $userID . '|max:255',
            'phone' => 'required|digits_between:8,13|unique:users,phone,'. $userID .'|regex:'. REGEX_PHONE_NUMBER,
            'name' => 'required',
            'gender' => 'required',
            'birthday' => 'required|before:now'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
