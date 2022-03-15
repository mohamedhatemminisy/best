<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    
    protected $fillable = [
              'employee_name',
              'branch_name',
              'cid',
              'client_name',
              'company',
              'city',
              'emp_basic_salary',
              'emp_allowances',
              'order_number',
              'client_phone',
              'bDate',
              'orderDate',
              'client_salary',
              'client_bank',
              'client_bank_transfer',
              'order_type',
              'hiring_date',
              'job_title',
              'emp_notes',
              'product_salary',
              'product_type',
              'product_side',
              'product_payment_status',
              'product_payment_needs',
              'product_installment',
              'product_notes',
              'total_indebtedness',
              'profit_ratio',
              'personal_finance',
              'required_salary',
              'total',
              'mortgage',
              'order_description',
              'additional_notes',
              'mediators_notes',
              'admin_notes',
              'status',
              'added_by',
              'redirected_to',
              'delay'
 
    ];

    public function getRedirectUser()
    {
        return $this->belongsTo(User::class,'redirected_to');
    }
}
