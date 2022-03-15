<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReplayRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'subject' => 'required',
            'message' => 'required',
            //
        ];
    }

    public function messages()
    {
        return  [
            'subject.required' => trans('contact.subject_required'),
            'message.required' => trans('contact.message_required'),
        ];

    }

}
