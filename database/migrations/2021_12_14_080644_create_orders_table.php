<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('phone');
            $table->string('identify_number')->nullable();
            $table->string('city');
            $table->string('company');
            $table->string('salary');
            $table->string('bank');
            $table->string('financing');
            $table->enum('benefit',['true','false']);
            $table->enum('responsible',['true','false']);
            $table->enum('problem',['true','false']);
            $table->string('code')->nullable();
            $table->text('message');
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
        Schema::dropIfExists('orders');
    }
}
