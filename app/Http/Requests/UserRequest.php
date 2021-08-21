<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'image' => 'required',
            'phone' => 'required| min:11|max:50|',
        ];
    }

    public function messages()
    {
        return [

            'name.min' => "Name min 3 chars",
            'name.max' => "Name max 30 chars",
            'email.min' => "Email min 10 chars",
            'password.alpha_num' => "Password characters must be alpha-numeric",
            'password.min' => "Password length min 8 characters",
            'password.max' => "Password length max 20 characters",
            'phone.min' => "Phone min 11 characters",
            'phone.max' => "Phone max 15 characters",

        ];
    }
}
