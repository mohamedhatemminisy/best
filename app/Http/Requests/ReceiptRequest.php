<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReceiptRequest extends FormRequest
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
            'identity' => 'required|numeric|digits:10|unique:receipts',
            'phone_one' => 'required|numeric|digits:10',
            'phone_two' => 'nullable|numeric|digits:10',
            // 'salary' => 'nullable|numeric', 'min:1','max:99.99',
            'files' => 'array',
            'files.*' => 'nullable|mimes:jpg,bmp,png,pdf,docx,doc' ,

            // 'branch_name'=> 'required',
            // 'cid'=> 'nullable',
            // 'client_name'=> 'required',
            // 'company'=> 'required',
            // 'city'=> 'required',
            // 'emp_basic_salary'=> 'required',
            // 'emp_allowances'=> 'required',
            // 'order_number'=> 'required',
            // 'client_phone'=> 'required',
            // 'bDate'=> 'required',
            // 'orderDate'=> 'required',
            // 'client_salary'=> 'required',
            // 'client_bank'=> 'required',
            // 'client_bank_transfer'=> 'required',
            // 'order_type'=> 'required',
            // 'hiring_date'=> 'required',
            // 'job_title'=> 'required',
            // 'emp_notes'=> 'nullable',
            // 'product_salary'=> 'required',
            // 'product_type'=> 'required',
            // 'product_side'=> 'required',
            // 'product_payment_status'=> 'required',
            // 'product_payment_needs'=> 'required',
            // 'product_installment'=> 'required',
            // 'product_notes'=> 'nullable',
            // 'total_indebtedness'=> 'required',
            // 'profit_ratio'=> 'required',
            // 'personal_finance'=> 'required',
            // 'required_salary'=> 'required',
            // 'total'=> 'required',
            // 'mortgage'=> 'required',
            // 'order_description'=> 'nullable',
            // 'additional_notes'=> 'nullable',
            // 'mediators_notes'=> 'nullable',
            // 'admin_notes'=> 'nullable'
        ];
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
            // 'branch_name.required' => trans('invoice.branch_name_required'),
            // 'client_name.required' => trans('invoice.client_name_required'),
            // 'company.required' => trans('invoice.company_required'),
            // 'city.required' => trans('invoice.city_required'),
            // 'emp_basic_salary.required' => trans('invoice.emp_basic_salary_required'),
            // 'emp_allowances.required' => trans('invoice.emp_allowances_required'),
            // 'order_number.required' => trans('invoice.order_number_required'),
            // 'client_phone.required' => trans('invoice.client_phone_required'),
            // 'bDate.required' => trans('invoice.bDate_required'),
            // 'orderDate.required' => trans('invoice.orderDate_required'),
            // 'client_salary.required' => trans('invoice.client_salary_required'),
            // 'client_bank.required' => trans('invoice.client_bank_required'),
            // 'client_bank_transfer.required' => trans('invoice.client_bank_transfer_required'),
            // 'order_type.required' => trans('invoice.order_type_required'),
            // 'hiring_date.required' => trans('invoice.hiring_date_required'),
            // 'job_title.required' => trans('invoice.job_title_required'),
            // 'product_salary.required' => trans('invoice.product_salary_required'),
            // 'product_type.required' => trans('invoice.product_type_required'),
            // 'product_side.required' => trans('invoice.product_side_required'),
            // 'product_payment_status.required' => trans('invoice.product_payment_status_required'),
            // 'product_payment_needs.required' => trans('invoice.product_payment_needs_required'),
            // 'product_installment.required' => trans('invoice.product_installment_required'),
            //  'total_indebtedness.required' => trans('invoice.total_indebtedness_required'),
            // 'profit_ratio.required' => trans('invoice.profit_ratio_required'),
            // 'personal_finance.required' => trans('invoice.personal_finance_required'),
            // 'required_salary.required' => trans('invoice.required_salary_required'),
            // 'total.required' => trans('invoice.total_required'),
            // 'mortgage.required' => trans('invoice.mortgage_required'),


        ];
    }
}
