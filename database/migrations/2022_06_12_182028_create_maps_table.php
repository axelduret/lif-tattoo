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
        Schema::create('maps', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->timestamp('published_at')->nullable();
            $table->string('name');
            $table->integer('zoom');
            $table->integer('maxZoom')->nullable();
            $table->integer('minZoom')->nullable();
            $table->integer('center');
            $table->integer('lat');
            $table->integer('lng');
            $table->integer('attributionControl')->nullable()->default(false);
            $table->boolean('trackResize')->nullable()->default(true);
            $table->boolean('boxZoom')->nullable()->default(true);
            $table->boolean('scrollWheelZoom')->nullable()->default(false);
            $table->boolean('touchZoom')->nullable()->default(true);
            $table->boolean('gestureHandling')->nullable()->default(false);
            $table->foreignId('user_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maps');
    }
};
