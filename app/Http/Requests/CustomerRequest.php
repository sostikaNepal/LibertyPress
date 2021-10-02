<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'name' => 'required|regex:/^[a-zA-Z\ ]+$/',
            'email' => 'required|unique:customers',
            'phone' => 'required|min:10|max:10|regex:/^(98)([0-9]{8})$/',
            'password' => 'required',
            'address' => 'required',
            'cpassword'=>'required|same:password'
        ];
    }
}
