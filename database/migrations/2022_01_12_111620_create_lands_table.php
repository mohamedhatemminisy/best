<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lands', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('land_type_id')->nullable();
            $table->string('land_status_id')->nullable();
            $table->string('planned_num')->nullable();
            $table->string('piece_num')->nullable();
            $table->string('real_city_id')->nullable();
            $table->string('district')->nullable();
            $table->string('owner_num')->nullable();
            $table->string('rate_num')->nullable();
            $table->string('real_license_type_id')->nullable();
            $table->string('license_issue_date')->nullable();
            $table->string('license_expiration_date')->nullable();
            $table->string('property_price')->nullable();
            $table->string('property_notes')->nullable();
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
        Schema::dropIfExists('lands');
    }
}
