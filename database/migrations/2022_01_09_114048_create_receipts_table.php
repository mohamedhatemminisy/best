<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('identity')->nullable();
            $table->string('phone_one')->nullable();
            $table->string('phone_two')->nullable();
            $table->string('Hijri_date_of_birth')->nullable();
            $table->string('birthday')->nullable();
            $table->string('Hijri_age')->nullable();
            $table->string('birth_age')->nullable();
            $table->string('city_id')->nullable();
            $table->string('family_members')->nullable();
            $table->text('notes')->nullable();
            $table->string('bank_id')->nullable();
            $table->string('support_status')->nullable();
            $table->string('order_type')->nullable();
            $table->string('order_result')->nullable();
            $table->string('product_type_id')->nullable();
            $table->string('code')->nullable();
            $table->string('file')->nullable();
            $table->text('product_details')->nullable();
            $table->string('compeleted')->nullable();
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
        Schema::dropIfExists('receipts');
    }
}
