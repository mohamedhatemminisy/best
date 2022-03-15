<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeatureRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        $rules = [
             
            'icon' => 'required',
            'name' => 'required',
            'description' => 'required',
        ];
        
        return $rules;
    }
    public function messages()
    {
        $messages = [
          
            'icon.required' => trans('feature.icon_required'),
            'name.required' => trans('feature.name_required'),
            'description.required' => trans('feature.description_required')
       

        ];
     
        return $messages;
    }
}
