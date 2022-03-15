<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('land_rates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('land_bank_id')->nullable();
            $table->string('first_rate')->nullable();
            $table->string('second_rate')->nullable();
            $table->string('third_rate')->nullable();
            $table->string('emp_rate_id')->nullable();
            $table->string('approved_rate')->nullable();
            $table->string('rate_notes')->nullable();
            $table->string('receipt_id')->nullable();
            $table->string('land_id')->nullable();
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
        Schema::dropIfExists('land_rates');
    }
}
