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
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->text('date');
            $table->string('title_uz');
            $table->string('title_en');
            $table->string('title_ru');
            $table->string('adress_uz');
            $table->string('adress_en');
            $table->string('adress_ru');
            $table->text('paragraph_uz');
            $table->text('paragraph_en');
            $table->text('paragraph_ru');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resumes');
    }
};
