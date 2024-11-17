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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->timestamp('request_date')->nullable();
            $table->decimal('pickup_lat', 10, 8);
            $table->decimal('pickup_lng', 10, 8);
            $table->string('pickup_location');
            $table->decimal('dropoff_lat', 10, 8);
            $table->decimal('dropoff_lng', 10, 8);
            $table->string('dropoff_location');
            $table->timestamp('pickup_date')->nullable();
            $table->timestamp('dropoff_date')->nullable();
            $table->string('type');
            $table->unsignedBigInteger('driver_id');
            $table->string('driver_name');
            $table->unsignedTinyInteger('driver_rating');
            $table->string('driver_pic');
            $table->string('car_make');
            $table->string('car_model');
            $table->string('car_number');
            $table->year('car_year');
            $table->string('car_pic');
            $table->integer('duration');
            $table->string('duration_unit');
            $table->decimal('distance', 8, 2);
            $table->string('distance_unit');
            $table->decimal('cost', 10, 2);
            $table->string('cost_unit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */

    public function down()
    {
    Schema::dropIfExists('trips');
    }
};