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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->string('gender')->nullable();
            $table->string('mobile')->unique();
            $table->string('password');
            $table->string('designation')->nullable();
            $table->string('department')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->unique();
            $table->date('dob')->nullable();
            $table->string('education')->nullable();
            $table->string('profile_picture')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
