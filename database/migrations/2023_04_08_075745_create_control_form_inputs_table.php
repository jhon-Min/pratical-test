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
        Schema::create('control_form_inputs', function (Blueprint $table) {
            $table->id();
            $table->boolean('name')->default(true);
            $table->boolean('phone')->default(true);
            $table->boolean('date_of_birth')->default(true);
            $table->boolean('gender')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('control_form_inputs');
    }
};
