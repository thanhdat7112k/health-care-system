<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BaseAdminRequest extends FormRequest
{
    /**
     * makeKeyInArray
     *
     * @param  mixed $array
     * @return string '1,2,3,4'
     */
    public function makeKeyInArray($array)
    {
        $result = array();
        foreach ($array as $key => $element) {
            $result[] = $key;
        }

        return implode(',', $result);
    }
}
