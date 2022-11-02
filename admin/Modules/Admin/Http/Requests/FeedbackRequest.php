<?php

namespace Modules\Admin\Http\Requests;

use Modules\Admin\Http\Requests\BaseAdminRequest;
use Illuminate\Validation\Rule;

class FeedbackRequest extends BaseAdminRequest
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
                    'rate' => 'nullable|max:255',
                    'feedback'=> 'nullable|max:500',
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
