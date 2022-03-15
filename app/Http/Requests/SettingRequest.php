<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'name' => 'required',
            'description' => 'required',
            'working_times' => 'required',
            'copyrights' => 'required',
        ];
        
        return $rules;
    }
    public function messages()
    {
        $messages = [
            'logo.required' => trans('setting.logo_required'),
            'name.required' => trans('setting.name_required'),
            'description.required' => trans('setting.description_required'),
            'working_times.required' => trans('setting.working_times_required'),
            'copyrights.required' => trans('setting.copyrights_required'),

        ];
    
        return $messages;
    }
}
