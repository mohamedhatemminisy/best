<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'phone' => 'required|numeric|digits:10',
            'name' => 'required',
            'salary' => 'nullable',
            // 'city' => 'required',
            // 'company' => 'required',
            // 'salary' => 'required',
            // 'bank' => 'required',
            // 'financing' => 'required',
            // 'benefit' => 'required',
            // 'responsible' => 'required',
            // 'problem' => 'required',
            // 'message' => 'nullable'
        ];
    }

    public function messages()
    {
        return [
            'name.required'     => trans('contact.name_required'),
            'city.required'  => trans('contact.city_required'),
            'company.required'    => trans('contact.company_required'),
            'phone.required'    => trans('contact.phone_required'),
            'salary.required'    => trans('contact.salary_required'),
            'bank.required'    => trans('contact.bank_required'),
            'financing.required'    => trans('contact.financing_required'),
            'responsible.required'    => trans('contact.responsible_required'),
            'problem.required'    => trans('contact.problem_required'),
            'phone.digits' => trans('receipts.identity_size'),
            'phone.numeric' => trans('receipts.identity_numeric'),
        ];
    }
}
