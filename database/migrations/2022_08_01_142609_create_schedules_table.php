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
        Schema::create('schedules', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('name');
            $table->boolean('is_default')->default(false);
            $table->integer('order_number')->default(0); // default order number

            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->time('time_in')->default('08:00:00');
            $table->time('time_out')->default('17:00:00');

            $table->boolean('is_override_holiday')->default(false);

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
        Schema::dropIfExists('schedules');
    }
};
