<?php

namespace Modules\Admin\Http\Requests;

use Modules\Admin\Http\Requests\BaseAdminRequest;
use Illuminate\Validation\Rule;

class DiseaseRequest extends BaseAdminRequest
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
                    'disease_name'   => 'nullable|max:255',
                    'description' => 'nullable|max:5000',
                ];
            case 'POST':
                return $rules = [
                    'disease_name'   => 'required|max:255',
                    'description' => 'required|max:5000',
                ];
            case 'PUT':
                $diseaseID = request()->route('disease');
                return $rules = [
                    'disease_name'   => 'required|max:255',
                    'description' => 'required|max:5000',
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
        ];
    }
}
