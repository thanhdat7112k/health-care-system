<?php

namespace Modules\Admin\Http\Requests;

use Modules\Admin\Http\Requests\BaseAdminRequest;
use Illuminate\Validation\Rule;

class recommendationRequest extends BaseAdminRequest
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
        switch(request()->method())
        {
            case 'GET':
                return $rules = [
                    'recommendation' => 'nullable|max:2555',
                    'disease_name'   => 'nullable|max:255'
                ];
            case 'POST':
                return $rules = [
                    'recommendation' => 'required|max:2555',
                    'disease_name'   => 'required|max:255'
                ];
            case 'PUT':
                return $rules = [
                    'recommendation' => 'required|max:2555',
                    'disease_name'   => 'required|max:255'
                ];
        }

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
