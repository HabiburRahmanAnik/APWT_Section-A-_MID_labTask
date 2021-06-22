<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class RegistrationRequest extends FormRequest
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
            'name'=>'required|min:3|max:30|regex:/^[A-Za-z][A-Za-z ]*$/',
            'username'=>'required|min:3|max:30|regex:/^[A-Za-z][A-Za-z]*$/',
            'email'=>'required|email|max:50|unique:users',
            'password'=>'required|min:8|max:20',
            'phone'=>'required|min:11|max:15|regex:/^[0-9]*$/'
        ];
    }
}
