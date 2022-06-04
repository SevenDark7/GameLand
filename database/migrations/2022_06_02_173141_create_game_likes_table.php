<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_likes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id')->constrained()
                ->onDelete('cascade');
            $table->foreignId('user_id')->constrained()
                ->onDelete('cascade');
            $table->boolean('active')->default(1);
            $table->string('meta')->nullable();
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
        Schema::dropIfExists('game_likes');
    }
}
