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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title',30);
            $table->string('price',50);
            $table->string('data_make',50);
            $table->timestamps();

            $table->bigInteger('maker_id')
                ->unsigned()
                ->nullable(false);
            $table->foreign('maker_id')
                ->references('id')
                ->on('makers');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
