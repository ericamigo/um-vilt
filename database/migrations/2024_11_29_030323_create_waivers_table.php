<?php

use App\Enums\Statuses\WaiverStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('waivers', function (Blueprint $table) {
            $table->id();
            $table->integer('year');
            $table->string('semester');
            $table->string('status')->default(WaiverStatus::New->value);
            $table->foreignId('employee_id')->constrained();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('waivers');
    }
};
