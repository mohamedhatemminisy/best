<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealEstateRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('real_estate_rates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('real_bank_id')->nullable();
            $table->string('first_rate')->nullable();
            $table->string('second_rate')->nullable();
            $table->string('third_rate')->nullable();
            $table->string('emp_rate_id')->nullable();
            $table->string('approved_rate')->nullable();
            $table->string('rate_notes')->nullable();
            $table->string('receipt_id')->nullable();
            $table->string('real_estate_id')->nullable();
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
        Schema::dropIfExists('real_estate_rates');
    }
}
