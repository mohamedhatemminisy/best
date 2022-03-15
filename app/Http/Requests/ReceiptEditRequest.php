<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReceiptEditRequest extends FormRequest
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
            'name' => 'required',
            'identity' => 'required|numeric|digits:10',
            'phone_one' => 'required|numeric|digits:10',
            'phone_two' => 'nullable|numeric|digits:10',
            'files' => 'array',
            'files.*' => 'nullable|mimes:jpg,bmp,png,pdf,docx,doc' ,        ];
    }

    public function messages()
    {
        return [
            'name.required' => trans('receipts.employee_name_required'),
            'identity.required' => trans('receipts.identity_required'),
            'phone_one.required' => trans('receipts.phone_one_required'),
            'phone_one.digits' => trans('receipts.identity_size'),
            'identity.digits' => trans('receipts.identity_size'),
            'phone_two.digits' => trans('receipts.identity_size'),
            'identity.numeric' => trans('receipts.identity_numeric'),
            'phone_one.numeric' => trans('receipts.identity_numeric'),
            'phone_two.numeric' => trans('receipts.identity_numeric'),
            'identity.unique' => trans('receipts.identity_unique'),
            'file.mimes' => trans('receipts.mimes_file'),
        ];
    }
}
