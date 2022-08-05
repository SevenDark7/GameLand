<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('release')->nullable();
            $table->string('publisher')->nullable();
            $table->string('platform')->nullable();
            $table->string('genre')->nullable();
            $table->longText('description')->nullable();
            $table->string('image')->nullable();
            $table->foreignId('user_id')->constrained()
                ->onDelete('cascade');
            $table->unsignedBigInteger('visit')->default(0);
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
        Schema::dropIfExists('information');
    }
}
