<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('dealer_id');
            $table->unsignedBigInteger('payment_id');
            $table->unsignedBigInteger('motor_id');
            $table->boolean('is_success');
            $table->timestamp('datetime');

            $table->foreign('customer_id')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('dealer_id')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('payment_id')->references('id')->on('payments');
            $table->foreign('motor_id')->references('id')->on('motors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};