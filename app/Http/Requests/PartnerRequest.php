<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartnerRequest extends FormRequest
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
        $rules = [
            'logo' => 'required|image',
            'name' => 'required',

        ];
        
        return  $rules;
    }
    public function messages()
    {
        $messages = [
            'logo.required' => trans('partner.logo_required'),
            'name.required' => trans('partner.name_required'),

        ];
     
        return $messages;
    }
}
