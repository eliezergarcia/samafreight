<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignedPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assigned_points', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('inspection_id')->unsigned()->nullable();
            $table->integer('maintenance_id')->unsigned()->nullable();
            $table->integer('point_id')->unsigned();
            $table->integer('value')->unsigned();
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
        Schema::dropIfExists('assigned_points');
    }
}
