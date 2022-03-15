<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
            'image' => ($this->getMethod() == 'POST')
                    ? 'required|image'
                    : '',
            'name' => 'required',
            'description' => 'required',

        ];
        
        return  $rules;
    }
    public function messages()
    {
        $messages = [
            'image.required' => trans('slider.image_required'),
            'name.required' => trans('slider.name_required'),
            'description.required' => trans('slider.description_required')
        ];
        
        return $messages;
    }
}
