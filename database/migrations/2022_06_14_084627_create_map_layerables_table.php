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
        Schema::create('map_layerables', function (Blueprint $table) {
            $table->unsignedBigInteger('map_layer_id');
            $table->unsignedBigInteger('map_layerable_id');
            $table->string('map_layerable_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('map_layerables');
    }
};
