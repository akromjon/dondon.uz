<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
  
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('game_categories_id')->nullable();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->longText('url')->nullable();
            $table->string('height')->nullable();
            $table->string('width')->nullable();            
            $table->unsignedBigInteger('user_id')->nullable();
            $table->boolean('is_published')->default();
            $table->string('picture')->nullable();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('games');
    }
}
