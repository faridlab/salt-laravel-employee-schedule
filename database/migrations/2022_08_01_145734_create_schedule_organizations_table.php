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
        Schema::create('schedule_organizations', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('organization_id')->references('id')->on('organizations');
            $table->foreignUuid('structure_id')->references('id')->on('organization_structures');
            $table->enum('type', [
                'department',
                'level',
                'position'
            ])->default('department');

            $table->string('name');
            $table->integer('order_number')->default(100);

            $table->date('start_date');
            $table->date('end_date'); // other default, end date must be filled
            $table->time('time_in')->default('08:00:00');
            $table->time('time_out')->default('17:00:00');

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
        Schema::dropIfExists('schedule_organizations');
    }
};
