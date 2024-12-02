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
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->string('role');
            $table->string('photo');
            $table->decimal('salary', 10, 2);
            $table->integer('hours');
            $table->string('location');
            $table->enum('type', ['full-time', 'part-time', 'side-job'])->default('full-time');
            $table->string('requirements');
            $table->string('description');
            $table->timestamps();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('category_id')->constrained('categories');
            $table->foreignId('company_id')->constrained('companies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacancies');
    }
};
