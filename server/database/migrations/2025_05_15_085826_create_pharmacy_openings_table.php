<?php

use App\Enums\Weekday;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pharmacy_openings', function (Blueprint $table) {
            $table->id()->primary();
            $table->unsignedBigInteger('pharmacy_id');
            $table->enum('weekday', array_column(Weekday::cases(), 'name'));
            $table->time('opening_time');
            $table->time('closing_time');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pharmacy_opening');
    }
};
