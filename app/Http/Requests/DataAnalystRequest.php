<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataAnalystRequest extends FormRequest
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
            'name' => 'required | min:3| max:30 ',
            'email' => 'required| min:10|max:50| unique:user',
            'password' => 'required| min:8| max:20| alpha_num ',
        ];
    }

    public function messages()
    {
        return [

            'name.min' => "Name min 3 chars",
            'name.required' => "Name Must Be Filled Up...",
            'name.max' => "Name max 30 chars",
            'email.min' => "Email min 10 chars",
            'email.required' => "Email Must Be Filled Up...",
            'email.unique' => "Email already used...",
            'password.required' => "Password Must Be Filled Up...",
            'password.alpha_num' => "Password characters must be alpha-numeric",
            'password.min' => "Password length min 8 characters",
            'password.max' => "Password length max 20 characters",

        ];
    }
}
