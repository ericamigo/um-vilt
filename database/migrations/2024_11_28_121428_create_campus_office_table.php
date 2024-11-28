<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('campus_office', function (Blueprint $table) {
            $table->id();
            $table->foreignId('campus_id')->constrained();
            $table->foreignId('office_id')->constrained();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('campus_office');
    }
};
