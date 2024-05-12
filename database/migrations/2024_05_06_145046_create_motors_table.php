<?php

use App\Models\User;
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
        Schema::create('motors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('dealer_id');
            $table->string('image');
            $table->string('type');
            $table->string('merk');
            $table->integer('price');
            $table->integer('released_year');
            $table->integer('used_year');
            $table->integer('amount');
            $table->text('description');
            $table->timestamps();

            $table->foreign('dealer_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motors');
    }
};