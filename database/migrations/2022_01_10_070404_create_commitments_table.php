<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommitmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commitments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('installment')->nullable();
            $table->string('product_type_id')->nullable();
            $table->string('sponser_id')->nullable();
            $table->string('payment_status_id')->nullable();
            $table->string('early_repayment')->nullable();
            $table->string('total')->nullable();
            $table->string('commitment_start_date')->nullable();
            $table->string('commitment_end_date')->nullable();
            $table->string('remaining_installments_count')->nullable();
            $table->string('last_payment_date')->nullable();
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('commitments');
    }
}
