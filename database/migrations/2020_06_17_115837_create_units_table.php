<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('text');
            $table->string('foto_url');
            $table->timestamps();
        });

        Schema::create('agency_unit', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedBigInteger('agency_id');
            $table->unsignedBigInteger('unit_id');
            $table->timestamps();

            $table->unique(['agency_id', 'unit_id']);

            $table->foreign('agency_id')->references('id')->on('agencies')->onDelete('cascade');
            $table->foreign('unit_id')->references('id')->on('units')->onDelete('cascade');

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('units');
    }
}
