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
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('phone')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->enum('role', ['student', 'teacher', 'parent', 'administrator'])->default('student');
            $table->string('school_name')->nullable();
            $table->string('school_location')->nullable();
            $table->string('grade_level')->nullable();
            $table->enum('curriculum', ['uk', 'ng'])->default('uk');
            $table->json('learning_goals')->nullable();
            $table->json('subject_preferences')->nullable();
            $table->boolean('notifications_enabled')->default(true);
            $table->string('timezone')->default('UTC');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_profiles');
    }
};
