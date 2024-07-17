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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('name_uz');
            $table->string('name_en');
            $table->string('name_ru');
            $table->date('date');
            $table->text('adress_uz');
            $table->text('adress_en');
            $table->text('adress_ru');
            $table->string('email');
            $table->string('phone');
            $table->string('education_uz');
            $table->string('education_en');
            $table->string('education_ru');
            $table->string('website');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
