<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('basic_salary')->nullable();
            $table->string('Allowances_without_housing_allowance')->nullable();
            $table->string('Monthly_housing_allowance')->nullable();
            $table->string('total')->nullable();
            $table->string('retirement_discount')->nullable();
            $table->string('other_discounts')->nullable();
            $table->string('net')->nullable();
            $table->string('approved_salary')->nullable();
            $table->string('business_sector_id')->nullable();
            $table->string('employer_id')->nullable();
            $table->string('job_title')->nullable();
            $table->string('hiring_date')->nullable();
            $table->string('Remaining_period_of_retirement')->nullable();
            $table->string('bank_salary_transferred')->nullable();
            $table->text('salary_note')->nullable();
            $table->string('receipt_id')->nullable();

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
        Schema::dropIfExists('salaries');
    }
}
