<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
        return [
            'reg_num' => 'required|string',
            'mark' => 'required|numeric'
        ];
    }
    public function messages()
    {
        return[
            'reg_num.string' => 'please enter stirng charachers',
            'mark.numeric' => 'please enter numeric type values'
        ];
    }
}
