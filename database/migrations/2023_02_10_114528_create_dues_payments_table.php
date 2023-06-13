<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dues_payments', function (Blueprint $table) {
            $table->id();
            $table->string('student_id')->nullable();
            $table->string('amount')->nullable();
            $table->string('dues_for_level')->nullable();
            $table->string('dues_id')->nullable();
            $table->string('invoice_number')->unique();
            $table->string('phone_number');
            $table->string('type_of_payment');
            $table->string('reference_number');
            $table->double('amount');
            $table->string('paid_by');
            $table->softDeletes();
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
        Schema::dropIfExists('dues_payments');
    }
};
