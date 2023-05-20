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
        Schema::create('create_artists', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('artiste');
            $table->string('header');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('spotify');
            $table->string('apple-music');
            $table->string('image');
            $table->string('content');
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
        Schema::dropIfExists('create-artists');
    }
};
