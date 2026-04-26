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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title'); // Laravel Developer
            $table->text('description');
            $table->string('image')->nullable();

            // Contact info
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('location')->nullable();

            // CV file
            $table->string('cv_file')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
