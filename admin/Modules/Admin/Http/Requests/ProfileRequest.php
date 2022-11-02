<?php

namespace Modules\Admin\Http\Requests;

use Modules\Admin\Http\Requests\BaseAdminRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class ProfileRequest extends BaseAdminRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $user = Auth::user();
        $rules = [
            'name' => 'required|max:255',
            'phone' => 'required|digits_between:8,13|unique:admin_users,phone,'. $user->id .'|regex:'.REGEX_PHONE_NUMBER,
            'email' => 'required|max:255|email:rfc,dns|unique:admin_users,email,'. $user->id,
            'password' => 'nullable|min:8',
            'address' => 'nullable|max:255',
        ];

        return $rules;
    }

    public function attributes()
    {
        return [];
    }

    public function messages()
    {
        return [
        ];
    }
}
