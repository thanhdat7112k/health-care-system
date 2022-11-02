<?php

namespace Modules\Admin\Http\Requests;

use Modules\Admin\Http\Requests\BaseAdminRequest;
use Illuminate\Validation\Rule;

class MedicalHistoriesRequest extends BaseAdminRequest
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
                    'date_time' => 'nullable|date_format:Y-m-d',
                    'symptoms' => 'nullable|max:255',
                    'disease_name' => 'nullable|max:255',
                    'username' => 'nullable|max:255'
                ];
        }
    }

    public function attributes()
    {
        return [];
    }

    public function messages()
    {
        return [];
    }
}
