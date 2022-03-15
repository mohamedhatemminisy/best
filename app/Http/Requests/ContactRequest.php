<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'message' => 'required',
            'email' => 'required',
            'phone'=> 'required',
            'subject'=>'required',
            
            //
        ];
        
    }

    public function messages()
    {
        return  [
            'name.required'     => trans('contact.name_required'),
            'message.required'  => trans('contact.message_required'),
            'email.required'    => trans('contact.email_required'),
            'phone.required'    => trans('contact.phone_required'),
            'subject.required'    => trans('contact.subject_required'),
            'message.required'    => trans('contact.message_required'),



        ];

    }
}
