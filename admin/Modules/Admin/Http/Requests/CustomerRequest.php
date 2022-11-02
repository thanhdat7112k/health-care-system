<?php

namespace Modules\Admin\Http\Requests;

use Modules\Admin\Http\Requests\BaseAdminRequest;
use Illuminate\Validation\Rule;

class CustomerRequest extends BaseAdminRequest
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
        switch (request()->method()) {
            case 'GET':
                return $rules = [
                    'username'   => 'nullable|max:255',
                    'email' => 'nullable|email:rfc,dns',
                    'phonenumber' => 'nullable|digits_between:8,13|regex:' . REGEX_PHONE_NUMBER,
                    'lastname' => 'nullable|max:255',
                    'firstname' => 'nullable|max:255'

                ];
            case 'POST':
                return $rules = [
                    'username'   => 'nullable|max:255',
                    'email' => 'nullable|email:rfc,dns',
                    'phonenumber' => 'nullable|digits_between:8,13|regex:' . REGEX_PHONE_NUMBER,
                    'lastname' => 'nullable|max:255',
                    'firstname' => 'nullable|max:255',
                    'password' => 'nullable|min:8',
                ];
            case 'PUT':
                $userID = request()->route('customer');
                return $rules = [
                    'username'   => 'required|max:255',
                    'email' => 'nullable|email:rfc,dns',
                    'phonenumber' => 'required|digits_between:8,13|regex:' . REGEX_PHONE_NUMBER,
                    'lastname' => 'nullable|max:255',
                    'firstname' => 'nullable|max:255',
                    'password' => 'nullable|min:8',
                ];
            case 'DELETE':
                return $rules = [];
            default:
                return $rules = [];
        }
    }

    public function attributes()
    {
        return [];
    }

    public function messages()
    {
        return [
            'email.unique' => 'This email address already exists.',
            'phone.unique' => 'This phone number already exists. '
        ];
    }
}
