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
        Schema::create('form_2_predictions', function (Blueprint $table) {
            $table->id();
            $table->string('candidate_no');
            $table->string('sex');
            $table->string('physics');
            $table->string('mathematics');
            $table->string('chemistry');
            $table->string('biology');
            $table->string('civics');
            $table->string('english');
            $table->string('swahili');
            $table->string('geography');
            $table->string('history');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_2_predictions');
    }
};
