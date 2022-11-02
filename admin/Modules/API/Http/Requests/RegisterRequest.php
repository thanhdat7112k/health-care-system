<?php

namespace Modules\API\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email:rfc,dns|max:255|unique:users,email',
            'phone' => 'required|digits_between:8,13|unique:users,phone|regex:' . REGEX_PHONE_NUMBER,
            'password' => 'required|min:8',
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
