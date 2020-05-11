<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaintenancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenances', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date')->nullable();
            $table->integer('truck_id')->nullable();
            $table->integer('box_id')->nullable();
            $table->integer('driver_id')->nullable();
            $table->integer('vehicle_conditions')->nullable();
            $table->integer('firm_conductor')->nullable();
            $table->integer('defect_correcteds')->nullable();
            $table->integer('firm_mechanic')->nullable();
            $table->integer('firm_coordinator')->nullable();
            $table->text('comments')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maintenances');
    }
}
