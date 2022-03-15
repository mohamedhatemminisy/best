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
            //
            'name'=>'required',
            
            'email' =>'required|unique:users',
            'password' => 'required|confirmed',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => trans('user.name_required'),
             'email.required' => trans('user.email_required'),
            'password.required' => trans('user.password_required'),

             
        ];
    }
}
