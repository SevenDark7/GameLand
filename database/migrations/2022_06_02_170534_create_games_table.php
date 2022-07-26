<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('platform')->nullable();
            $table->string('genre')->nullable();
            $table->longText('description')->nullable();
            $table->text('address')->nullable();
            $table->string('image')->nullable();
            $table->string('price')->default(0);
            $table->foreignId('user_id')->constrained()
                ->onDelete('cascade');
            $table->foreignId('city_id')->constrained()
                ->onUpdate('cascade');
            $table->unsignedBigInteger('visit')->default(0);
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
        Schema::dropIfExists('games');
    }
}
