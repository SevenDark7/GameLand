<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id')->constrained()
                ->onDelete('cascade');
            $table->foreignId('user_id')->constrained()
                ->onDelete('cascade');
            $table->text('comment');
            $table->tinyInteger('status')->default(2);
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
        Schema::dropIfExists('game_comments');
    }
}
