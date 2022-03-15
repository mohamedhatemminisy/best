<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('employee_name')->nullable();
            $table->string('branch_name')->nullable();
            $table->string('cid')->nullable();
            $table->string('client_name')->nullable();
            $table->string('company')->nullable();
            $table->string('city')->nullable();
            $table->string('emp_basic_salary')->nullable();
            $table->string('emp_allowances')->nullable();
            $table->string('order_number')->nullable();
            $table->string('client_phone')->nullable();
            $table->string('bDate')->nullable();
            $table->string('orderDate')->nullable();
            $table->string('client_salary')->nullable();
            $table->string('client_bank')->nullable();
            $table->string('client_bank_transfer')->nullable();
            $table->string('order_type')->nullable();
            $table->string('hiring_date')->nullable();
            $table->string('job_title')->nullable();
            $table->text('emp_notes')->nullable();
            $table->string('product_salary')->nullable();
            $table->string('product_type')->nullable();
            $table->string('product_side')->nullable();
            $table->string('product_payment_status')->nullable();
            $table->enum('product_payment_needs',['yes','no'])->nullable();
            $table->string('product_installment')->nullable();
            $table->text('product_notes')->nullable();
            $table->string('total_indebtedness')->nullable();
            $table->string('profit_ratio')->nullable();
            $table->string('personal_finance')->nullable();
            $table->string('total')->nullable();
            $table->string('required_salary')->nullable();
            $table->string('mortgage')->nullable();;
            $table->text('order_description')->nullable();
            $table->text('additional_notes')->nullable();
            $table->text('mediators_notes')->nullable();
            $table->text('admin_notes')->nullable();
            $table->enum('status',['accept','reject','redirect','delay'])->nullable();
            $table->integer('added_by')->nullable();
            $table->integer('redirected_to')->nullable();
            $table->enum('delay',['one_month','three_months','six_months','one_year'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
