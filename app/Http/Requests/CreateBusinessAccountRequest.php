<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBusinessAccountRequest extends FormRequest
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
            'id' => 'required|uuid|exists:businesses,id',
            'phone' => 'required|string|max:12|unique:users,phone',
        ];
    }

    public function messages()
    {
        return [
            'phone.unique' => trans('validation.custom.register-phone.unique')
        ];
    }


}
