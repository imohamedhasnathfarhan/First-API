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
        Schema::create('company', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('registration_no');
            $table->string('address1');
            $table->string('address2')->nullable();
            $table->string('city');
            $table->string('zipcode');
            $table->string('country');
            $table->string('tel1');
            $table->string('tel2')->nullable();
            $table->string('tel3')->nullable();
            $table->string('email');
            $table->string('logo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company');
    }
};
