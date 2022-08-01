<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule_weekday', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('schedule_id')->references('id')->on('schedules');

            $table->enum('sun', ['weekday', 'weekend'])->default('weekend');
            $table->enum('mon', ['weekday', 'weekend'])->default('weekday');
            $table->enum('tue', ['weekday', 'weekend'])->default('weekday');
            $table->enum('wed', ['weekday', 'weekend'])->default('weekday');
            $table->enum('thu', ['weekday', 'weekend'])->default('weekday');
            $table->enum('fri', ['weekday', 'weekend'])->default('weekday');
            $table->enum('sat', ['weekday', 'weekend'])->default('weekend');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedule_weekday');
    }
};
