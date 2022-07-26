<?php

use App\Models\Setting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->unsignedDouble('basic_cost')->default(0);
            $table->unsignedDouble('discount')->default(0);
            $table->tinyInteger('mode')->default(0);
            $table->string('meta')->nullable();
            $table->timestamps();
        });
        Setting::query()->firstOrCreate([
            'basic_cost' => 0,
            'discount' => 0,
            'mode' => 0,
            'meta' => null,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
