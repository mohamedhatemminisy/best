<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'logo' => 'nullable|image',
            'icon' => 'nullable',
            'name' => 'required',
            'description' => 'required',

           


        ];
        
        return $rules;
    }
    public function messages()
    {
       
          $messages = [
            'icon.required' => trans('service.icon_required'),
            'logo.required' => trans('service.logo_required'),
           

            'name.required' => trans('service.name_required'),
            'description.required' => trans('service.description_required')
       
 
          ];
        return $messages;
    }
}
