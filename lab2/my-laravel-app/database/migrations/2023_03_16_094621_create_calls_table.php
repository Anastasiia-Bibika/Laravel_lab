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
        Schema::create('calls', function (Blueprint $table) {
            $table->id();
            $table->string('number_call',50);
            $table->string('duration',50);
            $table->float('pay');
            $table->string('implementation_time',50);

            $table->bigInteger('abonent_id')
                ->unsigned()
                ->nullable(false);

            $table->timestamps();

            $table->foreign('abonent_id')
                ->references('id')
                ->on('abonents');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calls');
    }
};
