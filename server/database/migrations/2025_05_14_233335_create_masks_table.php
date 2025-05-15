<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('masks', function (Blueprint $table) {
            $table->id()->primary();
            $table->unsignedBigInteger('pharmacy_id');
            $table->string('name', 255);
            $table->decimal('price', 10, 2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('masks');
    }
};
