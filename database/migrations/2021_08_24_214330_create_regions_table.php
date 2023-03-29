<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionsTable extends Migration
{

    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name', 250)->nullable();
            $table->uuid('city_id')->nullable();
        });

        Schema::table('regions', function (Blueprint $table) {
            $table->foreign('city_id')->references('id')->on('cities');
            $table->index(['city_id']);
        });
    }


    public function down()
    {
        Schema::dropIfExists('regions');
    }
}
