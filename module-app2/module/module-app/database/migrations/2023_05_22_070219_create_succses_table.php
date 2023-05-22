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
        Schema::create('succses', function (Blueprint $table) {
            $table->id();
            $table->string('object',50);
            $table->string('marks',50);
            $table->string('data_marks',50);
            $table->timestamps();

        });
        Schema::table('succses', function (Blueprint $table) {
            $table->bigInteger('student_id')
                ->unsigned()
                ->nullable(false);
            $table->foreign('student_id')
                ->references ('id')
                ->on('students');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('succses');
    }
};
