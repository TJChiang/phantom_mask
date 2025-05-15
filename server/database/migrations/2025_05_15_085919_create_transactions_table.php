<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id()->primary();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('pharmacy_id');
            $table->unsignedBigInteger('mask_id');
            $table->unsignedBigInteger('quantity')->default(0)->comment('quantity of masks');
            $table->unsignedBigInteger('price')->default(0)->comment('price per mask at the time of purchase');
            $table->unsignedBigInteger('total')->default(0)->comment('total price of the transaction');
            $table->string('note')->nullable();
            // could be different from the created_at timestamp
            $table->timestamp('transaction_time')->comment('time of transaction');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
