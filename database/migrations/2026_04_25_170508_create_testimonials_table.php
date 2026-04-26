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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // John Smith
            $table->string('designation')->nullable(); // CEO
            $table->string('company')->nullable(); // TechStart
            $table->string('avatar')->nullable(); // image or initials
            $table->text('message');
            $table->tinyInteger('rating')->default(5); // 1-5 stars
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
